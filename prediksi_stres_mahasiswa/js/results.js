// Get result data
const resultData = utils.getFromStorage('current_result');

if (!resultData) {
    window.location.href = 'input_manual.php';
}

// DOM Elements
const scoreCircle = document.getElementById('scoreCircle');
const scoreValue = document.getElementById('scoreValue');
const scoreLabel = document.getElementById('scoreLabel');
const scoreDescription = document.getElementById('scoreDescription');
const recommendationsList = document.getElementById('recommendationsList');

// Display results
function displayResults() {
    const { overallScore, categoryScores } = resultData;
    const stressLevel = utils.calculateStressLevel(overallScore);

    // Animate score
    animateScore(0, overallScore, 1500);

    // Update score display
    scoreCircle.style.background = `conic-gradient(${stressLevel.color} ${overallScore * 3.6}deg, rgba(255,255,255,0.1) 0deg)`;
    scoreLabel.textContent = `Tingkat Stres: ${stressLevel.level}`;
    scoreLabel.style.color = stressLevel.color;

    // Description based on level
    const descriptions = {
        'Rendah': 'Tingkat stres Anda berada dalam kategori rendah. Anda mengelola stres dengan baik!',
        'Sedang': 'Tingkat stres Anda berada dalam kategori sedang. Perhatikan beberapa area yang perlu diperbaiki.',
        'Tinggi': 'Tingkat stres Anda berada dalam kategori tinggi. Sangat disarankan untuk mencari bantuan profesional.'
    };
    scoreDescription.textContent = descriptions[stressLevel.level];

    // Create radar chart
    createRadarChart(categoryScores);

    // Generate recommendations
    generateRecommendations(categoryScores, stressLevel.level);
}

// Animate score counter
function animateScore(start, end, duration) {
    const startTime = performance.now();

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        const current = Math.floor(start + (end - start) * progress);
        scoreValue.textContent = current;

        if (progress < 1) {
            requestAnimationFrame(update);
        }
    }

    requestAnimationFrame(update);
}

// Create radar chart
function createRadarChart(categoryScores) {
    const ctx = document.getElementById('radarChart').getContext('2d');

    const data = {
        labels: Object.keys(categoryScores),
        datasets: [{
            label: 'Tingkat Stres per Kategori',
            data: Object.values(categoryScores),
            fill: true,
            backgroundColor: 'rgba(102, 126, 234, 0.2)',
            borderColor: 'rgb(102, 126, 234)',
            pointBackgroundColor: 'rgb(102, 126, 234)',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#fff',
            pointHoverBorderColor: 'rgb(102, 126, 234)'
        }]
    };

    const config = {
        type: 'radar',
        data: data,
        options: {
            elements: {
                line: {
                    borderWidth: 3
                }
            },
            scales: {
                r: {
                    angleLines: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    pointLabels: {
                        color: '#b4bcd0',
                        font: {
                            size: 14,
                            family: 'Inter'
                        }
                    },
                    ticks: {
                        color: '#8892a6',
                        backdropColor: 'transparent'
                    },
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: '#b4bcd0',
                        font: {
                            size: 14,
                            family: 'Inter'
                        }
                    }
                }
            }
        }
    };

    new Chart(ctx, config);
}

// Generate recommendations
function generateRecommendations(categoryScores, stressLevel) {
    const recommendations = {
        'Akademik': {
            title: 'Manajemen Akademik',
            tips: [
                'Buat jadwal belajar yang terstruktur dan realistis',
                'Gunakan teknik Pomodoro untuk meningkatkan fokus',
                'Jangan ragu untuk meminta bantuan dosen atau tutor',
                'Prioritaskan tugas berdasarkan deadline dan tingkat kesulitan'
            ]
        },
        'Keuangan': {
            title: 'Manajemen Keuangan',
            tips: [
                'Buat budget bulanan dan catat semua pengeluaran',
                'Cari beasiswa atau program bantuan keuangan',
                'Pertimbangkan part-time job yang fleksibel',
                'Hindari pengeluaran impulsif dan prioritaskan kebutuhan'
            ]
        },
        'Sosial': {
            title: 'Kehidupan Sosial',
            tips: [
                'Luangkan waktu untuk bersosialisasi dengan teman',
                'Ikut komunitas atau organisasi yang sesuai minat',
                'Jaga komunikasi dengan keluarga secara rutin',
                'Jangan ragu untuk berbagi perasaan dengan orang terdekat'
            ]
        },
        'Kesehatan': {
            title: 'Kesehatan & Gaya Hidup',
            tips: [
                'Usahakan tidur 7-9 jam setiap malam',
                'Olahraga minimal 30 menit, 3x seminggu',
                'Konsumsi makanan bergizi dan minum air yang cukup',
                'Hindari begadang dan atur pola makan yang teratur'
            ]
        },
        'Psikologis': {
            title: 'Kesehatan Mental',
            tips: [
                'Praktikkan teknik relaksasi seperti meditasi atau deep breathing',
                'Luangkan waktu untuk hobi dan aktivitas yang menyenangkan',
                'Jangan ragu untuk konsultasi dengan psikolog jika diperlukan',
                'Hindari overthinking dan fokus pada hal yang bisa dikontrol'
            ]
        }
    };

    // Find top 3 highest stress categories
    const sortedCategories = Object.entries(categoryScores)
        .sort((a, b) => b[1] - a[1])
        .slice(0, 3);

    let html = '';

    // General recommendation based on stress level
    if (stressLevel === 'Tinggi') {
        html += `
            <div class="recommendation-item" style="border-left-color: #ef4444;">
                <h4>⚠️ Perhatian Khusus</h4>
                <p>Tingkat stres Anda cukup tinggi. Sangat disarankan untuk:</p>
                <ul>
                    <li>Konsultasi dengan psikolog atau konselor kampus</li>
                    <li>Hubungi layanan kesehatan mental: 119 ext 8 (Hotline Kesehatan Mental)</li>
                    <li>Ceritakan kondisi Anda kepada orang terdekat</li>
                </ul>
            </div>
        `;
    }

    // Category-specific recommendations
    sortedCategories.forEach(([category, score]) => {
        const rec = recommendations[category];
        const color = score > 66 ? '#ef4444' : score > 33 ? '#f59e0b' : '#10b981';

        html += `
            <div class="recommendation-item" style="border-left-color: ${color};">
                <h4>${rec.title} (Skor: ${score})</h4>
                <ul>
                    ${rec.tips.slice(0, 3).map(tip => `<li>${tip}</li>`).join('')}
                </ul>
            </div>
        `;
    });

    recommendationsList.innerHTML = html;
}

// Initialize
displayResults();

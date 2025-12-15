// Get result data
const resultData = utils.getFromStorage('current_result');

if (!resultData) {
    window.location.href = 'input_manual.php';
}

// DOM Elements
const stressLevelBanner = document.getElementById('stressLevelBanner');
const stressLevelText = document.getElementById('stressLevelText');
const predictionDate = document.getElementById('predictionDate');
const probHigh = document.getElementById('probHigh');
const probLow = document.getElementById('probLow');
const probMedium = document.getElementById('probMedium');
const barHigh = document.getElementById('barHigh');
const barLow = document.getElementById('barLow');
const barMedium = document.getElementById('barMedium');
const shapFactors = document.getElementById('shapFactors');
const recommendationsList = document.getElementById('recommendationsList');

// Display results
function displayResults() {
    const { overallScore, categoryScores, probability, date, level } = resultData;
    const stressLevel = level || utils.calculateStressLevel(overallScore).level;

    // Set date
    if (date) {
        const d = new Date(date);
        predictionDate.textContent = `${d.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })} ${d.toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' })}`;
    }

    // Update stress level banner
    stressLevelText.textContent = `Tingkat Stres: ${stressLevel}`;

    // Set banner color based on stress level
    if (stressLevel === 'Tinggi' || stressLevel === 'High') {
        stressLevelBanner.style.backgroundColor = 'rgba(239, 68, 68, 0.2)';
        stressLevelBanner.style.borderColor = 'rgb(239, 68, 68)';
        stressLevelBanner.style.border = '2px solid';
        stressLevelText.style.color = 'rgb(248, 113, 113)';
    } else if (stressLevel === 'Sedang' || stressLevel === 'Medium') {
        stressLevelBanner.style.backgroundColor = 'rgba(245, 158, 11, 0.2)';
        stressLevelBanner.style.borderColor = 'rgb(245, 158, 11)';
        stressLevelBanner.style.border = '2px solid';
        stressLevelText.style.color = 'rgb(251, 191, 36)';
    } else {
        stressLevelBanner.style.backgroundColor = 'rgba(16, 185, 129, 0.2)';
        stressLevelBanner.style.borderColor = 'rgb(16, 185, 129)';
        stressLevelBanner.style.border = '2px solid';
        stressLevelText.style.color = 'rgb(52, 211, 153)';
    }

    // Update probability distribution
    if (probability && probability.length === 3) {
        // probability = [rendah, sedang, tinggi]
        const probRendah = (probability[0] * 100).toFixed(1);
        const probSedang = (probability[1] * 100).toFixed(1);
        const probTinggi = (probability[2] * 100).toFixed(1);

        probLow.textContent = probRendah + '%';
        probMedium.textContent = probSedang + '%';
        probHigh.textContent = probTinggi + '%';

        // Animate bars
        setTimeout(() => {
            barLow.style.width = probRendah + '%';
            barMedium.style.width = probSedang + '%';
            barHigh.style.width = probTinggi + '%';
        }, 100);
    }

    // Generate SHAP factors (top contributing factors)
    // Use derived_features if available (from API), otherwise fallback or empty
    const derivedFeatures = resultData.derived_features || resultData.answers; // Fallback to raw answers if derived features missing
    generateShapFactors(derivedFeatures);

    // Generate recommendations
    generateRecommendations(categoryScores, stressLevel);
}

// Generate Factors display (Using specific features requested)
function generateShapFactors(derivedFeatures) {
    if (!derivedFeatures) return;

    // List of specific features to show
    const targetFeatures = [
        'Academic_Stress_Score', 'Tekanan_Akademik', 'Kesulitan_Akumulasi',
        'Stres_Tugas_Deadline', 'Tekanan_Eksternal', 'Kurang_Kendali',
        'Rasa_Tidak_Sanggup', 'Stres_Pribadi', 'Marah_Eksternal_Studi',
        'Stres_Perubahan_Akademik', 'Tekanan_IPK', 'Cemas_Karir',
        'Kebiasaan_Buruk', 'Proses_Sesuai_Harapan', 'Academic_Confidence_Score'
    ];

    // Filter and sort features
    const sortedFeatures = targetFeatures
        .filter(key => derivedFeatures[key] !== undefined)
        .map(key => ({
            key: key,
            value: Number(derivedFeatures[key]),
            displayName: key.replace(/_/g, ' ') // Simple formatting
        }))
        .sort((a, b) => b.value - a.value)
        .slice(0, 5); // Top 5 factors

    let html = '';
    sortedFeatures.forEach((factor, index) => {
        let impact = 'Low';
        let normalizedScore = factor.value;

        // Normalize for display context if needed (most are 1-5, scores are likely 1-5 or similar)
        if (factor.value > 3.5) impact = 'High';
        else if (factor.value > 2.5) impact = 'Medium';

        const rankBadge = `Rank #${index + 1}`;

        html += `
            <div class="flex items-center justify-between p-4 bg-gray-700/30 rounded-lg border border-gray-600/50">
                <div class="flex-1">
                    <div class="flex items-center gap-3 mb-1">
                        <span class="text-xs font-semibold px-2 py-1 bg-indigo-600 text-white rounded">${rankBadge}</span>
                        <h4 class="font-semibold text-white">${factor.displayName}</h4>
                    </div>
                    <p class="text-sm text-gray-400">Value: ${factor.value.toFixed(2)} (${impact})</p>
                </div>
            </div>
        `;
    });

    shapFactors.innerHTML = html;
}

// Generate recommendations
function generateRecommendations(categoryScores, stressLevel) {
    const recommendations = {
        'Akademik': {
            title: 'Beban Akademik & Studi',
            tips: [
                'Buat jadwal belajar yang terstruktur dengan teknik Time Blocking',
                'Gunakan teknik Pomodoro (25 menit fokus, 5 menit istirahat)',
                'Konsultasi dengan dosen pembimbing jika mengalami kesulitan materi',
                'Prioritaskan tugas berdasarkan deadline dan tingkat kesulitan'
            ]
        },
        'Keuangan': {
            title: 'Manajemen Keuangan',
            tips: [
                'Buat pencatatan arus kas (pemasukan vs pengeluaran) harian',
                'Cari informasi beasiswa atau bantuan finansial kampus',
                'Kurangi pengeluaran gaya hidup yang tidak mendesak',
                'Pertimbangkan kerja paruh waktu yang tidak mengganggu kuliah'
            ]
        },
        'Sosial': {
            title: 'Interaksi Sosial & Dukungan',
            tips: [
                'Komunikasikan batasan (boundaries) dengan tegas namun sopan',
                'Carilah teman bicara atau support system yang positif',
                'Jangan ragu menolak ajakan yang mengganggu waktu istirahat',
                'Ikuti kegiatan komunitas positif untuk memperluas relasi'
            ]
        },
        'Kesehatan': {
            title: 'Pola Hidup & Kesehatan Fisik',
            tips: [
                'Prioritaskan tidur 7-8 jam sehari untuk pemulihan kognitif',
                'Lakukan olahraga ringan minimal 15 menit setiap hari',
                'Kurangi konsumsi kafein dan gula berlebih',
                'Perbaiki pola makan dengan gizi seimbang'
            ]
        },
        'Psikologis': {
            title: 'Kesehatan Mental & Emosional',
            tips: [
                'Praktikkan mindfulness atau meditasi 10 menit sehari',
                'Lakukan detoks media sosial 1 jam sebelum tidur',
                'Tulis jurnal harian untuk meluapkan emosi (journaling)',
                'Segera hubungi konselor jika merasa kewalahan terus-menerus'
            ]
        },
        'Masa Depan': {
            title: 'Kecemasan Masa Depan (Karir)',
            tips: [
                'Fokus pada apa yang bisa dikontrol hari ini, bukan "gimana nanti"',
                'Konsultasi dengan unit pengembangan karir di kampus',
                'Mulai bangun portofolio skill sedikit demi sedikit',
                'Ingat bahwa setiap orang punya timeline sukses yang berbeda'
            ]
        }
    };

    // Find top 3 highest stress categories
    const sortedCategories = Object.entries(categoryScores)
        .sort((a, b) => b[1] - a[1])
        .slice(0, 3);

    let html = '';

    // Add specific header description
    html += `<p class="text-gray-300 mb-6 text-sm">Berikut adalah rekomendasi yang dipersonalisasi berdasarkan 3 faktor utama yang paling berkontribusi terhadap tingkat stres Anda:</p>`;

    // Category-specific recommendations
    sortedCategories.forEach(([category, score], index) => {
        const rec = recommendations[category];
        if (!rec) return;

        // Emoji numbering
        const emojis = ['1️⃣', '2️⃣', '3️⃣'];
        const num = emojis[index] || '•';

        // Define color based on priority
        const titleColor = index === 0 ? 'text-indigo-400' : 'text-white';

        html += `
            <div class="mb-6 p-4 bg-gray-800/50 rounded-xl border border-gray-700/50 hover:border-indigo-500/30 transition-colors">
                <h4 class="${titleColor} font-bold text-lg mb-3 flex items-center">
                    <span class="text-2xl mr-3">${num}</span>
                    ${rec.title}
                    <span class="ml-auto text-xs font-normal px-2 py-1 bg-gray-700 rounded text-gray-400">Impact: ${(score / 100).toFixed(2)}</span>
                </h4>
                <div class="ml-10">
                    <ul class="space-y-2">
                        ${rec.tips.map(tip => `
                            <li class="flex items-start text-sm text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mr-2 mt-0.5 flex-shrink-0 text-green-400">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                ${tip}
                            </li>
                        `).join('')}
                    </ul>
                </div>
            </div>
        `;
    });

    recommendationsList.innerHTML = html;
}

// Initialize
displayResults();

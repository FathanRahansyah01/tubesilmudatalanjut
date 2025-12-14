// Get history data
const history = utils.getFromStorage('stress_history') || [];

// DOM Elements
const historyList = document.getElementById('historyList');
const emptyState = document.getElementById('emptyState');
const trendChartContainer = document.getElementById('trendChartContainer');

// Display history
function displayHistory() {
    if (history.length === 0) {
        emptyState.style.display = 'block';
        return;
    }

    // Sort by date (newest first)
    history.sort((a, b) => new Date(b.date) - new Date(a.date));

    // Display trend chart
    trendChartContainer.style.display = 'block';
    createTrendChart();

    // Display history items
    let html = '';
    history.forEach((item, index) => {
        const stressLevel = utils.calculateStressLevel(item.overallScore);
        const date = utils.formatDate(item.date);

        html += `
            <div class="history-item">
                <div class="history-info">
                    <h3>Tes #${history.length - index}</h3>
                    <p class="history-date">${date}</p>
                </div>
                <div class="history-score" style="background: ${stressLevel.color}20; color: ${stressLevel.color}; border: 2px solid ${stressLevel.color};">
                    ${item.overallScore}
                </div>
                <button class="btn btn-secondary" onclick="viewDetail('${item.id}')">Lihat Detail</button>
            </div>
        `;
    });

    historyList.innerHTML = html;
}

// Create trend chart
function createTrendChart() {
    const ctx = document.getElementById('trendChart').getContext('2d');

    // Prepare data (reverse to show chronological order)
    const reversedHistory = [...history].reverse();
    const labels = reversedHistory.map((item, index) => `Tes #${index + 1}`);
    const data = reversedHistory.map(item => item.overallScore);

    const chartData = {
        labels: labels,
        datasets: [{
            label: 'Tingkat Stres',
            data: data,
            fill: true,
            backgroundColor: 'rgba(102, 126, 234, 0.2)',
            borderColor: 'rgb(102, 126, 234)',
            tension: 0.4,
            pointRadius: 6,
            pointHoverRadius: 8,
            pointBackgroundColor: 'rgb(102, 126, 234)',
            pointBorderColor: '#fff',
            pointBorderWidth: 2
        }]
    };

    const config = {
        type: 'line',
        data: chartData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    labels: {
                        color: '#b4bcd0',
                        font: {
                            size: 14,
                            family: 'Inter'
                        }
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(26, 35, 50, 0.9)',
                    titleColor: '#fff',
                    bodyColor: '#b4bcd0',
                    borderColor: 'rgba(102, 126, 234, 0.5)',
                    borderWidth: 1,
                    padding: 12,
                    displayColors: false,
                    callbacks: {
                        label: function (context) {
                            const score = context.parsed.y;
                            const level = utils.calculateStressLevel(score);
                            return `Skor: ${score} (${level.level})`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    ticks: {
                        color: '#8892a6',
                        font: {
                            family: 'Inter'
                        }
                    },
                    title: {
                        display: true,
                        text: 'Skor Stres',
                        color: '#b4bcd0',
                        font: {
                            size: 14,
                            family: 'Inter'
                        }
                    }
                },
                x: {
                    grid: {
                        color: 'rgba(255, 255, 255, 0.1)'
                    },
                    ticks: {
                        color: '#8892a6',
                        font: {
                            family: 'Inter'
                        }
                    }
                }
            }
        }
    };

    new Chart(ctx, config);
}

// View detail
function viewDetail(id) {
    const item = history.find(h => h.id === id);
    if (item) {
        utils.saveToStorage('current_result', item);
        window.location.href = 'predict_manual.php';
    }
}

// Make viewDetail available globally
window.viewDetail = viewDetail;

// Initialize
displayHistory();

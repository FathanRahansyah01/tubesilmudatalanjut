<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Prediksi - StressPredict</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/theme.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include 'components/header.php'; ?>

    <section class="results-page">
        <div class="container">
            <div class="results-container">
                <div class="result-header">
                    <h1 class="page-title">Hasil Prediksi Tingkat Stres Anda</h1>
                    <p class="page-subtitle">Berikut adalah analisis tingkat stres Anda berdasarkan jawaban yang telah diberikan</p>
                </div>

                <!-- Overall Score -->
                <div class="stress-score-display" id="scoreDisplay">
                    <div class="score-circle" id="scoreCircle">
                        <span id="scoreValue">0</span>
                    </div>
                    <h2 class="score-label" id="scoreLabel">Loading...</h2>
                    <p class="score-description" id="scoreDescription"></p>
                </div>

                <!-- Category Breakdown Chart -->
                <div class="chart-container">
                    <h3>Breakdown per Kategori</h3>
                    <canvas id="radarChart"></canvas>
                </div>

                <!-- Recommendations -->
                <div class="recommendations" id="recommendations">
                    <h3>Rekomendasi untuk Anda</h3>
                    <div id="recommendationsList"></div>
                </div>

                <!-- Action Buttons -->
                <div class="result-actions">
                    <button class="btn btn-secondary" onclick="window.print()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        Download PDF
                    </button>
                    <a href="input_manual.php" class="btn btn-secondary">Tes Ulang</a>
                    <a href="history.php" class="btn btn-primary">Lihat Riwayat</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/results.js"></script>
</body>
</html>

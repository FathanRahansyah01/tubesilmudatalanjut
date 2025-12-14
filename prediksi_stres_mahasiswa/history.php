<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Tes - StressPredict</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/theme.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php include 'components/header.php'; ?>

    <section class="history-page">
        <div class="container">
            <div class="history-container">
                <h1 class="page-title">Riwayat Tes Prediksi Stres</h1>
                <p class="page-subtitle">Lihat perkembangan tingkat stres Anda dari waktu ke waktu</p>

                <!-- Trend Chart -->
                <div class="chart-container" id="trendChartContainer" style="display: none;">
                    <h3>Tren Tingkat Stres</h3>
                    <canvas id="trendChart"></canvas>
                </div>

                <!-- History List -->
                <div class="history-list" id="historyList">
                    <!-- Will be populated by JavaScript -->
                </div>

                <!-- Empty State -->
                <div class="empty-state" id="emptyState" style="display: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <h3>Belum Ada Riwayat Tes</h3>
                    <p>Anda belum pernah melakukan tes prediksi stres. Mulai tes sekarang untuk melihat riwayat Anda.</p>
                    <a href="input_manual.php" class="btn btn-primary">Mulai Tes Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/history.js"></script>
</body>
</html>

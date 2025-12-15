<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Tes - StressPredict</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <?php include 'components/header.php'; ?>

    <section class="py-24 bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto px-8">
            <div class="mb-12">
                <h1
                    class="text-5xl font-extrabold text-center mb-4 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                    Riwayat Tes Prediksi Stres</h1>
                <p class="text-lg text-gray-300 text-center">Lihat perkembangan tingkat stres Anda dari waktu ke waktu
                </p>
            </div>

            <!-- Trend Chart -->
            <div class="bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-white/10 p-8 mb-8 hidden"
                id="trendChartContainer">
                <h3 class="text-2xl font-bold mb-6 text-white">Tren Tingkat Stres</h3>
                <canvas id="trendChart"></canvas>
            </div>

            <!-- History List -->
            <div id="historyList" class="space-y-6">
                <!-- Will be populated by JavaScript -->
            </div>

            <!-- Empty State -->
            <div class="text-center py-16 hidden" id="emptyState">
                <div class="bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-white/10 p-12 max-w-2xl mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" class="w-24 h-24 mx-auto mb-6 text-gray-500">
                        <path d="M9 11l3 3L22 4"></path>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <h3 class="text-2xl font-bold mb-4 text-white">Belum Ada Riwayat Tes</h3>
                    <p class="text-gray-300 mb-8">Anda belum pernah melakukan tes prediksi stres. Mulai tes sekarang
                        untuk melihat riwayat Anda.</p>
                    <a href="input_manual.php"
                        class="inline-flex items-center justify-center px-12 py-4 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50">Mulai
                        Tes Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/history.js"></script>
</body>

</html>
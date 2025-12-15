<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Prediksi - StressPredict</title>
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

    <section class="py-12 bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold mb-2 text-white">Hasil Prediksi Stres Akademik</h1>
                <p class="text-gray-400" id="predictionDate">Tanggal Prediksi</p>
            </div>

            <!-- Main Result Card -->
            <div class="bg-gray-800 rounded-2xl p-8 mb-6 shadow-xl">
                <!-- Stress Level Banner -->
                <div class="rounded-xl p-6 mb-8 text-center" id="stressLevelBanner">
                    <h2 class="text-2xl font-bold" id="stressLevelText">Tingkat Stres: Loading...</h2>
                </div>

                <!-- Probability Distribution -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-white mb-4">Distribusi Probabilitas</h3>
                    <div class="space-y-4">
                        <!-- High -->
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-300">High</span>
                                <span class="text-gray-300" id="probHigh">0%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="bg-red-500 h-3 rounded-full transition-all duration-500" id="barHigh"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <!-- Low -->
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-300">Low</span>
                                <span class="text-gray-300" id="probLow">0%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="bg-green-500 h-3 rounded-full transition-all duration-500" id="barLow"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                        <!-- Medium -->
                        <div>
                            <div class="flex justify-between text-sm mb-1">
                                <span class="text-gray-300">Medium</span>
                                <span class="text-gray-300" id="probMedium">0%</span>
                            </div>
                            <div class="w-full bg-gray-700 rounded-full h-3">
                                <div class="bg-yellow-500 h-3 rounded-full transition-all duration-500" id="barMedium"
                                    style="width: 0%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SHAP Analysis - Top Contributing Factors -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-white mb-4">Faktor Penyebab Utama (SHAP Analysis)</h3>
                    <div class="space-y-3" id="shapFactors">
                        <!-- Will be populated by JavaScript -->
                    </div>
                </div>

                <!-- Recommendations -->
                <div class="bg-indigo-900/30 border border-indigo-700/50 rounded-xl p-6 mb-6">
                    <div class="flex items-start mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" class="text-indigo-400 mr-3 flex-shrink-0 mt-1">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                        <div>
                            <h3 class="text-lg font-bold text-white mb-3">Rekomendasi Berdasarkan Faktor Penyebab Utama
                            </h3>
                            <div id="recommendationsList" class="space-y-4">
                                <!-- Will be populated by JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Resources -->
                <div class="bg-gray-700/30 border border-gray-600/50 rounded-xl p-6">
                    <div class="flex items-start mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" class="text-blue-400 mr-3 flex-shrink-0 mt-1">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <div class="flex-1">
                            <h3 class="text-lg font-bold text-white mb-3">Sumber Bantuan</h3>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <h4 class="font-semibold text-indigo-400 mb-1">📞 Konseling Kampus</h4>
                                    <p class="text-sm text-gray-300">Hubungi konselor kampus untuk sesi konsultasi</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-indigo-400 mb-1">🎓 Academic Advisor</h4>
                                    <p class="text-sm text-gray-300">Diskusi strategi akademik dan beban studi</p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-indigo-400 mb-1">📚 Study Group</h4>
                                    <p class="text-sm text-gray-300">Bergabung dengan kelompok belajar untuk dukungan
                                    </p>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-indigo-400 mb-1">🏥 Student Health Center</h4>
                                    <p class="text-sm text-gray-300">Layanan kesehatan mental untuk mahasiswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="input_manual.php"
                    class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50">
                    Tes Ulang
                </a>
                <a href="history.php"
                    class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-white/10 text-white border-2 border-white/20 backdrop-blur-lg transition-all duration-300 hover:bg-white/15 hover:border-white/30">
                    Lihat History
                </a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/results.js"></script>
</body>

</html>
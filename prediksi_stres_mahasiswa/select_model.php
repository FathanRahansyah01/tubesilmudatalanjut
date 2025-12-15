<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pilih model machine learning untuk prediksi stres">
    <title>Pilih Model - StressPredict</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        .model-card {
            transition: all 0.3s ease;
        }

        .model-card:hover {
            transform: translateY(-8px);
        }

        .model-card.selected {
            border-color: rgb(99, 102, 241);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.3);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <?php include 'components/header.php'; ?>

    <section class="py-24 bg-gray-900 min-h-screen">
        <div class="max-w-6xl mx-auto px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h1
                    class="text-4xl md:text-5xl font-extrabold mb-4 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                    Pilih Model Prediksi</h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">Pilih salah satu model machine learning yang akan
                    digunakan untuk memprediksi tingkat stres Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Ensemble Voting Card -->
                <div class="model-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border-2 border-gray-200 dark:border-white/10 p-8 cursor-pointer relative overflow-hidden"
                    data-model="voting" id="voting-card">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 transition-transform duration-300">
                    </div>
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>
                        <div
                            class="w-6 h-6 rounded-full border-2 border-gray-400 dark:border-gray-600 flex items-center justify-center check-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" class="hidden">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 dark:text-white">Ensemble Voting</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">Metode yang menggabungkan prediksi
                        dari
                        beberapa algoritma berbeda untuk menghasilkan keputusan final yang lebih akurat. Setiap model
                        memberikan
                        "suara" dan keputusan diambil berdasarkan mayoritas atau rata-rata weighted.</p>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Kombinasi multiple models
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Prediksi lebih stabil
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Akurasi tinggi
                        </div>
                    </div>
                </div>

                <!-- Bagging Card -->
                <div class="model-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border-2 border-gray-200 dark:border-white/10 p-8 cursor-pointer relative overflow-hidden"
                    data-model="bagging" id="bagging-card">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 transition-transform duration-300">
                    </div>
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                            </svg>
                        </div>
                        <div
                            class="w-6 h-6 rounded-full border-2 border-gray-400 dark:border-gray-600 flex items-center justify-center check-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" class="hidden">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 dark:text-white">Bagging</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">Bootstrap Aggregating yang melatih
                        beberapa model
                        dengan subset data yang berbeda (sampling dengan replacement). Teknik ini mengurangi variance
                        dan
                        meningkatkan stabilitas prediksi, sangat efektif untuk dataset yang kompleks.</p>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Bootstrap sampling
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Mengurangi variance
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Stabilitas tinggi
                        </div>
                    </div>
                </div>

                <!-- CatBoost Card -->
                <div class="model-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border-2 border-gray-200 dark:border-white/10 p-8 cursor-pointer relative overflow-hidden"
                    data-model="catboost" id="catboost-card">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 transition-transform duration-300">
                    </div>
                    <div class="flex items-start justify-between mb-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                        </div>
                        <div
                            class="w-6 h-6 rounded-full border-2 border-gray-400 dark:border-gray-600 flex items-center justify-center check-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" class="hidden">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold mb-3 text-gray-900 dark:text-white">CatBoost</h3>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">Algoritma gradient boosting yang
                        powerful dengan
                        kemampuan menangani data kategorikal secara otomatis dan performa yang sangat cepat.</p>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Gradient boosting advanced
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Handling data kategorikal otomatis
                        </div>
                        <div class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" class="mr-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            Performa cepat
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button
                    class="inline-flex items-center justify-center px-12 py-4 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50 disabled:opacity-50 disabled:cursor-not-allowed"
                    id="continueBtn" disabled>
                    Lanjutkan ke Kuesioner
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" class="ml-2">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/model_selection.js"></script>
</body>

</html>
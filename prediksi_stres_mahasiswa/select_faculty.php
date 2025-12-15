<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pilih fakultas Anda">
    <title>Pilih Fakultas - StressPredict</title>
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

        .faculty-card {
            transition: all 0.3s ease;
        }

        .faculty-card:hover {
            transform: translateY(-4px);
        }

        .faculty-card.selected {
            border-color: rgb(99, 102, 241);
            background: rgba(99, 102, 241, 0.1);
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
                    Pilih Fakultas Anda</h1>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto">Silakan pilih fakultas tempat Anda berkuliah saat
                    ini</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
                <!-- FIT -->
                <div class="faculty-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border-2 border-gray-200 dark:border-white/10 p-6 cursor-pointer"
                    data-faculty="FIT" data-name="Fakultas Ilmu Terapan">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg text-white font-bold text-xl">
                            FIT
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fakultas Ilmu Terapan</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">FIT</p>
                </div>

                <!-- FTE -->
                <div class="faculty-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border-2 border-gray-200 dark:border-white/10 p-6 cursor-pointer"
                    data-faculty="FTE" data-name="Fakultas Teknik Elektro">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg text-white font-bold text-xl">
                            FTE
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fakultas Teknik Elektro</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">FTE</p>
                </div>

                <!-- FRI -->
                <div class="faculty-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border-2 border-gray-200 dark:border-white/10 p-6 cursor-pointer"
                    data-faculty="FRI" data-name="Fakultas Rekayasa Industri">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg text-white font-bold text-xl">
                            FRI
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fakultas Rekayasa Industri</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">FRI</p>
                </div>

                <!-- FEB -->
                <div class="faculty-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border-2 border-gray-200 dark:border-white/10 p-6 cursor-pointer"
                    data-faculty="FEB" data-name="Fakultas Ekonomi dan Bisnis">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg text-white font-bold text-xl">
                            FEB
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fakultas Ekonomi dan Bisnis</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">FEB</p>
                </div>

                <!-- FIK -->
                <div class="faculty-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border-2 border-gray-200 dark:border-white/10 p-6 cursor-pointer"
                    data-faculty="FIK" data-name="Fakultas Industri Kreatif">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg text-white font-bold text-xl">
                            FIK
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fakultas Industri Kreatif</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">FIK</p>
                </div>

                <!-- FIF -->
                <div class="faculty-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border-2 border-gray-200 dark:border-white/10 p-6 cursor-pointer"
                    data-faculty="FIF" data-name="Fakultas Informatika">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg text-white font-bold text-xl">
                            FIF
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fakultas Informatika</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">FIF</p>
                </div>

                <!-- FKS -->
                <div class="faculty-card bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-xl border-2 border-gray-200 dark:border-white/10 p-6 cursor-pointer"
                    data-faculty="FKS" data-name="Fakultas Komunikasi dan Sosial">
                    <div class="flex items-center justify-between mb-4">
                        <div
                            class="w-12 h-12 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg text-white font-bold text-xl">
                            FKS
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
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Fakultas Komunikasi dan Sosial</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">FKS</p>
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
    <script src="js/faculty_selection.js"></script>
</body>

</html>
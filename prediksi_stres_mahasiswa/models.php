<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Machine Learning - StressPredict</title>
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
    </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <?php include 'components/header.php'; ?>

    <section class="py-24 bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto px-8">
            <h1
                class="text-5xl font-extrabold text-center mb-6 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                Metode Machine Learning</h1>
            <p class="text-lg text-gray-300 text-center mb-16 max-w-3xl mx-auto">Kami menggunakan tiga pendekatan
                ensemble learning terbaik untuk memberikan prediksi tingkat stres yang akurat dan reliable</p>

            <div class="space-y-12">
                <!-- Ensemble Voting -->
                <div
                    class="bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-gray-200 dark:border-white/10 overflow-hidden transition-all duration-300 hover:border-indigo-500/30 hover:shadow-2xl">
                    <div class="p-8 bg-gradient-to-r from-indigo-500/10 to-purple-600/10 flex items-center gap-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Ensemble Voting</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Cara Kerja</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Ensemble Voting menggabungkan
                                prediksi dari
                                beberapa model machine learning yang berbeda (seperti Decision Tree, Random Forest, dan
                                SVM) untuk menghasilkan keputusan final yang lebih akurat.</p>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Keunggulan</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Mengurangi bias dari model individual</li>
                                <li>Meningkatkan akurasi prediksi secara keseluruhan</li>
                                <li>Lebih robust terhadap outliers dan noise dalam data</li>
                                <li>Dapat mengkombinasikan kekuatan dari berbagai algoritma</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Implementasi</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Dalam aplikasi ini, kami
                                menggunakan <strong class="text-indigo-600 dark:text-indigo-400">Hard Voting</strong>
                                dimana setiap model memberikan satu
                                "suara" untuk kelas prediksi, dan kelas dengan suara terbanyak menjadi hasil akhir.</p>
                        </div>
                    </div>
                </div>

                <!-- Bagging -->
                <div
                    class="bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-gray-200 dark:border-white/10 overflow-hidden transition-all duration-300 hover:border-indigo-500/30 hover:shadow-2xl">
                    <div class="p-8 bg-gradient-to-r from-indigo-500/10 to-purple-600/10 flex items-center gap-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">Bagging (Bootstrap Aggregating)
                        </h2>
                    </div>
                    <div class="p-8 space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Cara Kerja</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Bagging melatih beberapa model
                                dengan menggunakan
                                subset data yang berbeda-beda (diambil secara random dengan replacement dari dataset
                                asli). Hasil prediksi dari semua model kemudian diagregasi.</p>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Keunggulan</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Mengurangi variance dan mencegah overfitting</li>
                                <li>Meningkatkan stabilitas model</li>
                                <li>Efektif untuk dataset yang kompleks dan bervariasi</li>
                                <li>Dapat diparalelkan untuk training yang lebih cepat</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Implementasi</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Kami menggunakan <strong
                                    class="text-indigo-600 dark:text-indigo-400">Bagging Classifier</strong> yang
                                melatih multiple base estimators
                                pada subset acak dari dataset original untuk mengurangi variance.</p>
                        </div>
                    </div>
                </div>

                <!-- CatBoost -->
                <div
                    class="bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-gray-200 dark:border-white/10 overflow-hidden transition-all duration-300 hover:border-indigo-500/30 hover:shadow-2xl">
                    <div class="p-8 bg-gradient-to-r from-indigo-500/10 to-purple-600/10 flex items-center gap-6">
                        <div
                            class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-gray-900 dark:text-white">CatBoost</h2>
                    </div>
                    <div class="p-8 space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Cara Kerja</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">CatBoost adalah algoritma
                                gradient boosting yang
                                dirancang khusus untuk menangani fitur kategorikal secara otomatis tanpa perlu
                                preprocessing
                                ekstensif seperti One-Hot Encoding.</p>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Keunggulan</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-600 dark:text-gray-300">
                                <li>Penanganan otomatis data kategorikal (Categorical Features)</li>
                                <li>Performa prediksi state-of-the-art</li>
                                <li>Kecepatan inferensi yang sangat tinggi</li>
                                <li>Mengurangi risiko overfitting dengan ordered boosting</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">Implementasi</h3>
                            <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Model <strong
                                    class="text-indigo-600 dark:text-indigo-400">CatBoost Classifier</strong> digunakan
                                untuk
                                kemampuannya yang superior dalam menangani data survei yang memiliki banyak variabel
                                kategorikal dan numerik.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="mt-16 text-center bg-gradient-to-r from-indigo-500/10 to-purple-600/10 rounded-2xl p-12 border border-white/10">
                <h2 class="text-3xl font-bold mb-4 text-white">Siap Mencoba?</h2>
                <p class="text-lg text-gray-300 mb-8">Mulai tes sekarang dan dapatkan analisis tingkat stres Anda dengan
                    teknologi machine learning terkini</p>
                <a href="input_manual.php"
                    class="inline-flex items-center justify-center px-12 py-4 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50">Mulai
                    Tes Sekarang</a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>
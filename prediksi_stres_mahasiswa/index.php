<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi prediksi tingkat stres mahasiswa menggunakan machine learning">
    <title>Prediksi Tingkat Stres Mahasiswa</title>
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

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-fade-in-right {
            animation: fadeInRight 0.8s ease-out;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
    </style>
</head>

<body
    class="bg-gray-900 dark:bg-gray-900 bg-gray-50 text-gray-900 dark:text-white overflow-x-hidden transition-colors duration-300">
    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="py-32 bg-gray-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-[50%] -left-[20%] w-[80%] h-[80%] rounded-full bg-indigo-500/10 blur-3xl"></div>
            <div class="absolute top-[20%] -right-[20%] w-[60%] h-[60%] rounded-full bg-purple-500/10 blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="animate-fade-in-up">
                    <div
                        class="inline-flex items-center px-4 py-2 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-sm font-medium mb-8">
                        <span class="w-2 h-2 rounded-full bg-indigo-400 mr-2 animate-pulse"></span>
                        AI-Powered Stress Detection
                    </div>
                    <h1 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight text-white">
                        Prediksi Tingkat <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-500">Stres
                            Mahasiswa</span>
                    </h1>
                    <p class="text-xl text-gray-400 mb-10 leading-relaxed max-w-lg">
                        Solusi cerdas menggunakan Machine Learning untuk mengidentifikasi level stres akademik dan
                        memberikan rekomendasi yang dipersonalisasi.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="select_model.php"
                            class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold rounded-xl bg-indigo-600 text-white shadow-lg shadow-indigo-500/20 transition-all duration-300 hover:bg-indigo-700 hover:-translate-y-1 hover:shadow-indigo-500/40">
                            Mulai Tes Sekarang
                        </a>
                        <a href="#about"
                            class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold rounded-xl bg-gray-800 text-white border border-gray-700 transition-all duration-300 hover:bg-gray-700">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="flex justify-center items-center animate-fade-in-right">
                    <img src="assets/images/hero-illustration.png" alt="Student Stress Illustration" id="hero-img"
                        class="max-w-full h-auto drop-shadow-2xl animate-float">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-8">
            <h2
                class="text-4xl md:text-5xl font-extrabold text-center mb-6 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                Tentang Aplikasi</h2>
            <div class="max-w-4xl mx-auto text-center">
                <p class="text-lg text-gray-300 dark:text-gray-300 text-gray-700 mb-6 leading-relaxed">Stres merupakan
                    masalah umum yang dihadapi
                    mahasiswa dalam perjalanan akademik mereka. Tekanan dari tugas kuliah, ujian, masalah keuangan,
                    hingga adaptasi sosial dapat mempengaruhi kesehatan mental dan performa akademik.</p>
                <p class="text-lg text-gray-300 dark:text-gray-300 text-gray-700 mb-8 leading-relaxed">Aplikasi ini
                    dirancang untuk membantu mahasiswa
                    mengidentifikasi tingkat stres mereka melalui kuesioner komprehensif yang menilai berbagai aspek
                    kehidupan. Dengan teknologi machine learning, kami dapat memberikan prediksi akurat dan rekomendasi
                    yang dipersonalisasi.</p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-16">
                    <div
                        class="p-12 bg-gray-800/60 dark:bg-gray-800/60 bg-white backdrop-blur-lg rounded-2xl border border-white/10 dark:border-white/10 border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:bg-gray-700/80 dark:hover:bg-gray-700/80 hover:bg-gray-50 hover:shadow-2xl">
                        <div
                            class="text-4xl md:text-5xl font-extrabold mb-2 bg-gradient-to-r from-indigo-500 to-purple-600 bg-clip-text text-transparent">
                            25+</div>
                        <div class="text-base text-gray-400 dark:text-gray-400 text-gray-600">Pertanyaan Tervalidasi
                        </div>
                    </div>
                    <div
                        class="p-12 bg-gray-800/60 dark:bg-gray-800/60 bg-white backdrop-blur-lg rounded-2xl border border-white/10 dark:border-white/10 border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:bg-gray-700/80 dark:hover:bg-gray-700/80 hover:bg-gray-50 hover:shadow-2xl">
                        <div
                            class="text-4xl md:text-5xl font-extrabold mb-2 bg-gradient-to-r from-indigo-500 to-purple-600 bg-clip-text text-transparent">
                            5</div>
                        <div class="text-base text-gray-400">Kategori Penilaian</div>
                    </div>
                    <div
                        class="p-12 bg-gray-800/60 dark:bg-gray-800/60 bg-white backdrop-blur-lg rounded-2xl border border-white/10 dark:border-white/10 border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:bg-gray-700/80 dark:hover:bg-gray-700/80 hover:bg-gray-50 hover:shadow-2xl">
                        <div
                            class="text-4xl md:text-5xl font-extrabold mb-2 bg-gradient-to-r from-indigo-500 to-purple-600 bg-clip-text text-transparent">
                            3</div>
                        <div class="text-base text-gray-400">Model ML Terintegrasi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Models Section -->
    <section class="py-24 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto px-8">
            <h2
                class="text-4xl md:text-5xl font-extrabold text-center mb-6 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                Metode Machine Learning</h2>
            <p class="text-lg text-gray-300 text-center mb-16 max-w-2xl mx-auto">Kami menggunakan tiga pendekatan
                machine learning terbaik untuk prediksi yang akurat</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div
                    class="p-12 bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-gray-200 dark:border-white/10 transition-all duration-300 hover:-translate-y-4 hover:bg-gray-50 dark:hover:bg-gray-700/80 hover:shadow-2xl hover:border-indigo-500/30 relative overflow-hidden group">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left">
                    </div>
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl mb-6 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Ensemble Voting</h3>
                    <p class="text-base text-gray-600 dark:text-gray-300 leading-relaxed">Metode yang
                        menggabungkan prediksi dari beberapa
                        model berbeda untuk menghasilkan keputusan final yang lebih akurat. Setiap model memberikan
                        "suara" dan keputusan diambil berdasarkan mayoritas atau rata-rata weighted.</p>
                </div>
                <div
                    class="p-12 bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-gray-200 dark:border-white/10 transition-all duration-300 hover:-translate-y-4 hover:bg-gray-50 dark:hover:bg-gray-700/80 hover:shadow-2xl hover:border-indigo-500/30 relative overflow-hidden group">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left">
                    </div>
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl mb-6 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">Bagging</h3>
                    <p class="text-base text-gray-600 dark:text-gray-300 leading-relaxed">Bootstrap
                        Aggregating yang melatih beberapa model
                        dengan subset data yang berbeda (sampling dengan replacement). Teknik ini mengurangi variance
                        dan meningkatkan stabilitas prediksi, sangat efektif untuk dataset yang kompleks.</p>
                </div>
                <div
                    class="p-12 bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-gray-200 dark:border-white/10 transition-all duration-300 hover:-translate-y-4 hover:bg-gray-50 dark:hover:bg-gray-700/80 hover:shadow-2xl hover:border-indigo-500/30 relative overflow-hidden group">
                    <div
                        class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left">
                    </div>
                    <div
                        class="w-16 h-16 flex items-center justify-center bg-gradient-to-r from-indigo-500 to-purple-600 rounded-xl mb-6 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">CatBoost</h3>
                    <p class="text-base text-gray-600 dark:text-gray-300 leading-relaxed">Algoritma gradient boosting
                        yang powerful dengan
                        kemampuan menangani data kategorikal secara otomatis dan performa yang sangat cepat. Ideal untuk
                        prediksi akurat dengan data terstruktur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-24 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-8">
            <h2
                class="text-4xl md:text-5xl font-extrabold text-center mb-16 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                Fitur Website</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <div
                    class="p-12 bg-gradient-to-br from-indigo-500/10 to-purple-600/10 dark:from-indigo-500/10 dark:to-purple-600/10 from-indigo-50 to-purple-50 backdrop-blur-lg rounded-2xl border border-white/10 dark:border-white/10 border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:bg-gray-700/80 dark:hover:bg-gray-700/80 hover:bg-indigo-100 hover:shadow-lg">
                    <h3 class="text-xl font-bold mb-6 text-white dark:text-white text-gray-900">Prediksi Manual</h3>
                    <p class="text-base text-gray-300 dark:text-gray-300 text-gray-700 leading-relaxed">Isi kuesioner
                        interaktif dengan 25+ pertanyaan
                        tervalidasi untuk mendapatkan prediksi tingkat stres yang akurat dan personal.</p>
                </div>
                <div
                    class="p-12 bg-gradient-to-br from-indigo-500/10 to-purple-600/10 dark:from-indigo-500/10 dark:to-purple-600/10 from-indigo-50 to-purple-50 backdrop-blur-lg rounded-2xl border border-white/10 dark:border-white/10 border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:bg-gray-700/80 dark:hover:bg-gray-700/80 hover:bg-indigo-100 hover:shadow-lg">
                    <h3 class="text-xl font-bold mb-6 text-white dark:text-white text-gray-900">Prediksi Batch (CSV)
                    </h3>
                    <p class="text-base text-gray-300 dark:text-gray-300 text-gray-700 leading-relaxed">Upload file CSV
                        dengan data multiple mahasiswa
                        untuk mendapatkan prediksi secara massal, cocok untuk institusi pendidikan.</p>
                </div>
                <div
                    class="p-12 bg-gradient-to-br from-indigo-500/10 to-purple-600/10 dark:from-indigo-500/10 dark:to-purple-600/10 from-indigo-50 to-purple-50 backdrop-blur-lg rounded-2xl border border-white/10 dark:border-white/10 border-gray-200 transition-all duration-300 hover:-translate-y-2 hover:bg-gray-700/80 dark:hover:bg-gray-700/80 hover:bg-indigo-100 hover:shadow-lg">
                    <h3 class="text-xl font-bold mb-6 text-white dark:text-white text-gray-900">Visualisasi Hasil</h3>
                    <p class="text-base text-gray-300 dark:text-gray-300 text-gray-700 leading-relaxed">Lihat hasil
                        prediksi dalam bentuk chart
                        interaktif dengan breakdown per kategori dan rekomendasi yang dipersonalisasi.</p>
                </div>
                <div
                    class="p-12 bg-gradient-to-br from-indigo-500/10 to-purple-600/10 backdrop-blur-lg rounded-2xl border border-white/10 transition-all duration-300 hover:-translate-y-2 hover:bg-gray-700/80 hover:shadow-lg">
                    <h3 class="text-xl font-bold mb-6 text-white dark:text-white text-gray-900">Riwayat Prediksi</h3>
                    <p class="text-base text-gray-300 dark:text-gray-300 text-gray-700 leading-relaxed">Akses riwayat
                        tes sebelumnya dan lihat
                        perkembangan tingkat stres dari waktu ke waktu dengan trend analysis.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>
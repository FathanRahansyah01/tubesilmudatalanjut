<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi prediksi tingkat stres mahasiswa menggunakan machine learning">
    <title>Prediksi Tingkat Stres Mahasiswa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Prediksi Tingkat Stres Mahasiswa</h1>
                <p class="hero-subtitle">Solusi cerdas untuk mengidentifikasi dan mengelola tingkat stres mahasiswa menggunakan teknologi machine learning</p>
                <div class="hero-buttons">
                    <a href="input_manual.php" class="btn btn-primary">Mulai Tes Sekarang</a>
                    <a href="models.php" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/images/hero-illustration.png" alt="Student Stress Illustration" id="hero-img">
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <h2 class="section-title">Tentang Aplikasi</h2>
            <div class="about-content">
                <p>Stres merupakan masalah umum yang dihadapi mahasiswa dalam perjalanan akademik mereka. Tekanan dari tugas kuliah, ujian, masalah keuangan, hingga adaptasi sosial dapat mempengaruhi kesehatan mental dan performa akademik.</p>
                <p>Aplikasi ini dirancang untuk membantu mahasiswa mengidentifikasi tingkat stres mereka melalui kuesioner komprehensif yang menilai berbagai aspek kehidupan. Dengan teknologi machine learning, kami dapat memberikan prediksi akurat dan rekomendasi yang dipersonalisasi.</p>
                <div class="about-stats">
                    <div class="stat-item">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Pertanyaan Tervalidasi</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Kategori Penilaian</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">3</div>
                        <div class="stat-label">Model ML Terintegrasi</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Models Section -->
    <section class="models">
        <div class="container">
            <h2 class="section-title">Metode Machine Learning</h2>
            <p class="section-subtitle">Kami menggunakan tiga pendekatan machine learning terbaik untuk prediksi yang akurat</p>
            <div class="models-grid">
                <div class="model-card">
                    <div class="model-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="16"></line>
                            <line x1="8" y1="12" x2="16" y2="12"></line>
                        </svg>
                    </div>
                    <h3 class="model-title">Ensemble Voting</h3>
                    <p class="model-description">Metode yang menggabungkan prediksi dari beberapa model berbeda untuk menghasilkan keputusan final yang lebih akurat. Setiap model memberikan "suara" dan keputusan diambil berdasarkan mayoritas atau rata-rata weighted.</p>
                </div>
                <div class="model-card">
                    <div class="model-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="9" y1="9" x2="15" y2="15"></line>
                            <line x1="15" y1="9" x2="9" y2="15"></line>
                        </svg>
                    </div>
                    <h3 class="model-title">Bagging</h3>
                    <p class="model-description">Bootstrap Aggregating yang melatih beberapa model dengan subset data yang berbeda (sampling dengan replacement). Teknik ini mengurangi variance dan meningkatkan stabilitas prediksi, sangat efektif untuk dataset yang kompleks.</p>
                </div>
                <div class="model-card">
                    <div class="model-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                            <polyline points="2 17 12 22 22 17"></polyline>
                            <polyline points="2 12 12 17 22 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="model-title">Stacking</h3>
                    <p class="model-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Stacking menggunakan meta-learner untuk mengkombinasikan prediksi dari multiple base models, menciptakan ensemble yang powerful dengan performa superior dibanding model individual.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Fitur Website</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <h3 class="feature-title">Prediksi Manual</h3>
                    <p class="feature-description">Isi kuesioner interaktif dengan 25+ pertanyaan tervalidasi untuk mendapatkan prediksi tingkat stres yang akurat dan personal.</p>
                </div>
                <div class="feature-card">
                    <h3 class="feature-title">Prediksi Batch (CSV)</h3>
                    <p class="feature-description">Upload file CSV dengan data multiple mahasiswa untuk mendapatkan prediksi secara massal, cocok untuk institusi pendidikan.</p>
                </div>
                <div class="feature-card">
                    <h3 class="feature-title">Visualisasi Hasil</h3>
                    <p class="feature-description">Lihat hasil prediksi dalam bentuk chart interaktif dengan breakdown per kategori dan rekomendasi yang dipersonalisasi.</p>
                </div>
                <div class="feature-card">
                    <h3 class="feature-title">Riwayat Prediksi</h3>
                    <p class="feature-description">Akses riwayat tes sebelumnya dan lihat perkembangan tingkat stres dari waktu ke waktu dengan trend analysis.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>

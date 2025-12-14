<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Machine Learning - StressPredict</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <section class="models-page">
        <div class="container">
            <h1 class="page-title">Metode Machine Learning</h1>
            <p class="page-subtitle">Kami menggunakan tiga pendekatan ensemble learning terbaik untuk memberikan prediksi tingkat stres yang akurat dan reliable</p>

            <div class="models-detail">
                <!-- Ensemble Voting -->
                <div class="model-detail-card">
                    <div class="model-detail-header">
                        <div class="model-detail-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="8" x2="12" y2="16"></line>
                                <line x1="8" y1="12" x2="16" y2="12"></line>
                            </svg>
                        </div>
                        <h2>Ensemble Voting</h2>
                    </div>
                    <div class="model-detail-content">
                        <h3>Cara Kerja</h3>
                        <p>Ensemble Voting menggabungkan prediksi dari beberapa model machine learning yang berbeda (seperti Decision Tree, Random Forest, dan SVM) untuk menghasilkan keputusan final yang lebih akurat.</p>
                        
                        <h3>Keunggulan</h3>
                        <ul>
                            <li>Mengurangi bias dari model individual</li>
                            <li>Meningkatkan akurasi prediksi secara keseluruhan</li>
                            <li>Lebih robust terhadap outliers dan noise dalam data</li>
                            <li>Dapat mengkombinasikan kekuatan dari berbagai algoritma</li>
                        </ul>

                        <h3>Implementasi</h3>
                        <p>Dalam aplikasi ini, kami menggunakan <strong>Hard Voting</strong> dimana setiap model memberikan satu "suara" untuk kelas prediksi, dan kelas dengan suara terbanyak menjadi hasil akhir.</p>
                    </div>
                </div>

                <!-- Bagging -->
                <div class="model-detail-card">
                    <div class="model-detail-header">
                        <div class="model-detail-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="9" y1="9" x2="15" y2="15"></line>
                                <line x1="15" y1="9" x2="9" y2="15"></line>
                            </svg>
                        </div>
                        <h2>Bagging (Bootstrap Aggregating)</h2>
                    </div>
                    <div class="model-detail-content">
                        <h3>Cara Kerja</h3>
                        <p>Bagging melatih beberapa model dengan menggunakan subset data yang berbeda-beda (diambil secara random dengan replacement dari dataset asli). Hasil prediksi dari semua model kemudian diagregasi.</p>
                        
                        <h3>Keunggulan</h3>
                        <ul>
                            <li>Mengurangi variance dan mencegah overfitting</li>
                            <li>Meningkatkan stabilitas model</li>
                            <li>Efektif untuk dataset yang kompleks dan bervariasi</li>
                            <li>Dapat diparalelkan untuk training yang lebih cepat</li>
                        </ul>

                        <h3>Implementasi</h3>
                        <p>Kami menggunakan <strong>Random Forest</strong> sebagai implementasi bagging, yang merupakan ensemble dari banyak decision trees yang dilatih pada subset data yang berbeda.</p>
                    </div>
                </div>

                <!-- Stacking -->
                <div class="model-detail-card">
                    <div class="model-detail-header">
                        <div class="model-detail-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                <polyline points="2 17 12 22 22 17"></polyline>
                                <polyline points="2 12 12 17 22 12"></polyline>
                            </svg>
                        </div>
                        <h2>Stacking</h2>
                    </div>
                    <div class="model-detail-content">
                        <h3>Cara Kerja</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Stacking menggunakan pendekatan meta-learning dimana prediksi dari beberapa base models (level 0) digunakan sebagai input untuk meta-model (level 1) yang akan membuat prediksi final.</p>
                        
                        <h3>Keunggulan</h3>
                        <ul>
                            <li>Dapat mencapai performa yang lebih tinggi dari model individual</li>
                            <li>Meta-learner dapat belajar pola dari kesalahan base models</li>
                            <li>Fleksibel dalam memilih kombinasi algoritma</li>
                            <li>Memanfaatkan kekuatan dari berbagai perspektif model</li>
                        </ul>

                        <h3>Implementasi</h3>
                        <p>Kami menggunakan beberapa base learners (Logistic Regression, SVM, KNN) dan meta-learner (Gradient Boosting) untuk menghasilkan prediksi yang optimal.</p>
                    </div>
                </div>
            </div>

            <div class="cta-section">
                <h2>Siap Mencoba?</h2>
                <p>Mulai tes sekarang dan dapatkan analisis tingkat stres Anda dengan teknologi machine learning terkini</p>
                <a href="input_manual.php" class="btn btn-primary">Mulai Tes Sekarang</a>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>

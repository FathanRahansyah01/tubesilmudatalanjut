<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Prediksi Stres - StressPredict</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <section class="questionnaire-page">
        <div class="container">
            <div class="questionnaire-container">
                <h1 class="page-title">Tes Prediksi Tingkat Stres</h1>
                <p class="page-subtitle">Jawab semua pertanyaan dengan jujur untuk mendapatkan hasil yang akurat</p>

                <!-- Progress Bar -->
                <div class="progress-bar-container">
                    <div class="progress-bar" id="progressBar"></div>
                </div>
                <p class="progress-text" id="progressText">Pertanyaan 1 dari 25</p>

                <!-- Question Container -->
                <div id="questionContainer"></div>

                <!-- Navigation Buttons -->
                <div class="navigation-buttons">
                    <button class="btn btn-secondary" id="prevBtn" style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                        Sebelumnya
                    </button>
                    <button class="btn btn-primary" id="nextBtn">
                        Selanjutnya
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 8px;">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
    <script src="js/questionnaire.js"></script>
</body>
</html>

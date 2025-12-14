<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediksi CSV - StressPredict</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <section class="csv-page">
        <div class="container">
            <div class="questionnaire-container">
                <h1 class="page-title">Prediksi Batch dari CSV</h1>
                <p class="page-subtitle">Upload file CSV dengan data mahasiswa untuk mendapatkan prediksi secara massal</p>

                <div class="question-card">
                    <h3>Format File CSV</h3>
                    <p>File CSV harus memiliki kolom-kolom berikut:</p>
                    <ul style="color: var(--color-text-secondary); line-height: 1.8; margin-bottom: 1.5rem;">
                        <li>nama, jumlah_sks, ipk, jam_tidur, olahraga_per_minggu, dll.</li>
                        <li>Pastikan format sesuai dengan template yang disediakan</li>
                    </ul>

                    <form action="upload_csv.php" method="POST" enctype="multipart/form-data" style="margin-top: 2rem;">
                        <div class="form-group">
                            <label class="form-label">Pilih File CSV</label>
                            <input type="file" name="csv_file" accept=".csv" class="form-input" required>
                        </div>

                        <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                            <button type="submit" class="btn btn-primary">Upload & Prediksi</button>
                            <a href="data.csv" download class="btn btn-secondary">Download Template</a>
                        </div>
                    </form>
                </div>

                <div class="question-card" style="margin-top: 2rem;">
                    <h3>Catatan Penting</h3>
                    <ul style="color: var(--color-text-secondary); line-height: 1.8;">
                        <li>File CSV maksimal 5MB</li>
                        <li>Pastikan encoding file adalah UTF-8</li>
                        <li>Hasil prediksi akan ditampilkan dalam tabel</li>
                        <li>Anda dapat mengunduh hasil dalam format CSV</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>

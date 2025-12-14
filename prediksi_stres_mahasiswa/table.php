<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table - StressPredict</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/pages.css">
    <link rel="stylesheet" href="css/theme.css">
</head>
<body>
    <?php include 'components/header.php'; ?>

    <section class="table-page">
        <div class="container">
            <h1 class="page-title">Data Mahasiswa</h1>
            <p class="page-subtitle">Tabel data mahasiswa untuk analisis prediksi stres</p>

            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jumlah SKS</th>
                            <th>IPK</th>
                            <th>Jam Tidur</th>
                            <th>Olahraga/Minggu</th>
                            <th>Tingkat Stres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ahmad Fauzi</td>
                            <td>21</td>
                            <td>3.45</td>
                            <td>6</td>
                            <td>2</td>
                            <td><span style="color: #f59e0b;">Sedang</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Siti Nurhaliza</td>
                            <td>18</td>
                            <td>3.78</td>
                            <td>7</td>
                            <td>3</td>
                            <td><span style="color: #10b981;">Rendah</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Budi Santoso</td>
                            <td>24</td>
                            <td>2.89</td>
                            <td>5</td>
                            <td>1</td>
                            <td><span style="color: #ef4444;">Tinggi</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dewi Lestari</td>
                            <td>20</td>
                            <td>3.56</td>
                            <td>7</td>
                            <td>4</td>
                            <td><span style="color: #10b981;">Rendah</span></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Rizki Pratama</td>
                            <td>22</td>
                            <td>3.12</td>
                            <td>6</td>
                            <td>2</td>
                            <td><span style="color: #f59e0b;">Sedang</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cta-section" style="margin-top: 3rem;">
                <h2>Ingin Menambahkan Data?</h2>
                <p>Upload file CSV untuk prediksi batch atau mulai tes individual</p>
                <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                    <a href="predict_csv.php" class="btn btn-secondary">Upload CSV</a>
                    <a href="input_manual.php" class="btn btn-primary">Tes Individual</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>
</html>

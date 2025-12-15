<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediksi CSV - StressPredict</title>
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
        <div class="max-w-4xl mx-auto px-8">
            <div class="bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-white/10 p-8 md:p-12">
                <h1
                    class="text-4xl md:text-5xl font-extrabold text-center mb-4 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                    Prediksi Batch dari CSV</h1>
                <p class="text-lg text-gray-300 text-center mb-8">Upload file CSV dengan data mahasiswa untuk
                    mendapatkan prediksi secara massal</p>

                <div class="bg-gray-700/30 rounded-xl p-6 mb-8">
                    <h3 class="text-xl font-bold mb-4 text-white">Format File CSV</h3>
                    <p class="text-gray-300 mb-4">File CSV harus memiliki kolom-kolom berikut:</p>
                    <ul class="list-disc list-inside space-y-2 text-gray-300 mb-6">
                        <li>nama, jumlah_sks, ipk, jam_tidur, olahraga_per_minggu, dll.</li>
                        <li>Pastikan format sesuai dengan template yang disediakan</li>
                    </ul>

                    <form action="upload_csv.php" method="POST" enctype="multipart/form-data" class="mt-8">
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-white mb-3">Pilih File CSV</label>
                            <input type="file" name="csv_file" accept=".csv"
                                class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                required>
                        </div>

                        <div class="flex flex-wrap gap-4">
                            <button type="submit"
                                class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50">Upload
                                & Prediksi</button>
                            <a href="data.csv" download
                                class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-white/10 text-white border-2 border-white/20 backdrop-blur-lg transition-all duration-300 hover:bg-white/15 hover:border-white/30">Download
                                Template</a>
                        </div>
                    </form>
                </div>

                <div class="bg-gray-700/30 rounded-xl p-6">
                    <h3 class="text-xl font-bold mb-4 text-white">Catatan Penting</h3>
                    <ul class="list-disc list-inside space-y-2 text-gray-300">
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
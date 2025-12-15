<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table - StressPredict</title>
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
                class="text-5xl font-extrabold text-center mb-4 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                Data Mahasiswa</h1>
            <p class="text-lg text-gray-300 text-center mb-12">Tabel data mahasiswa untuk analisis prediksi stres</p>

            <div class="bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-white/10 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-indigo-500/10 to-purple-600/10">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">No</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">Nama</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">Jumlah SKS</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">IPK</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">Jam Tidur</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">Olahraga/Minggu</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-white">Tingkat Stres</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/10">
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-gray-300">1</td>
                                <td class="px-6 py-4 text-gray-300">Ahmad Fauzi</td>
                                <td class="px-6 py-4 text-gray-300">21</td>
                                <td class="px-6 py-4 text-gray-300">3.45</td>
                                <td class="px-6 py-4 text-gray-300">6</td>
                                <td class="px-6 py-4 text-gray-300">2</td>
                                <td class="px-6 py-4"><span class="text-yellow-500 font-semibold">Sedang</span></td>
                            </tr>
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-gray-300">2</td>
                                <td class="px-6 py-4 text-gray-300">Siti Nurhaliza</td>
                                <td class="px-6 py-4 text-gray-300">18</td>
                                <td class="px-6 py-4 text-gray-300">3.78</td>
                                <td class="px-6 py-4 text-gray-300">7</td>
                                <td class="px-6 py-4 text-gray-300">3</td>
                                <td class="px-6 py-4"><span class="text-green-500 font-semibold">Rendah</span></td>
                            </tr>
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-gray-300">3</td>
                                <td class="px-6 py-4 text-gray-300">Budi Santoso</td>
                                <td class="px-6 py-4 text-gray-300">24</td>
                                <td class="px-6 py-4 text-gray-300">2.89</td>
                                <td class="px-6 py-4 text-gray-300">5</td>
                                <td class="px-6 py-4 text-gray-300">1</td>
                                <td class="px-6 py-4"><span class="text-red-500 font-semibold">Tinggi</span></td>
                            </tr>
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-gray-300">4</td>
                                <td class="px-6 py-4 text-gray-300">Dewi Lestari</td>
                                <td class="px-6 py-4 text-gray-300">20</td>
                                <td class="px-6 py-4 text-gray-300">3.56</td>
                                <td class="px-6 py-4 text-gray-300">7</td>
                                <td class="px-6 py-4 text-gray-300">4</td>
                                <td class="px-6 py-4"><span class="text-green-500 font-semibold">Rendah</span></td>
                            </tr>
                            <tr class="hover:bg-gray-700/30 transition-colors">
                                <td class="px-6 py-4 text-gray-300">5</td>
                                <td class="px-6 py-4 text-gray-300">Rizki Pratama</td>
                                <td class="px-6 py-4 text-gray-300">22</td>
                                <td class="px-6 py-4 text-gray-300">3.12</td>
                                <td class="px-6 py-4 text-gray-300">6</td>
                                <td class="px-6 py-4 text-gray-300">2</td>
                                <td class="px-6 py-4"><span class="text-yellow-500 font-semibold">Sedang</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div
                class="mt-16 text-center bg-gradient-to-r from-indigo-500/10 to-purple-600/10 rounded-2xl p-12 border border-white/10">
                <h2 class="text-3xl font-bold mb-4 text-white">Ingin Menambahkan Data?</h2>
                <p class="text-lg text-gray-300 mb-8">Upload file CSV untuk prediksi batch atau mulai tes individual</p>
                <div class="flex flex-wrap gap-6 justify-center">
                    <a href="predict_csv.php"
                        class="inline-flex items-center justify-center px-12 py-4 text-base font-semibold rounded-xl bg-white/10 text-white border-2 border-white/20 backdrop-blur-lg transition-all duration-300 hover:bg-white/15 hover:border-white/30 hover:-translate-y-0.5">Upload
                        CSV</a>
                    <a href="input_manual.php"
                        class="inline-flex items-center justify-center px-12 py-4 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50">Tes
                        Individual</a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/main.js"></script>
</body>

</html>
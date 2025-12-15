<?php
// Upload CSV Handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file'])) {
    $uploadDir = 'uploads/';

    // Create uploads directory if not exists
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $fileName = basename($_FILES['csv_file']['name']);
    $targetFile = $uploadDir . time() . '_' . $fileName;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file is CSV
    if ($fileType != 'csv') {
        die('Error: Only CSV files are allowed.');
    }

    // Check file size (5MB max)
    if ($_FILES['csv_file']['size'] > 5000000) {
        die('Error: File size exceeds 5MB limit.');
    }

    // Upload file
    if (move_uploaded_file($_FILES['csv_file']['tmp_name'], $targetFile)) {
        // Process CSV file
        $results = processCSV($targetFile);

        // Display results
        displayResults($results);
    } else {
        die('Error: Failed to upload file.');
    }
}

function processCSV($filePath)
{
    $results = [];

    // Command to execute python script
    // Adjust logic to correctly point to python executable if needed (e.g. 'python', 'python3', or full path)
    $command = "python scripts/predict.py --mode csv --file " . escapeshellarg($filePath);

    $output = shell_exec($command);

    if ($output === null) {
        return ['error' => 'Gagal menjalankan script Python'];
    }

    // Decode JSON parsing
    $predictions = json_decode($output, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        return ['error' => 'Invalid JSON output: ' . $output];
    }

    if (isset($predictions['error'])) {
        return ['error' => $predictions['error']];
    }

    // Check if it's a list (success)
    if (is_array($predictions)) {
        // Map python results to the format expected by displayResults
        foreach ($predictions as $pred) {
            $results[] = [
                'data' => [$pred['nama'] ?? 'Unknown', '...'], // Adjust data display if needed
                'score' => $pred['score'],
                'level' => $pred['level']
            ];
        }
    }

    return $results;
}

function calculateStressScore($data)
{
    // Placeholder algorithm
    // In real implementation, this would load and use the ML model
    $score = rand(20, 90);
    return $score;
}

function getStressLevel($score)
{
    if ($score < 34)
        return 'Rendah';
    if ($score < 67)
        return 'Sedang';
    return 'Tinggi';
}

function displayResults($results)
{
    ?>
    <!DOCTYPE html>
    <html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Prediksi CSV - StressPredict</title>
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
                    Hasil Prediksi Batch</h1>
                <p class="text-lg text-gray-300 text-center mb-12">Total <?php echo count($results); ?> data berhasil
                    diproses</p>

                <div class="bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-white/10 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gradient-to-r from-indigo-500/10 to-purple-600/10">
                                <tr>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white">No</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white">Nama</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white">Skor Stres</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-white">Tingkat</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/10">
                                <?php foreach ($results as $index => $result): ?>
                                    <tr class="hover:bg-gray-700/30 transition-colors">
                                        <td class="px-6 py-4 text-gray-300"><?php echo $index + 1; ?></td>
                                        <td class="px-6 py-4 text-gray-300"><?php echo htmlspecialchars($result['data'][0]); ?>
                                        </td>
                                        <td class="px-6 py-4 text-gray-300"><?php echo $result['score']; ?></td>
                                        <td class="px-6 py-4">
                                            <span class="font-semibold <?php
                                            echo $result['level'] === 'Rendah' ? 'text-green-500' :
                                                ($result['level'] === 'Sedang' ? 'text-yellow-500' : 'text-red-500');
                                            ?>">
                                                <?php echo $result['level']; ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="flex flex-wrap gap-4 justify-center mt-12">
                    <a href="predict_csv.php"
                        class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-white/10 text-white border-2 border-white/20 backdrop-blur-lg transition-all duration-300 hover:bg-white/15 hover:border-white/30">Upload
                        File Lain</a>
                    <a href="index.php"
                        class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50">Kembali
                        ke Home</a>
                </div>
            </div>
        </section>

        <?php include 'components/footer.php'; ?>
        <script src="js/main.js"></script>
    </body>

    </html>
    <?php
}
?>
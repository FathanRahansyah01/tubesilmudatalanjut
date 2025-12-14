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

function processCSV($filePath) {
    $results = [];
    
    if (($handle = fopen($filePath, 'r')) !== FALSE) {
        $header = fgetcsv($handle);
        
        while (($data = fgetcsv($handle)) !== FALSE) {
            // Simple stress prediction algorithm (placeholder)
            // In real implementation, this would use the ML model
            $stressScore = calculateStressScore($data);
            
            $results[] = [
                'data' => $data,
                'score' => $stressScore,
                'level' => getStressLevel($stressScore)
            ];
        }
        
        fclose($handle);
    }
    
    return $results;
}

function calculateStressScore($data) {
    // Placeholder algorithm
    // In real implementation, this would load and use the ML model
    $score = rand(20, 90);
    return $score;
}

function getStressLevel($score) {
    if ($score < 34) return 'Rendah';
    if ($score < 67) return 'Sedang';
    return 'Tinggi';
}

function displayResults($results) {
    ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hasil Prediksi CSV - StressPredict</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/pages.css">
        <link rel="stylesheet" href="css/theme.css">
    </head>
    <body>
        <?php include 'components/header.php'; ?>

        <section class="results-page">
            <div class="container">
                <h1 class="page-title">Hasil Prediksi Batch</h1>
                <p class="page-subtitle">Total <?php echo count($results); ?> data berhasil diproses</p>

                <div class="table-container">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Skor Stres</th>
                                <th>Tingkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $index => $result): ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo htmlspecialchars($result['data'][0]); ?></td>
                                <td><?php echo $result['score']; ?></td>
                                <td>
                                    <span style="color: <?php 
                                        echo $result['level'] === 'Rendah' ? '#10b981' : 
                                             ($result['level'] === 'Sedang' ? '#f59e0b' : '#ef4444'); 
                                    ?>;">
                                        <?php echo $result['level']; ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="result-actions" style="margin-top: 2rem;">
                    <a href="predict_csv.php" class="btn btn-secondary">Upload File Lain</a>
                    <a href="index.php" class="btn btn-primary">Kembali ke Home</a>
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

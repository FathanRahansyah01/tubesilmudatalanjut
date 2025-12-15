<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data JSON dari body request
    $inputJSON = file_get_contents('php://input');

    // URL Flask App
    $url = 'http://127.0.0.1:5000/predict';

    // Inisialisasi cURL
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $inputJSON);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($inputJSON)
    ));

    // Eksekusi
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);

    curl_close($ch);

    if ($result === false) {
        // Fallback jika server flask mati
        echo json_encode([
            'error' => 'Gagal menghubungi server Python (Flask). Pastikan app.py sudah dijalankan.',
            'curl_error' => $curlError
        ]);
    } else {
        // Forward result dari Flask
        echo $result;
    }

} else {
    echo json_encode(['error' => 'Method not allowed']);
}
?>
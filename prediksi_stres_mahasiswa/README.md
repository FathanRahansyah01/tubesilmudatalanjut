# Prediksi Tingkat Stres Mahasiswa

Web aplikasi untuk memprediksi tingkat stres mahasiswa menggunakan machine learning dengan metode Ensemble Voting, Bagging, dan Stacking.

## Struktur Folder

```
prediksi_stres_mahasiswa/
├── assets/
│   └── images/          # Gambar untuk UI (logo, icons, illustrations)
├── components/          # Komponen PHP yang reusable
│   ├── header.php      # Header dengan navigasi
│   └── footer.php      # Footer
├── config/
│   └── database.php    # Konfigurasi database (opsional)
├── css/
│   └── style.css       # Stylesheet utama
├── js/
│   ├── main.js         # JavaScript utilities
│   ├── questionnaire.js # Logic untuk kuesioner
│   ├── results.js      # Logic untuk hasil & visualisasi
│   └── history.js      # Logic untuk history
├── images/             # Folder untuk gambar yang diupload
├── model/              # Model machine learning (.sav files)
│   ├── stress_prediction_voting.sav
│   ├── stress_prediction_bagging.sav
│   └── stress_prediction_stacking.sav
├── uploads/            # Folder untuk file CSV yang diupload
├── .gitignore
├── data.csv            # Sample data
├── history.php         # Halaman riwayat tes
├── index.php           # Landing page
├── input_manual.php    # Form kuesioner manual
├── models.php          # Halaman penjelasan model ML
├── predict_csv.php     # Prediksi batch dari CSV
├── predict_manual.php  # Prediksi dari input manual
├── README.md
├── requirements.txt    # Dependencies Python (jika ada)
├── result.txt          # Log hasil prediksi
├── table.php           # Tabel data
└── upload_csv.php      # Handler upload CSV
```

## Fitur

1. **Landing Page** - Hero section dengan penjelasan aplikasi
2. **Model ML** - Penjelasan 3 metode (Ensemble Voting, Bagging, Stacking)
3. **Prediksi Manual** - Kuesioner interaktif untuk input manual
4. **Prediksi CSV** - Upload file CSV untuk prediksi batch
5. **History** - Riwayat hasil tes
6. **Visualisasi** - Chart untuk menampilkan hasil

## Teknologi

- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Backend**: PHP
- **Visualisasi**: Chart.js
- **ML Models**: Python (scikit-learn) - exported as .sav files
- **Database**: MySQL (opsional, bisa pakai file/session)

## Instalasi

1. Clone repository ke folder htdocs
2. Buat folder `uploads/` dan `model/` jika belum ada
3. Set permission untuk folder uploads: `chmod 777 uploads/`
4. Akses melalui browser: `http://localhost/prediksi_stres_mahasiswa/`

## Catatan

- Model .sav belum tersedia, akan ditambahkan kemudian
- Untuk sementara, prediksi menggunakan algoritma sederhana

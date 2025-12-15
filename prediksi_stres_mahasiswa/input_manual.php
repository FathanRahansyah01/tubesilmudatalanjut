<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes Prediksi Stres - StressPredict</title>
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
    <script>
        // Check if model and faculty are selected, redirect if not
        if (!localStorage.getItem('selectedModel')) {
            window.location.href = 'select_model.php';
        } else if (!localStorage.getItem('selectedFaculty')) {
            window.location.href = 'select_faculty.php';
        }
    </script>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-white transition-colors duration-300">
    <?php include 'components/header.php'; ?>

    <section class="py-24 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto px-8">
            <div
                class="bg-white dark:bg-gray-800/60 backdrop-blur-lg rounded-2xl border border-gray-200 dark:border-white/10 p-8 md:p-12">
                <h1
                    class="text-4xl md:text-5xl font-extrabold text-center mb-4 bg-gradient-to-r from-indigo-500 to-cyan-400 bg-clip-text text-transparent">
                    Tes Prediksi Tingkat Stres</h1>
                <p class="text-lg text-gray-600 dark:text-gray-300 text-center mb-8">Jawab semua pertanyaan dengan jujur
                    untuk mendapatkan
                    hasil yang akurat</p>

                <!-- Progress Bar -->
                <div class="mb-2">
                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-3 overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-600 transition-all duration-300 ease-out"
                            id="progressBar" style="width: 0%"></div>
                    </div>
                </div>
                <p class="text-sm text-gray-500 dark:text-gray-400 text-center mb-8" id="progressText">Pertanyaan 1 dari
                    25</p>

                <!-- Question Container -->
                <div id="questionContainer" class="mb-8"></div>

                <!-- Navigation Buttons -->
                <div class="flex justify-between gap-4">
                    <button
                        class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-gray-100 dark:bg-white/10 text-gray-700 dark:text-white border-2 border-gray-200 dark:border-white/20 backdrop-blur-lg transition-all duration-300 hover:bg-gray-200 dark:hover:bg-white/15 hover:border-gray-300 dark:hover:border-white/30 disabled:opacity-50 disabled:cursor-not-allowed"
                        id="prevBtn" style="display: none;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" class="mr-2">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                        Sebelumnya
                    </button>
                    <button
                        class="inline-flex items-center justify-center px-8 py-3 text-base font-semibold rounded-xl bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:-translate-y-0.5 hover:shadow-indigo-500/50 ml-auto"
                        id="nextBtn">
                        Selanjutnya
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" class="ml-2">
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
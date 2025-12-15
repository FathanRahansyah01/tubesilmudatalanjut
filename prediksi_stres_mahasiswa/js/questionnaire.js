// Questionnaire Data
const questions = [
    // 1. Tekanan Akademik
    {
        id: 'Tekanan_Akademik',
        category: 'Akademik',
        question: 'Seberapa besar tekanan akademik yang Anda rasakan saat ini?',
        options: [
            { text: 'Sangat Rendah', value: 1 },
            { text: 'Rendah', value: 2 },
            { text: 'Sedang', value: 3 },
            { text: 'Tinggi', value: 4 },
            { text: 'Sangat Tinggi', value: 5 }
        ]
    },
    // 2. Kesulitan Akumulasi (Akademik)
    {
        id: 'Kesulitan_Akumulasi',
        category: 'Akademik',
        question: 'Seberapa sulit materi perkuliahan yang menumpuk bagi Anda?',
        options: [
            { text: 'Sangat Mudah', value: 1 },
            { text: 'Mudah', value: 2 },
            { text: 'Biasa Saja', value: 3 },
            { text: 'Sulit', value: 4 },
            { text: 'Sangat Sulit', value: 5 }
        ]
    },
    // 3. Stres Tugas Deadline (Akademik)
    {
        id: 'Stres_Tugas_Deadline',
        category: 'Akademik',
        question: 'Seberapa sering Anda merasa stres karena deadline tugas?',
        options: [
            { text: 'Tidak Pernah', value: 1 },
            { text: 'Jarang', value: 2 },
            { text: 'Kadang-kadang', value: 3 },
            { text: 'Sering', value: 4 },
            { text: 'Selalu', value: 5 }
        ]
    },
    // 4. Tekanan Eksternal (Sosial)
    {
        id: 'Tekanan_Eksternal',
        category: 'Sosial',
        question: 'Seberapa besar tekanan dari luar (orang tua/dosen) yang Anda rasakan?',
        options: [
            { text: 'Tidak Ada', value: 1 },
            { text: 'Sedikit', value: 2 },
            { text: 'Sedang', value: 3 },
            { text: 'Besar', value: 4 },
            { text: 'Sangat Besar', value: 5 }
        ]
    },
    // 5. Kurang Kendali (Psikologis)
    {
        id: 'Kurang_Kendali',
        category: 'Psikologis',
        question: 'Apakah Anda merasa kurang memiliki kendali atas hidup/studi Anda?',
        options: [
            { text: 'Sangat Memegang Kendali', value: 1 },
            { text: 'Cukup Memegang Kendali', value: 2 },
            { text: 'Netral', value: 3 },
            { text: 'Kurang Kendali', value: 4 },
            { text: 'Tidak Ada Kendali', value: 5 }
        ]
    },
    // 6. Rasa Tidak Sanggup (Psikologis)
    {
        id: 'Rasa_Tidak_Sanggup',
        category: 'Psikologis',
        question: 'Seberapa sering Anda merasa tidak sanggup menjalani perkuliahan?',
        options: [
            { text: 'Tidak Pernah', value: 1 },
            { text: 'Jarang', value: 2 },
            { text: 'Kadang-kadang', value: 3 },
            { text: 'Sering', value: 4 },
            { text: 'Selalu', value: 5 }
        ]
    },
    // 7. Stres Pribadi (Psikologis)
    {
        id: 'Stres_Pribadi',
        category: 'Psikologis',
        question: 'Seberapa tinggi tingkat stres pribadi (di luar akademik) Anda?',
        options: [
            { text: 'Sangat Rendah', value: 1 },
            { text: 'Rendah', value: 2 },
            { text: 'Sedang', value: 3 },
            { text: 'Tinggi', value: 4 },
            { text: 'Sangat Tinggi', value: 5 }
        ]
    },
    // 8. Marah Eksternal Studi (Emosional -> Psikologis)
    {
        id: 'Marah_Eksternal_Studi',
        category: 'Psikologis',
        question: 'Seberapa sering Anda merasa marah atau kesal dengan hal-hal terkait studi?',
        options: [
            { text: 'Tidak Pernah', value: 1 },
            { text: 'Jarang', value: 2 },
            { text: 'Kadang-kadang', value: 3 },
            { text: 'Sering', value: 4 },
            { text: 'Selalu', value: 5 }
        ]
    },
    // 9. Stres Perubahan Akademik (Akademik)
    {
        id: 'Stres_Perubahan_Akademik',
        category: 'Akademik',
        question: 'Apakah Anda merasa stres dengan perubahan sistem/jadwal akademik?',
        options: [
            { text: 'Sangat Tidak Stres', value: 1 },
            { text: 'Tidak Stres', value: 2 },
            { text: 'Biasa Saja', value: 3 },
            { text: 'Stres', value: 4 },
            { text: 'Sangat Stres', value: 5 }
        ]
    },
    // 10. Tekanan IPK (Akademik)
    {
        id: 'Tekanan_IPK',
        category: 'Akademik',
        question: 'Seberapa tertekan Anda dengan target IPK?',
        options: [
            { text: 'Tidak Tertekan', value: 1 },
            { text: 'Sedikit Tertekan', value: 2 },
            { text: 'Cukup Tertekan', value: 3 },
            { text: 'Sangat Tertekan', value: 4 },
            { text: 'Ekstrem', value: 5 }
        ]
    },
    // 11. Cemas Karir (Masa Depan)
    {
        id: 'Cemas_Karir',
        category: 'Masa Depan',
        question: 'Seberapa cemas Anda memikirkan karir masa depan?',
        options: [
            { text: 'Tidak Cemas', value: 1 },
            { text: 'Sedikit Cemas', value: 2 },
            { text: 'Sedang', value: 3 },
            { text: 'Cemas', value: 4 },
            { text: 'Sangat Cemas', value: 5 }
        ]
    },
    // 12. Kebiasaan Buruk (Kesehatan)
    {
        id: 'Kebiasaan_Buruk',
        category: 'Kesehatan',
        question: 'Seberapa sering Anda melakukan kebiasaan buruk (begadang, makan tidak teratur)?',
        options: [
            { text: 'Tidak Pernah', value: 1 },
            { text: 'Jarang', value: 2 },
            { text: 'Kadang-kadang', value: 3 },
            { text: 'Sering', value: 4 },
            { text: 'Selalu', value: 5 }
        ]
    },
    // 13. Proses Sesuai Harapan (Masa Depan)
    {
        id: 'Proses_Sesuai_Harapan',
        category: 'Masa Depan',
        question: 'Apakah Anda merasa proses perkuliahan berjalan sesuai harapan Anda?',
        options: [
            { text: 'Sangat Tidak Sesuai', value: 1 },
            { text: 'Tidak Sesuai', value: 2 },
            { text: 'Netral', value: 3 },
            { text: 'Sesuai', value: 4 },
            { text: 'Sangat Sesuai', value: 5 }
        ]
    }
];

// State
let currentQuestion = 0;
let answers = {};

// DOM Elements
const questionContainer = document.getElementById('questionContainer');
const progressBar = document.getElementById('progressBar');
const progressText = document.getElementById('progressText');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

// Initialize
function init() {
    // Load saved progress if exists
    const savedAnswers = utils.getFromStorage('questionnaire_answers');
    // const savedProgress = utils.getFromStorage('questionnaire_progress');

    if (savedAnswers) {
        answers = savedAnswers;
    }

    // Always start from beginning for simplicity in this updated version, or reimplement storage check with validation
    currentQuestion = 0;

    renderQuestion();
}

// Render current question
function renderQuestion() {
    const question = questions[currentQuestion];

    questionContainer.innerHTML = `
        <div class="bg-gray-100 dark:bg-gray-700/30 rounded-xl p-8 mb-6 transition-colors duration-300">
            <span class="inline-block px-4 py-1 bg-indigo-100 dark:bg-indigo-500/20 text-indigo-600 dark:text-indigo-400 rounded-full text-sm font-semibold mb-4">${question.category}</span>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">${question.question}</h2>
            <div class="space-y-3">
                ${question.options.map((option, index) => `
                    <button class="option-button w-full text-left px-6 py-4 rounded-lg transition-all duration-200 border-2 hover:border-indigo-500 
                        ${answers[question.id] === option.value
            ? 'bg-indigo-50 dark:bg-indigo-500/20 border-indigo-500 text-indigo-700 dark:text-white'
            : 'bg-white dark:bg-gray-600/30 border-gray-200 dark:border-gray-600 text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600/50 hover:text-gray-900 dark:hover:text-white'}" 
                            data-value="${option.value}"
                            data-index="${index}">
                        ${option.text}
                    </button>
                `).join('')}
            </div>
        </div>
    `;

    // Update progress
    const progress = ((currentQuestion + 1) / questions.length) * 100;
    progressBar.style.width = `${progress}%`;
    progressText.textContent = `Pertanyaan ${currentQuestion + 1} dari ${questions.length}`;

    // Update buttons
    prevBtn.style.display = currentQuestion > 0 ? 'inline-flex' : 'none';
    nextBtn.textContent = currentQuestion === questions.length - 1 ? 'Lihat Hasil' : 'Selanjutnya';

    // Add event listeners to options
    const optionButtons = questionContainer.querySelectorAll('.option-button');
    optionButtons.forEach(btn => {
        btn.addEventListener('click', () => selectOption(btn));
    });
}

// Select option
function selectOption(button) {
    const question = questions[currentQuestion];
    const value = parseInt(button.dataset.value);

    // Save answer
    answers[question.id] = value;

    // Update UI
    const allButtons = questionContainer.querySelectorAll('.option-button');
    allButtons.forEach(btn => {
        // Reset to unselected state
        btn.classList.remove('bg-indigo-50 dark:bg-indigo-500/20', 'border-indigo-500', 'text-indigo-700', 'dark:text-white');
        // Handle legacy classes safely just in case
        btn.classList.remove('bg-indigo-500/20', 'text-white');

        btn.classList.add('bg-white', 'dark:bg-gray-600/30', 'border-gray-200', 'dark:border-gray-600', 'text-gray-700', 'dark:text-gray-200', 'hover:bg-gray-50', 'dark:hover:bg-gray-600/50', 'hover:text-gray-900', 'dark:hover:text-white');
    });

    // Set selected state
    button.classList.remove('bg-white', 'dark:bg-gray-600/30', 'border-gray-200', 'dark:border-gray-600', 'text-gray-700', 'dark:text-gray-200', 'hover:bg-gray-50', 'dark:hover:bg-gray-600/50', 'hover:text-gray-900', 'dark:hover:text-white');
    button.classList.add('bg-indigo-50', 'dark:bg-indigo-500/20', 'border-indigo-500', 'text-indigo-700', 'dark:text-white');

    // Enable next button
    const nextBtn = document.getElementById('nextBtn');
    if (nextBtn) {
        nextBtn.disabled = false;
        nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
    }

    // Save progress
    utils.saveToStorage('questionnaire_answers', answers);
    // utils.saveToStorage('questionnaire_progress', currentQuestion);
}

// Next question
function nextQuestion() {
    const question = questions[currentQuestion];

    if (!answers[question.id]) {
        alert('Silakan pilih salah satu jawaban');
        return;
    }

    if (currentQuestion < questions.length - 1) {
        currentQuestion++;
        renderQuestion();
    } else {
        // Submit and go to results
        submitQuestionnaire();
    }
}

// Previous question
function prevQuestion() {
    if (currentQuestion > 0) {
        currentQuestion--;
        renderQuestion();
    }
}

// Submit questionnaire
function submitQuestionnaire() {
    // Calculate scores by category (for visualization)
    const categoryScores = {};

    // Initialize categories found in questions
    questions.forEach(q => {
        if (!categoryScores[q.category]) {
            categoryScores[q.category] = [];
        }
    });

    questions.forEach(q => {
        const answer = answers[q.id];
        if (answer) {
            categoryScores[q.category].push(answer);
        }
    });

    // Calculate average for each category (scale to 0-100)
    const results = {};
    let totalScore = 0;

    Object.keys(categoryScores).forEach(category => {
        const scores = categoryScores[category];
        if (scores.length > 0) {
            const avg = scores.reduce((a, b) => a + b, 0) / scores.length;
            const normalized = ((avg - 1) / 4) * 100; // Convert 1-5 scale to 0-100
            results[category] = Math.round(normalized);
            totalScore += normalized;
        }
    });

    // Call API for Model Prediction
    const submitBtn = document.getElementById('nextBtn'); // Re-use next button as indicator
    const originalText = submitBtn.textContent;
    submitBtn.textContent = 'Memproses...';
    submitBtn.disabled = true;

    fetch('predict_api.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(answers),
    })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert('Terjadi kesalahan: ' + data.error);
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                return;
            }

            // Handle array response
            const prediction = Array.isArray(data) ? data[0] : data;

            if (!prediction || (typeof prediction !== 'object')) {
                console.error("Invalid Data:", data);
                alert('Format respon tidak valid');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                return;
            }

            if (prediction.mock) {
                console.log("Using Mock Prediction: " + prediction.message);
            }

            // Save results
            const resultData = {
                id: utils.generateId(),
                date: new Date().toISOString(),
                faculty: localStorage.getItem('selectedFaculty') || 'Unknown',
                facultyName: localStorage.getItem('selectedFacultyName') || 'Unknown',
                model: localStorage.getItem('selectedModel') || 'voting',
                overallScore: prediction.score, // Use score from model
                level: prediction.level,        // Use level from model
                probability: prediction.probability || null, // Add probability distribution
                categoryScores: results,        // Use JS calculated breakdown for chart
                answers: answers
            };

            // Save to history
            let history = utils.getFromStorage('stress_history') || [];
            history.push(resultData);
            utils.saveToStorage('stress_history', history);

            // Save current result
            utils.saveToStorage('current_result', resultData);

            // Clear questionnaire progress
            localStorage.removeItem('questionnaire_answers');

            // Redirect to results
            window.location.href = 'predict_manual.php';
        })
        .catch((error) => {
            console.error('Error:', error);
            alert('Gagal menghubungkan ke server.');
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        });
}

// Event listeners
nextBtn.addEventListener('click', nextQuestion);
prevBtn.addEventListener('click', prevQuestion);

// Initialize on load
init();

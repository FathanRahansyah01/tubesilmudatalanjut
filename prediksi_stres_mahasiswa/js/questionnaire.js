// Questionnaire Data
const questions = [
    // Akademik (7 questions)
    {
        id: 1,
        category: 'Akademik',
        question: 'Berapa banyak mata kuliah yang Anda ambil semester ini?',
        options: [
            { text: '1-3 mata kuliah', value: 1 },
            { text: '4-6 mata kuliah', value: 2 },
            { text: '7-9 mata kuliah', value: 3 },
            { text: '10 atau lebih mata kuliah', value: 4 }
        ]
    },
    {
        id: 2,
        category: 'Akademik',
        question: 'Berapa IPK Anda saat ini?',
        options: [
            { text: '3.50 - 4.00', value: 1 },
            { text: '3.00 - 3.49', value: 2 },
            { text: '2.50 - 2.99', value: 3 },
            { text: 'Di bawah 2.50', value: 4 }
        ]
    },
    {
        id: 3,
        category: 'Akademik',
        question: 'Seberapa sering Anda merasa kewalahan dengan tugas kuliah?',
        options: [
            { text: 'Tidak pernah', value: 1 },
            { text: 'Jarang (1-2 kali per bulan)', value: 2 },
            { text: 'Sering (1-2 kali per minggu)', value: 3 },
            { text: 'Sangat sering (hampir setiap hari)', value: 4 }
        ]
    },
    {
        id: 4,
        category: 'Akademik',
        question: 'Apakah Anda sering begadang untuk menyelesaikan tugas?',
        options: [
            { text: 'Tidak pernah', value: 1 },
            { text: 'Jarang (1-2 kali per bulan)', value: 2 },
            { text: 'Sering (1-2 kali per minggu)', value: 3 },
            { text: 'Sangat sering (hampir setiap hari)', value: 4 }
        ]
    },
    {
        id: 5,
        category: 'Akademik',
        question: 'Seberapa sulit materi kuliah yang Anda pelajari?',
        options: [
            { text: 'Sangat mudah dipahami', value: 1 },
            { text: 'Cukup mudah', value: 2 },
            { text: 'Cukup sulit', value: 3 },
            { text: 'Sangat sulit', value: 4 }
        ]
    },
    {
        id: 6,
        category: 'Akademik',
        question: 'Seberapa sering Anda merasa tidak siap saat ujian?',
        options: [
            { text: 'Tidak pernah', value: 1 },
            { text: 'Jarang', value: 2 },
            { text: 'Sering', value: 3 },
            { text: 'Selalu', value: 4 }
        ]
    },
    {
        id: 7,
        category: 'Akademik',
        question: 'Apakah Anda merasa tertekan dengan ekspektasi nilai?',
        options: [
            { text: 'Tidak sama sekali', value: 1 },
            { text: 'Sedikit tertekan', value: 2 },
            { text: 'Cukup tertekan', value: 3 },
            { text: 'Sangat tertekan', value: 4 }
        ]
    },

    // Keuangan (4 questions)
    {
        id: 8,
        category: 'Keuangan',
        question: 'Apakah Anda memiliki masalah keuangan untuk memenuhi kebutuhan kuliah?',
        options: [
            { text: 'Tidak ada masalah', value: 1 },
            { text: 'Kadang-kadang', value: 2 },
            { text: 'Sering', value: 3 },
            { text: 'Selalu kesulitan', value: 4 }
        ]
    },
    {
        id: 9,
        category: 'Keuangan',
        question: 'Apakah Anda bekerja sambil kuliah?',
        options: [
            { text: 'Tidak bekerja', value: 1 },
            { text: 'Part-time ringan (< 10 jam/minggu)', value: 2 },
            { text: 'Part-time (10-20 jam/minggu)', value: 3 },
            { text: 'Full-time atau lebih dari 20 jam/minggu', value: 4 }
        ]
    },
    {
        id: 10,
        category: 'Keuangan',
        question: 'Seberapa sering Anda khawatir tentang biaya kuliah/hidup?',
        options: [
            { text: 'Tidak pernah', value: 1 },
            { text: 'Jarang', value: 2 },
            { text: 'Sering', value: 3 },
            { text: 'Sangat sering', value: 4 }
        ]
    },
    {
        id: 11,
        category: 'Keuangan',
        question: 'Apakah Anda memiliki tabungan untuk keadaan darurat?',
        options: [
            { text: 'Ya, cukup untuk beberapa bulan', value: 1 },
            { text: 'Ya, untuk 1 bulan', value: 2 },
            { text: 'Sangat sedikit', value: 3 },
            { text: 'Tidak ada sama sekali', value: 4 }
        ]
    },

    // Sosial & Lingkungan (5 questions)
    {
        id: 12,
        category: 'Sosial',
        question: 'Seberapa baik hubungan Anda dengan teman sekelas?',
        options: [
            { text: 'Sangat baik, banyak teman dekat', value: 1 },
            { text: 'Baik, ada beberapa teman', value: 2 },
            { text: 'Kurang baik, sedikit teman', value: 3 },
            { text: 'Buruk, hampir tidak ada teman', value: 4 }
        ]
    },
    {
        id: 13,
        category: 'Sosial',
        question: 'Apakah Anda tinggal jauh dari keluarga?',
        options: [
            { text: 'Tinggal bersama keluarga', value: 1 },
            { text: 'Dekat, bisa pulang setiap hari', value: 1 },
            { text: 'Cukup jauh, pulang seminggu sekali', value: 3 },
            { text: 'Sangat jauh, jarang pulang', value: 4 }
        ]
    },
    {
        id: 14,
        category: 'Sosial',
        question: 'Seberapa sering Anda merasa kesepian?',
        options: [
            { text: 'Tidak pernah', value: 1 },
            { text: 'Jarang', value: 2 },
            { text: 'Sering', value: 3 },
            { text: 'Sangat sering', value: 4 }
        ]
    },
    {
        id: 15,
        category: 'Sosial',
        question: 'Apakah Anda aktif dalam organisasi kampus?',
        options: [
            { text: 'Sangat aktif di beberapa organisasi', value: 1 },
            { text: 'Aktif di satu organisasi', value: 2 },
            { text: 'Pernah ikut tapi tidak aktif', value: 3 },
            { text: 'Tidak ikut organisasi sama sekali', value: 2 }
        ]
    },
    {
        id: 16,
        category: 'Sosial',
        question: 'Apakah Anda merasa didukung oleh orang-orang di sekitar Anda?',
        options: [
            { text: 'Sangat didukung', value: 1 },
            { text: 'Cukup didukung', value: 2 },
            { text: 'Kurang didukung', value: 3 },
            { text: 'Tidak didukung sama sekali', value: 4 }
        ]
    },

    // Kesehatan & Gaya Hidup (5 questions)
    {
        id: 17,
        category: 'Kesehatan',
        question: 'Berapa jam Anda tidur rata-rata per hari?',
        options: [
            { text: '7-9 jam', value: 1 },
            { text: '6-7 jam', value: 2 },
            { text: '4-6 jam', value: 3 },
            { text: 'Kurang dari 4 jam', value: 4 }
        ]
    },
    {
        id: 18,
        category: 'Kesehatan',
        question: 'Seberapa sering Anda berolahraga dalam seminggu?',
        options: [
            { text: '4 kali atau lebih', value: 1 },
            { text: '2-3 kali', value: 2 },
            { text: '1 kali', value: 3 },
            { text: 'Tidak pernah', value: 4 }
        ]
    },
    {
        id: 19,
        category: 'Kesehatan',
        question: 'Apakah Anda memiliki pola makan yang teratur?',
        options: [
            { text: 'Sangat teratur, 3 kali sehari', value: 1 },
            { text: 'Cukup teratur', value: 2 },
            { text: 'Tidak teratur', value: 3 },
            { text: 'Sangat tidak teratur, sering skip makan', value: 4 }
        ]
    },
    {
        id: 20,
        category: 'Kesehatan',
        question: 'Seberapa sering Anda merasa lelah/kelelahan?',
        options: [
            { text: 'Jarang', value: 1 },
            { text: 'Kadang-kadang', value: 2 },
            { text: 'Sering', value: 3 },
            { text: 'Hampir setiap hari', value: 4 }
        ]
    },
    {
        id: 21,
        category: 'Kesehatan',
        question: 'Apakah Anda memiliki masalah kesehatan kronis?',
        options: [
            { text: 'Tidak ada', value: 1 },
            { text: 'Ada, tapi terkontrol', value: 2 },
            { text: 'Ada, kadang mengganggu', value: 3 },
            { text: 'Ada, sangat mengganggu', value: 4 }
        ]
    },

    // Psikologis (4 questions)
    {
        id: 22,
        category: 'Psikologis',
        question: 'Seberapa sering Anda merasa cemas/anxious?',
        options: [
            { text: 'Jarang', value: 1 },
            { text: 'Kadang-kadang', value: 2 },
            { text: 'Sering', value: 3 },
            { text: 'Hampir setiap hari', value: 4 }
        ]
    },
    {
        id: 23,
        category: 'Psikologis',
        question: 'Apakah Anda mudah tersinggung atau marah akhir-akhir ini?',
        options: [
            { text: 'Tidak', value: 1 },
            { text: 'Kadang-kadang', value: 2 },
            { text: 'Sering', value: 3 },
            { text: 'Sangat sering', value: 4 }
        ]
    },
    {
        id: 24,
        category: 'Psikologis',
        question: 'Seberapa sulit bagi Anda untuk berkonsentrasi?',
        options: [
            { text: 'Tidak sulit', value: 1 },
            { text: 'Kadang sulit', value: 2 },
            { text: 'Sering sulit', value: 3 },
            { text: 'Sangat sulit', value: 4 }
        ]
    },
    {
        id: 25,
        category: 'Psikologis',
        question: 'Apakah Anda merasa memiliki dukungan emosional yang cukup?',
        options: [
            { text: 'Sangat cukup', value: 1 },
            { text: 'Cukup', value: 2 },
            { text: 'Kurang', value: 3 },
            { text: 'Sangat kurang', value: 4 }
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
    const savedProgress = utils.getFromStorage('questionnaire_progress');

    if (savedAnswers) {
        answers = savedAnswers;
    }

    if (savedProgress) {
        currentQuestion = savedProgress;
    }

    renderQuestion();
}

// Render current question
function renderQuestion() {
    const question = questions[currentQuestion];

    questionContainer.innerHTML = `
        <div class="question-card">
            <span class="question-category">${question.category}</span>
            <h2 class="question-text">${question.question}</h2>
            <div class="question-options">
                ${question.options.map((option, index) => `
                    <button class="option-button ${answers[question.id] === option.value ? 'selected' : ''}" 
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
    prevBtn.style.display = currentQuestion > 0 ? 'block' : 'none';
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
    allButtons.forEach(btn => btn.classList.remove('selected'));
    button.classList.add('selected');

    // Save progress
    utils.saveToStorage('questionnaire_answers', answers);
    utils.saveToStorage('questionnaire_progress', currentQuestion);

    // Auto advance after short delay
    setTimeout(() => {
        if (currentQuestion < questions.length - 1) {
            nextQuestion();
        }
    }, 300);
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
    // Calculate scores by category
    const categoryScores = {
        'Akademik': [],
        'Keuangan': [],
        'Sosial': [],
        'Kesehatan': [],
        'Psikologis': []
    };

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
        const avg = scores.reduce((a, b) => a + b, 0) / scores.length;
        const normalized = ((avg - 1) / 3) * 100; // Convert 1-4 scale to 0-100
        results[category] = Math.round(normalized);
        totalScore += normalized;
    });

    const overallScore = Math.round(totalScore / Object.keys(results).length);

    // Save results
    const resultData = {
        id: utils.generateId(),
        date: new Date().toISOString(),
        overallScore: overallScore,
        categoryScores: results,
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
    localStorage.removeItem('questionnaire_progress');

    // Redirect to results
    window.location.href = 'predict_manual.php';
}

// Event listeners
nextBtn.addEventListener('click', nextQuestion);
prevBtn.addEventListener('click', prevQuestion);

// Initialize on load
init();

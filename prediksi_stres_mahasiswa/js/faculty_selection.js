// Faculty Selection Logic
document.addEventListener('DOMContentLoaded', function () {
    const facultyCards = document.querySelectorAll('.faculty-card');
    const continueBtn = document.getElementById('continueBtn');
    let selectedFaculty = localStorage.getItem('selectedFaculty');
    let selectedFacultyName = localStorage.getItem('selectedFacultyName');

    // Restore previous selection if exists
    if (selectedFaculty) {
        const card = document.querySelector(`[data-faculty="${selectedFaculty}"]`);
        if (card) {
            selectCard(card);
        }
    }

    // Add click handlers to faculty cards
    facultyCards.forEach(card => {
        card.addEventListener('click', function () {
            // Remove selection from all cards
            facultyCards.forEach(c => {
                c.classList.remove('selected');
                c.querySelector('.check-icon svg').classList.add('hidden');
                c.querySelector('.check-icon').classList.remove('bg-indigo-500', 'border-indigo-500');
                c.querySelector('.check-icon').classList.add('border-gray-600');
            });

            // Select clicked card
            selectCard(this);
        });
    });

    function selectCard(card) {
        card.classList.add('selected');
        const checkIcon = card.querySelector('.check-icon');
        checkIcon.querySelector('svg').classList.remove('hidden');
        checkIcon.classList.remove('border-gray-600');
        checkIcon.classList.add('bg-indigo-500', 'border-indigo-500');

        selectedFaculty = card.dataset.faculty;
        selectedFacultyName = card.dataset.name;
        localStorage.setItem('selectedFaculty', selectedFaculty);
        localStorage.setItem('selectedFacultyName', selectedFacultyName);

        // Enable continue button
        continueBtn.disabled = false;
    }

    // Continue button handler
    continueBtn.addEventListener('click', function () {
        if (selectedFaculty) {
            // Redirect to questionnaire
            window.location.href = 'input_manual.php';
        }
    });
});

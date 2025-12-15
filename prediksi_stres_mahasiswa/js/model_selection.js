// Model Selection Logic
document.addEventListener('DOMContentLoaded', function () {
    const modelCards = document.querySelectorAll('.model-card');
    const continueBtn = document.getElementById('continueBtn');
    let selectedModel = localStorage.getItem('selectedModel');

    // Restore previous selection if exists
    if (selectedModel) {
        const card = document.querySelector(`[data-model="${selectedModel}"]`);
        if (card) {
            selectCard(card);
        }
    }

    // Add click handlers to model cards
    modelCards.forEach(card => {
        card.addEventListener('click', function () {
            // Remove selection from all cards
            modelCards.forEach(c => {
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

        selectedModel = card.dataset.model;
        localStorage.setItem('selectedModel', selectedModel);

        // Enable continue button
        continueBtn.disabled = false;
    }

    // Continue button handler
    continueBtn.addEventListener('click', function () {
        if (selectedModel) {
            // Send model selection to Flask API
            fetch('http://localhost:5000/set_model', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ model: selectedModel })
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Model set:', data);
                    // Redirect to faculty selection
                    window.location.href = 'select_faculty.php';
                })
                .catch(error => {
                    console.error('Error setting model:', error);
                    // Still redirect even if API call fails (fallback to default)
                    window.location.href = 'select_faculty.php';
                });
        }
    });
});

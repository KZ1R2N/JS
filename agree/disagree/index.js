document.querySelectorAll('.vote').forEach(button => {
    button.addEventListener('click', (event) => {
        const rev_id = event.target.dataset.rev_id;
        const user_id = event.target.dataset.user_id;

        const vote = event.target.classList.contains('agree') ? 'agree' : 'disagree';

        fetch('update_review.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ rev_id, user_id, vote }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.querySelectorAll(`[data-rev_id="${rev_id}"][data-user_id="${user_id}"]`).forEach(button => {
                    button.classList.remove('agree', 'disagree');
                    button.textContent = 'Vote';
                });
            } else {
                alert('Failed to update vote');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });
});

document.querySelectorAll('.delete').forEach(button => {
    button.addEventListener('click', (event) => {
        const rev_id = event.target.dataset.rev_id;
        const user_id = event.target.dataset.user_id;

        fetch('delete_review.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ rev_id, user_id }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.querySelectorAll(`[data-rev_id="${rev_id}"][data-user_id="${user_id}"]`).forEach(element => {
                    element.parentNode.removeChild(element);
                });
            } else {
                alert('Failed to delete review');
            }
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    });
});

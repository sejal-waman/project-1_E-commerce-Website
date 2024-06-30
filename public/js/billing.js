// public/js/billing.js

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('billing-form');

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            if (response.ok) {
                alert('Billing details submitted successfully!');
                form.reset();
            } else {
                alert('There were errors with your submission:\n' + JSON.stringify(result.errors));
            }
        } catch (error) {
            alert('An error occurred: ' + error.message);
        }
    });
});
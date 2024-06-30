<!-- app/Views/Commerce/billing_details.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background: #f9f9f9;
        }
        .billing-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .billing-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .billing-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        .billing-container input, .billing-container select, .billing-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .billing-container button {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
        .success {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="billing-container">
    <h2>Billing Details</h2>
    <div id="message"></div>
    <form id="billing-form" action="/billing_details/submit" method="post">
        <?= csrf_field() ?>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" required>

        <label for="company_name">Company Name (Optional)</label>
        <input type="text" id="company_name" name="company_name">

        <label for="country">Country</label>
        <input type="text" id="country" name="country" required>

        <label for="region">Region</label>
        <input type="text" id="region" name="region" required>

        <label for="street_address_1">Street Address</label>
        <input type="text" id="street_address_1" name="street_address_1" placeholder="House Number and Street Name" required>
        <input type="text" id="street_address_2" name="street_address_2" placeholder="Apartment, Suite, Unit, etc. (Optional)">

        <label for="city">Town / City</label>
        <input type="text" id="city" name="city" required>

        <label for="state">State</label>
        <select id="state" name="state" required>
            <option value="" disabled selected>Select your state</option>
            <option value="State 1">State 1</option>
            <option value="State 2">State 2</option>
            <!-- Add more states as needed -->
        </select>

        <label for="pin_code">PIN Code</label>
        <input type="text" id="pin_code" name="pin_code" required>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="order_notes">Order Notes (Optional)</label>
        <textarea id="order_notes" name="order_notes" rows="4"></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

<script>
document.getElementById('billing-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const form = event.target;
    const formData = new FormData(form);

    fetch(form.action, {
        method: form.method,
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        const messageDiv = document.getElementById('message');
        if (data.errors) {
            messageDiv.className = 'error';
            messageDiv.innerHTML = '';
            for (const error in data.errors) {
                messageDiv.innerHTML += <p>${data.errors[error]}</p>;
            }
        } else {
            messageDiv.className = 'success';
            messageDiv.innerHTML = data.message;
            form.reset();
        }
    })
    .catch(error => console.error('Error:', error));
}); 
</script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
        .payment-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
            transition: transform 0.3s;
            margin: 20px;
        }
        .payment-container:hover {
            transform: scale(1.05);
        }
        .payment-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }
        .payment-option {
            margin-bottom: 20px;
        }
        .payment-option label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
            color: #555;
        }
        .payment-option input[type="radio"] {
            margin-right: 10px;
        }
        .payment-option p {
            margin: 0;
            color: #777;
        }
        .payment-option img {
            display: block;
            margin-top: 10px;
            width: 100%;
        }
        #place-order {
            display: block;
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
        }
        #additional-info {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
            display: none;
        }
        #additional-info p {
            margin: 0 0 10px;
            color: #555;
        }
        @media (max-width: 600px) {
            .payment-container {
                width: 100%;
                padding: 20px;
                margin: 10px;
            }
            #place-order {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="payment-container">
    <h2>Payment Options</h2>
    <form id="payment-form">
        <div class="payment-option">
            <label>
                <input type="radio" name="payment-method" value="bank" required>
                Direct bank transfer
            </label>
        </div>
        <div class="payment-option">
            <label>
                <input type="radio" name="payment-method" value="check">
                Check payments
            </label>
        </div>
        <div class="payment-option">
            <label>
                <input type="radio" name="payment-method" value="cod">
                Cash on delivery
            </label>
        </div>
        <div class="payment-option">
            <label>
                <input type="radio" name="payment-method" value="paypal">
                PayPal
            </label>
            <img src="<?php echo base_url('images/paypal.png');?>"  alt="PayPal">
        </div>
        <button type="submit" id="place-order">PLACE ORDER</button>
    </form>
    <div id="additional-info"></div>
</div>

<script>
    document.querySelectorAll('input[name="payment-method"]').forEach(input => {
        input.addEventListener('change', function() {
            const additionalInfo = document.getElementById('additional-info');
            additionalInfo.style.display = 'block';
            switch (this.value) {
                case 'bank':
                    additionalInfo.innerHTML = `
                        <p>Please make your payment directly into our bank account. Use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                        <p>Bank Name: Example Bank</p>
                        <p>Account Number: 123456789</p>
                        <p>Sort Code: 00-00-00</p>
                    `;
                    break;
                case 'check':
                    additionalInfo.innerHTML = `
                        <p>Please send your check to Example Company, 123 Example Street, City, Country.</p>
                    `;
                    break;
                case 'cod':
                    additionalInfo.innerHTML = `
                        <p>You will pay for your order upon delivery. Please ensure you have the exact amount ready as our delivery personnel may not have change.</p>
                    `;
                    break;
                case 'paypal':
                    additionalInfo.innerHTML = `
                        <p>You will be redirected to PayPal to complete your purchase securely.</p>
                    `;
                    break;
                default:
                    additionalInfo.innerHTML = '';
                    additionalInfo.style.display = 'none';
            }
        });
    });

    document.getElementById('payment-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const selectedMethod = document.querySelector('input[name="payment-method"]:checked').value;
        alert('Selected payment method: ' + selectedMethod);
    });
</script>

</body>
</html>
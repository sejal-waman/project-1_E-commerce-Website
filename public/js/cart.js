let cart = [];

function addToCart(name,price) {
    // Check if the product is already in the cart
    let product = cart.find(p => p.name === productName);
    if (product) {
        product.quantity++;
    } else {
        cart.push({ name: productName, price: price, quantity: 1 });
    }
    displayCart();
}

function displayCart() {
    const cartTableBody = document.getElementById('cart');
    cartTableBody.innerHTML = '';

    if (cart.length === 0) {
        cartTableBody.innerHTML = '<tr><td colspan="4">The cart is empty.</td></tr>';
        return;
    }

    let total = 0;
    cart.forEach(product => {
        let productTotal = product.price * product.quantity;
        total += productTotal;
        cartTableBody.innerHTML += `
            <tr>
                <td>${products.name}</td>
                <td>$${products.price.toFixed(2)}</td>
                <td>${products.quantity}</td>
                <td>$${productTotal.toFixed(2)}</td>
            </tr>
        `;
    });

    cartTableBody.innerHTML += `
        <tr>
            <td colspan="3"><strong>Total</strong></td>
            <td><strong>$${total.toFixed(2)}</strong></td>
        </tr>
    `;
}
// Cart array to store items
let cart = [];

// Select cart-related elements
const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
const cartCount = document.getElementById('cart-count');
const cartIcon = document.getElementById('cart-icon');
const cartModal = document.getElementById('cart-modal');
const cartItemsContainer = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
const closeCartBtn = document.getElementById('close-cart-btn');

// Function to update cart count
function updateCartCount() {
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    cartCount.textContent = totalItems.toString().padStart(2, '0'); // Format as "00"
}

// Function to calculate and update total price
function updateCartTotal() {
    const totalPrice = cart.reduce((total, item) => total + item.price * item.quantity, 0);
    cartTotal.textContent = `Total: ${totalPrice} Dh`;
}

// Function to render cart items in the modal
function renderCartItems() {
    cartItemsContainer.innerHTML = ''; // Clear previous items
    if (cart.length === 0) {
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        return;
    }

    cart.forEach((item, index) => {
        const itemRow = document.createElement('div');
        itemRow.classList.add('cart-item');
        itemRow.innerHTML = `
            <p>${item.name} - ${item.quantity} x ${item.price} Dh</p>
            <button class="remove-btn" data-index="${index}">Remove</button>
        `;
        cartItemsContainer.appendChild(itemRow);
    });

    // Add event listeners to remove buttons
    const removeButtons = document.querySelectorAll('.remove-btn');
    removeButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            const index = parseInt(e.target.dataset.index);
            removeFromCart(index);
        });
    });
}

// Function to add an item to the cart
function addToCart(productName, productPrice) {
    const existingProduct = cart.find(item => item.name === productName);

    if (existingProduct) {
        existingProduct.quantity += 1; // Increment quantity if the item exists
    } else {
        cart.push({ name: productName, price: productPrice, quantity: 1 }); // Add new item
    }

    updateCartCount();
    updateCartTotal();
    console.log(cart); // Optional: Log the cart for debugging
}

// Function to remove an item from the cart
function removeFromCart(index) {
    cart.splice(index, 1); // Remove the item at the given index
    updateCartCount();
    updateCartTotal();
    renderCartItems(); // Re-render cart items
}

// Event listener for "Add to Cart" buttons
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const productName = button.dataset.product;
        const productPrice = parseFloat(button.dataset.price);
        addToCart(productName, productPrice);
    });
});

// Event listener to open the cart modal
cartIcon.addEventListener('click', () => {
    renderCartItems();
    updateCartTotal();
    cartModal.style.display = 'flex';
});

// Event listener to close the cart modal
closeCartBtn.addEventListener('click', () => {
    cartModal.style.display = 'none';
});

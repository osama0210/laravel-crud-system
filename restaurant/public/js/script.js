const menu = document.querySelector('.categories-items');
const buttons = document.querySelectorAll('.scroll-btn');

buttons[0].addEventListener('click', () => {
    menu.scrollBy({left: -200, behavior: 'smooth'});
});

buttons[1].addEventListener('click', () => {
    menu.scrollBy({left: 200, behavior: 'smooth'});
});


document.addEventListener('DOMContentLoaded', () => {
    const categoryButtons = document.querySelectorAll('.category-item');
    const products = document.querySelectorAll('.menu-item');
    const searchInput = document.getElementById('searchInput');


    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const categoryId = button.getAttribute('data-category-id');

            products.forEach(product => {
                if (categoryId === null || product.getAttribute('data-category-id') === categoryId) {
                    product.style.display = '';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });

    searchInput.addEventListener('keyup', () => {
        const searchTerm = searchInput.value.toLowerCase();

        products.forEach(product => {
            const productName = product.querySelector('h2').textContent.toLowerCase();

            if (productName.includes(searchTerm)) {
                product.style.display = '';
            } else {
                product.style.display = 'none';
            }
        });
    });
});

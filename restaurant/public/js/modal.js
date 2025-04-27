document.addEventListener('DOMContentLoaded', () => {
    const addOpenBtn = document.getElementById('addOpenModal');
    const modal = document.getElementById('productModal');
    const form = document.getElementById('productForm');
    const modalTitle = document.getElementById('modalTitle');
    const formMethod = document.getElementById('formMethod');
    const closeModal = document.getElementById('closeModal');
    const categoryForm = document.getElementById('categoryForm');

    // Add product modal open
    addOpenBtn.addEventListener('click', () => {
        form.action = '/admin/products';
        formMethod.value = 'POST';
        modalTitle.textContent = 'Add Product';
        form.reset();
        categoryForm.style.display = 'block'
        modal.style.display = 'block';
    });

    const editButtons = document.querySelectorAll('.open-edit-modal');
    editButtons.forEach(button => {
        button.addEventListener('click', () => {
            // de data die in de edit knop staan in admin dashboard
            const id = button.dataset.id;
            const name = button.dataset.name;
            const description = button.dataset.description;
            const price = button.dataset.price;
            const category = button.dataset.category;

            form.action = `/admin/products/${id}`;
            formMethod.value = 'PUT';
            modalTitle.textContent = 'Edit Product';

            form.querySelector('input[name="product_name"]').value = name;
            form.querySelector('textarea[name="product_description"]').value = description;
            form.querySelector('input[name="product_price"]').value = price;
            form.querySelector('select[name="category_id"]').value = category;
            form.querySelector('input[type="submit"]').value = "Edit";

            categoryForm.style.display = 'none'
            modal.style.display = 'block';
        });
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });
});



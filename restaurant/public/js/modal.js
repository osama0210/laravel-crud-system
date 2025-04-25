document.addEventListener('DOMContentLoaded', () => {
    const openBtn = document.getElementById('openModal');
    const modal = document.querySelector('.modal');
    const closeBtn = document.getElementById('closeModal');

    openBtn.addEventListener('click', () => {
        modal.style.display = 'block';
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });
});

const container = document.querySelector('.container');
const staffBtn = document.querySelector('.staff-btn');
const adminBtn = document.querySelector('.admin-btn');


staffBtn.addEventListener('click', () => {
    container.classList.add('active');
});

adminBtn.addEventListener('click', () => {
    container.classList.remove('active');
});

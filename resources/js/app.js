import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const btnToggleSidebar = document.getElementById('sidebarToggle');
btnToggleSidebar.addEventListener('click', (e) => {
    const bodyEl = document.querySelector('body');
    bodyEl.classList.toggle('sidebar-toggled');
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('toggled');
});

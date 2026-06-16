document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.querySelector('.custom-sidebar');
    const openBtn = document.getElementById('openSidebarBtn');
    const closeBtn = document.getElementById('closeSidebarBtn');
    const backdrop = document.createElement('div');
    backdrop.className = 'sidebar-backdrop';
    document.body.appendChild(backdrop);

    function toggleSidebar() {
        sidebar.classList.toggle('show-sidebar');
        backdrop.classList.toggle('show');
    }

    if (openBtn) openBtn.addEventListener('click', toggleSidebar);
    if (closeBtn) closeBtn.addEventListener('click', toggleSidebar);
    backdrop.addEventListener('click', toggleSidebar);
});
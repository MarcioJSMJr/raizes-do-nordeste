<nav class="navbar custom-navbar shadow-sm sticky-top" style="background-color: #f8f9fa;">
    <div class="container-fluid w-100 d-flex justify-content-between px-4">

        <button class="btn btn-link text-dark d-md-none p-0 text-decoration-none" id="openSidebarBtn">
            <i class="bi bi-list fs-2"></i>
        </button>

        <div class="d-flex align-items-center ms-auto">
            
            <div class="me-4 text-end d-none d-sm-block">
                <span class="d-block fw-bold text-dark lh-1" style="font-size: 0.9rem;">Caixa Aberto</span>
                <span class="text-success small fw-medium">Unidade Centro</span>
            </div>

            <div class="d-flex align-items-center border-start ps-3">
                <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-2" style="width: 35px; height: 35px;">
                    <i class="bi bi-person-badge"></i>
                </div>
                <span class="me-3 fw-medium text-dark small d-none d-sm-inline">Atendente</span>
                <a href="<?= BASE_URL; ?>admin/login" class="btn btn-sm btn-outline-dark rounded-pill px-3">Sair</a>
            </div>

        </div>
    </div>
</nav>
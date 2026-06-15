<nav class="navbar custom-navbar shadow-sm sticky-top">
    <div class="container-fluid w-100 d-flex justify-content-between px-4">

        <button class="btn btn-link text-dark d-md-none p-0 text-decoration-none" id="openSidebarBtn">
            <i class="bi bi-list fs-2"></i>
        </button>

        <div class="d-flex align-items-center ms-auto">

            <div class="dropdown me-3 me-sm-4">
                <a href="#" class="text-decoration-none position-relative d-flex align-items-center"
                    id="notificationDropdown" data-bs-toggle="dropdown" aria-expanded="false" title="Notificações">
                    <i class="bi bi-bell-fill fs-5" style="color: var(--primary-color);"></i>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-white rounded-circle">
                        <span class="visually-hidden">Novas notificações</span>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4 mt-3 p-0"
                    aria-labelledby="notificationDropdown" style="width: 320px; overflow: hidden;">

                    <div class="d-flex justify-content-between align-items-center bg-light border-bottom px-3 py-3">
                        <h6 class="mb-0 fw-bold text-dark fs-6">Notificações</h6>
                    </div>

                    <div class="list-group list-group-flush" style="max-height: 320px; overflow-y: auto;">

                        <a href="<?= BASE_URL; ?>pedidos" class="list-group-item list-group-item-action px-3 py-3 border-light" style="background-color: rgba(230, 81, 0, 0.05);">
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 38px; height: 38px; font-size: 1.2rem; background-color: var(--primary-color);">
                                    <i class="bi bi-scooter"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1 small fw-bold text-dark lh-sm">
                                        Pedido a caminho!
                                        <span class="fw-normal text-muted d-block mt-1">
                                            Seu pedido #1024 saiu para entrega.
                                        </span>
                                    </p>
                                    <span class="d-block fw-bold" style="font-size: 0.7rem;">Agora mesmo</span>
                                </div>
                            </div>
                        </a>

                        <a href="<?= BASE_URL; ?>fidelidade" class="list-group-item list-group-item-action px-3 py-3 border-light">
                            <div class="d-flex align-items-start gap-3">
                                <div class="rounded-circle text-white d-flex align-items-center justify-content-center flex-shrink-0"
                                    style="width: 38px; height: 38px; font-size: 1.2rem; background-color: var(--highlight-color);">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-1 small fw-medium text-dark lh-sm">
                                        Você ganhou <strong class="fw-bold">50 pontos</strong> na sua última compra!
                                    </p>
                                    <span class="d-block text-muted fw-medium" style="font-size: 0.7rem;">Ontem</span>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>

            <span class="me-3 fw-medium text-dark small d-none d-sm-inline">Olá, Visitante</span>
            <a href="<?= BASE_URL; ?>login"
                class="btn btn-sm btn-outline-danger rounded-pill px-3 px-sm-4 fw-medium">Sair</a>
        </div>

    </div>
</nav>
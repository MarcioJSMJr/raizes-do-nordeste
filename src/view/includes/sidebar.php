<aside class="custom-sidebar shadow-sm">
    <div class="sidebar-header px-4 d-flex justify-content-between align-items-center">

        <a class="sidebar-brand fw-bold text-decoration-none d-flex align-items-center" href="<?= BASE_URL; ?>home">
            <i class="bi bi-shop me-2"></i> Raízes
        </a>

        <button class="btn btn-link text-dark d-md-none p-0 text-decoration-none" id="closeSidebarBtn">
            <i class="bi bi-x-lg fs-4"></i>
        </button>
    </div>

    <div class="sidebar-menu px-3 py-4" style="overflow-y: auto; height: calc(100vh - var(--header-height));">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link <?= ($page_name == 'home') ? 'active' : ''; ?>" href="<?= BASE_URL; ?>home">
                    <i class="bi bi-house me-2"></i> Início
                </a>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link <?= ($page_name == 'cardapio') ? 'active' : ''; ?>" href="<?= BASE_URL; ?>cardapio">
                    <i class="bi bi-book-half me-2"></i> Nosso Cardápio
                </a>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link <?= ($page_name == 'pedidos') ? 'active' : ''; ?>" href="<?= BASE_URL; ?>pedidos">
                    <i class="bi bi-bag-check me-2"></i> Meus Pedidos
                </a>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link <?= ($page_name == 'fidelidade') ? 'active' : ''; ?>" href="<?= BASE_URL; ?>fidelidade">
                    <i class="bi bi-star me-2"></i> Programa Fidelidade
                </a>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link <?= ($page_name == 'perfil') ? 'active' : ''; ?>" href="<?= BASE_URL; ?>perfil">
                    <i class="bi bi-person-gear me-2"></i> Meu Perfil
                </a>
            </li>

        </ul>
    </div>
</aside>
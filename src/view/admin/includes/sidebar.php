<aside class="custom-sidebar shadow-sm" style="background-color: #3E2723;"> 
    <div class="sidebar-header px-4 d-flex justify-content-between align-items-center border-bottom border-secondary">
        <a class="sidebar-brand fw-bold text-decoration-none d-flex align-items-center text-white" href="<?= BASE_URL; ?>admin/painel">
            <i class="bi bi-shop me-2" style="color: var(--highlight-color);"></i> Raízes Admin
        </a>
        <button class="btn btn-link text-white d-md-none p-0 text-decoration-none" id="closeSidebarBtn">
            <i class="bi bi-x-lg fs-4"></i>
        </button>
    </div>

    <div class="sidebar-menu px-3 py-4" style="overflow-y: auto; height: calc(100vh - var(--header-height));">
        <ul class="nav flex-column">
            
            <li class="nav-item">
                <span class="nav-title text-white opacity-50 px-3">OPERAÇÃO</span>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link text-white-50 <?= ($page_name == 'cozinha') ? 'active text-white' : ''; ?>" href="<?= BASE_URL; ?>admin/cozinha" style="<?= ($page_name == 'cozinha') ? 'background-color: rgba(255,179,0,0.15);' : ''; ?>">
                    <i class="bi bi-egg-fried me-2"></i> Tela da Cozinha
                </a>
            </li>
            
            <li class="nav-item mt-2">
                <a class="nav-link text-white-50 <?= ($page_name == 'painel') ? 'active text-white' : ''; ?>" href="<?= BASE_URL; ?>admin/painel" style="<?= ($page_name == 'painel') ? 'background-color: rgba(255,179,0,0.15);' : ''; ?>">
                    <i class="bi bi-ui-checks-grid me-2"></i> Gestão de Pedidos
                </a>
            </li>

            <li class="nav-item mt-4">
                <span class="nav-title text-white opacity-50 px-3">GERÊNCIA</span>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link text-white-50 <?= ($page_name == 'cardapio') ? 'active text-white' : ''; ?>" href="<?= BASE_URL; ?>admin/cardapio" style="<?= ($page_name == 'cardapio') ? 'background-color: rgba(255,179,0,0.15);' : ''; ?>">
                    <i class="bi bi-journal-text me-2"></i> Editar Cardápio
                </a>
            </li>

            <li class="nav-item mt-2">
                <a class="nav-link text-white-50 <?= ($page_name == 'relatorios') ? 'active text-white' : ''; ?>" href="<?= BASE_URL; ?>admin/relatorios" style="<?= ($page_name == 'relatorios') ? 'background-color: rgba(255,179,0,0.15);' : ''; ?>">
                    <i class="bi bi-graph-up-arrow me-2"></i> Relatórios
                </a>
            </li>

        </ul>
    </div>
</aside>
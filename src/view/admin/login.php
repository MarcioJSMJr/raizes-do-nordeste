<div class="admin-auth-container d-flex align-items-center justify-content-center">
    <div class="card admin-auth-card border-0 shadow-lg">
        <div class="card-body p-4 p-md-5 text-center">
            
            <div class="mb-4">
                <div class="bg-light rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3 shadow-sm" style="width: 80px; height: 80px;">
                    <i class="bi bi-shop fs-1" style="color: var(--primary-color);"></i>
                </div>
                <h3 class="fw-bold" style="color: var(--heading-color);">Raízes Admin</h3>
                <p class="text-muted small">Acesso restrito à equipe e gerência.</p>
            </div>

            <form action="<?= BASE_URL; ?>admin/cozinha" method="POST">
                <div class="mb-3 text-start">
                    <label class="form-label small fw-medium text-muted">E-mail Corporativo</label>
                    <input type="email" class="form-control admin-auth-input" placeholder="gerencia@raizes.com" required>
                </div>
                <div class="mb-4 text-start">
                    <label class="form-label small fw-medium text-muted">Senha de Acesso</label>
                    <input type="password" class="form-control admin-auth-input" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn btn-admin-auth w-100 rounded-pill fw-bold mb-2">Acessar Painel</button>
            </form>
            
            <a href="<?= BASE_URL; ?>login" class="small text-decoration-none mt-4 d-inline-block text-muted transition-link">
                <i class="bi bi-arrow-left me-1"></i> Ir para o site do cliente
            </a>
        </div>
    </div>
</div>
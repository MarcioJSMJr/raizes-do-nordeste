<div class="auth-container d-flex align-items-center justify-content-center">
    <div class="card auth-card border-0 shadow-lg">
        <div class="row g-0 h-100">
            <div class="col-md-5 d-none d-md-block auth-image-side">
                <div class="auth-image-overlay d-flex flex-column justify-content-center align-items-center text-white p-4 text-center">
                    <i class="bi bi-shop fs-1 mb-2"></i>
                    <h3 class="fw-bold">Raízes do Nordeste</h3>
                    <p class="small">O sabor da nossa terra direto para a sua mesa.</p>
                </div>
            </div>

            <div class="col-12 col-md-7 d-flex align-items-center">
                <div class="card-body p-4 p-md-5">
                    <div class="text-center mb-4 d-md-none">
                        <i class="bi bi-shop fs-1" style="color: var(--primary-color);"></i>
                        <h3 class="fw-bold mt-2" style="color: var(--heading-color);">Raízes</h3>
                    </div>

                    <h4 class="fw-bold mb-1" style="color: var(--heading-color);">Bem-vindo de volta!</h4>
                    <p class="text-muted small mb-4">Faça login para acompanhar seus pedidos e pontos.</p>

                    <form action="<?= BASE_URL; ?>home" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-medium text-muted">E-mail</label>
                            <input type="email" class="form-control auth-input" placeholder="seu@email.com" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label class="form-label small fw-medium text-muted mb-0">Senha</label>
                                <a href="#" class="small text-decoration-none" style="color: var(--primary-color);">Esqueceu a senha?</a>
                            </div>
                            <input type="password" class="form-control auth-input mt-1" placeholder="••••••••" required>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="lembrarMim">
                            <label class="form-check-label small text-muted" for="lembrarMim">Lembrar de mim</label>
                        </div>
                        <button type="submit" class="btn btn-auth w-100 rounded-pill fw-bold mb-3">Entrar</button>
                    </form>

                    <p class="text-center small text-muted mb-0">
                        Ainda não tem uma conta?
                        <a href="<?= BASE_URL; ?>cadastro" class="fw-bold text-decoration-none" style="color: var(--primary-color);">Cadastre-se aqui</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
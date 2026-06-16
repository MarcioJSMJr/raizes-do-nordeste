<div class="auth-container d-flex align-items-center justify-content-center">
    <div class="card auth-card border-0 shadow-lg" style="max-width: 600px;">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                <i class="bi bi-shop fs-1" style="color: var(--primary-color);"></i>
                <h3 class="fw-bold mt-2" style="color: var(--heading-color);">Criar Conta</h3>
                <p class="text-muted small">Junte-se ao Clube Raízes e ganhe pontos hoje mesmo!</p>
            </div>

            <form action="<?= BASE_URL; ?>login" method="POST">
                <div class="row g-3 mb-3">
                    <div class="col-12">
                        <label class="form-label small fw-medium text-muted">Nome Completo</label>
                        <input type="text" class="form-control auth-input" placeholder="Como devemos te chamar?" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium text-muted">E-mail</label>
                        <input type="email" class="form-control auth-input" placeholder="seu@email.com" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium text-muted">WhatsApp</label>
                        <input type="tel" class="form-control auth-input" placeholder="(00) 00000-0000" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium text-muted">Senha</label>
                        <input type="password" class="form-control auth-input" placeholder="Crie uma senha forte" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small fw-medium text-muted">Confirmar Senha</label>
                        <input type="password" class="form-control auth-input" placeholder="Repita a senha" required>
                    </div>
                </div>

                <div class="form-check border p-3 rounded-3 mb-4" style="background-color: var(--background-body);">
                    <input class="form-check-input mt-1" type="checkbox" id="termosLgpd" required>
                    <label class="form-check-label small text-muted" for="termosLgpd">
                        Li e concordo com os Termos de Uso e entendo que meus dados serão processados conforme a Política de Privacidade (LGPD) para gestão de pedidos e fidelidade.
                    </label>
                </div>

                <button type="submit" class="btn btn-auth w-100 rounded-pill fw-bold mb-3">Cadastrar e Ganhar 100 pts</button>
            </form>

            <p class="text-center small text-muted mb-0">
                Já possui uma conta?
                <a href="<?= BASE_URL; ?>login" class="fw-bold text-decoration-none" style="color: var(--primary-color);">Faça login</a>
            </p>
        </div>
    </div>
</div>
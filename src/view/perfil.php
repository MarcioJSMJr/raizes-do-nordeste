<div class="container-fluid">

    <div class="mb-4">
        <h1 class="dash-title">Meu Perfil</h1>
        <p class="dash-subtitle mb-0">Gerencie seus dados pessoais, endereços e preferências.</p>
    </div>

    <div class="row g-4 mb-5">
        
        <div class="col-12 col-lg-4">
            <div class="card profile-card border-0 shadow-sm text-center p-4">
                <div class="avatar-wrapper mx-auto mb-3">
                    <div class="avatar-circle bg-light d-flex align-items-center justify-content-center text-muted fs-1 mx-auto" style="width: 100px; height: 100px; border-radius: 50%;">
                        <i class="bi bi-person-fill"></i>
                    </div>
                    <button class="btn btn-sm btn-primary edit-avatar-btn rounded-circle shadow"><i class="bi bi-camera-fill"></i></button>
                </div>
                <h5 class="fw-bold mb-1" style="color: var(--heading-color);">Visitante</h5>
                <p class="text-muted small mb-3">visitante@email.com</p>
                <hr class="text-muted opacity-25">
                <div class="d-flex justify-content-between px-3 text-muted small">
                    <span>Cliente desde:</span>
                    <span class="fw-bold">Junho, 2026</span>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-8">
            
            <div class="card profile-card border-0 shadow-sm mb-4">
                <div class="card-body p-4 p-md-5">
                    <h5 class="fw-bold mb-4" style="color: var(--heading-color);"><i class="bi bi-person-lines-fill me-2" style="color: var(--primary-color);"></i> Dados Pessoais</h5>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-medium text-muted">Nome Completo</label>
                                <input type="text" class="form-control custom-input" value="Visitante">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-medium text-muted">CPF</label>
                                <input type="text" class="form-control custom-input" placeholder="000.000.000-00">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-medium text-muted">E-mail</label>
                                <input type="email" class="form-control custom-input" value="visitante@email.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-medium text-muted">Telefone / WhatsApp</label>
                                <input type="tel" class="form-control custom-input" placeholder="(00) 00000-0000">
                            </div>
                        </div>
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-save rounded-pill px-4 fw-medium">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card profile-card border-0 shadow-sm mb-4">
                <div class="card-body p-4 p-md-5">
                    <h5 class="fw-bold mb-4" style="color: var(--heading-color);"><i class="bi bi-geo-alt-fill me-2" style="color: var(--primary-color);"></i> Endereço de Entrega</h5>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label small fw-medium text-muted">CEP</label>
                                <input type="text" class="form-control custom-input" placeholder="00000-000">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label small fw-medium text-muted">Rua / Avenida</label>
                                <input type="text" class="form-control custom-input" placeholder="Ex: Rua das Flores">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label small fw-medium text-muted">Número</label>
                                <input type="text" class="form-control custom-input" placeholder="Ex: 123">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label small fw-medium text-muted">Complemento</label>
                                <input type="text" class="form-control custom-input" placeholder="Ex: Apto 42, Bloco B">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label small fw-medium text-muted">Bairro</label>
                                <input type="text" class="form-control custom-input">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label small fw-medium text-muted">Cidade</label>
                                <input type="text" class="form-control custom-input">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label small fw-medium text-muted">UF</label>
                                <input type="text" class="form-control custom-input" placeholder="Ex: SP">
                            </div>
                        </div>
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-save rounded-pill px-4 fw-medium">Salvar Endereço</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card profile-card border-0 shadow-sm">
                <div class="card-body p-4 p-md-5">
                    <h5 class="fw-bold mb-4" style="color: var(--heading-color);"><i class="bi bi-shield-lock-fill me-2" style="color: var(--primary-color);"></i> Privacidade & LGPD</h5>
                    
                    <div class="form-check form-switch mb-3 d-flex align-items-center">
                        <input class="form-check-input fs-4 me-3" type="checkbox" id="lgpdMarketing" checked>
                        <div>
                            <label class="form-check-label fw-bold mb-0" for="lgpdMarketing">Comunicações e Ofertas</label>
                            <p class="text-muted small mb-0">Aceito receber promoções e novidades no meu e-mail e WhatsApp.</p>
                        </div>
                    </div>

                    <div class="form-check form-switch d-flex align-items-center">
                        <input class="form-check-input fs-4 me-3" type="checkbox" id="lgpdDados" checked disabled>
                        <div>
                            <label class="form-check-label fw-bold mb-0" for="lgpdDados">Dados Essenciais de Entrega</label>
                            <p class="text-muted small mb-0">Necessário para processarmos seus pedidos e entregarmos na sua casa.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
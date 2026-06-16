<div class="container-fluid mb-5">

    <div class="mb-4">
        <h1 class="dash-title">Finalizar Pedido</h1>
        <p class="dash-subtitle mb-0">Revise seus itens, escolha o endereço e a forma de pagamento.</p>
    </div>

    <form action="<?= BASE_URL; ?>pedidos" method="POST"> <div class="row g-4">
            
            <div class="col-12 col-lg-7 col-xl-8">
                
                <div class="card checkout-card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0" style="color: var(--heading-color);"><i class="bi bi-geo-alt-fill me-2" style="color: var(--primary-color);"></i> Endereço de Entrega</h5>
                            <a href="<?= BASE_URL; ?>perfil" class="small text-decoration-none" style="color: var(--primary-color);">Editar Endereços</a>
                        </div>
                        
                        <div class="address-box p-3 rounded-3 border active">
                            <div class="form-check">
                                <input class="form-check-input mt-1" type="radio" name="endereco" id="end1" checked>
                                <label class="form-check-label w-100" for="end1">
                                    <span class="d-block fw-bold mb-1">Casa</span>
                                    <span class="d-block text-muted small">Rua das Flores, 123 - Apto 42</span>
                                    <span class="d-block text-muted small">Centro, Itapetininga - SP, 00000-000</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card checkout-card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4" style="color: var(--heading-color);"><i class="bi bi-credit-card-fill me-2" style="color: var(--primary-color);"></i> Pagamento (Serviço Externo)</h5>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="payment-box p-3 rounded-3 border w-100 cursor-pointer text-center">
                                    <input type="radio" name="pagamento" class="d-none" value="pix" checked>
                                    <i class="bi bi-qr-code fs-2 d-block mb-2 text-success"></i>
                                    <span class="fw-bold d-block">Pix</span>
                                    <span class="small text-muted">Aprovação imediata</span>
                                </label>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="payment-box p-3 rounded-3 border w-100 cursor-pointer text-center">
                                    <input type="radio" name="pagamento" class="d-none" value="cartao">
                                    <i class="bi bi-credit-card fs-2 d-block mb-2 text-primary"></i>
                                    <span class="fw-bold d-block">Cartão de Crédito</span>
                                    <span class="small text-muted">Via Mercado Pago</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="alert alert-light border small text-muted d-flex align-items-center mb-0">
                            <i class="bi bi-info-circle-fill me-2 fs-5" style="color: var(--primary-color);"></i>
                            Ao clicar em finalizar, você será redirecionado para um ambiente seguro. Não armazenamos os dados do seu cartão.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5 col-xl-4">
                <div class="card checkout-card border-0 shadow-sm sticky-top" style="top: 90px;">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4" style="color: var(--heading-color);">Resumo do Pedido</h5>
                        
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom border-light">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light text-dark border">1x</span>
                                <span class="small fw-medium text-muted">Baião de Dois Completo</span>
                            </div>
                            <span class="small fw-bold">R$ 38,90</span>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom border-light">
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-light text-dark border">1x</span>
                                <span class="small fw-medium text-muted">Suco de Caju Natural</span>
                            </div>
                            <span class="small fw-bold">R$ 9,00</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2 small text-muted">
                            <span>Subtotal</span>
                            <span>R$ 47,90</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2 small text-muted">
                            <span>Taxa de Entrega</span>
                            <span class="text-success fw-bold">Grátis</span>
                        </div>
                        
                        <div class="form-check form-switch my-3 p-3 bg-light rounded-3 d-flex align-items-center justify-content-between">
                            <div>
                                <input class="form-check-input ms-0 mt-0" type="checkbox" id="usarPontos">
                                <label class="form-check-label small fw-bold ms-2" for="usarPontos">Usar 150 pts</label>
                            </div>
                            <span class="small text-danger fw-bold">- R$ 10,00</span>
                        </div>

                        <hr class="text-muted opacity-25 my-3">
                        
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <span class="fw-bold">Total</span>
                            <span class="fs-4 fw-bolder" style="color: var(--primary-color);">R$ 47,90</span>
                        </div>

                        <button type="submit" class="btn btn-checkout w-100 rounded-pill fw-bold fs-6 py-2">
                            Finalizar Compra <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
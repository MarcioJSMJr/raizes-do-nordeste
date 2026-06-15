<div class="container-fluid">

    <div class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3">
        <div>
            <h1 class="dash-title">Meus Pedidos</h1>
            <p class="dash-subtitle mb-0">Acompanhe o status e o histórico das suas delícias.</p>
        </div>

        <div class="d-flex gap-2 w-100" style="max-width: 500px;">
            <div class="input-group shadow-sm border-0 rounded-3 overflow-hidden">
                <span class="input-group-text bg-white border-0 text-muted"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control border-0 bg-white" placeholder="Buscar por prato ou nº do pedido...">
            </div>
            <select class="form-select shadow-sm border-0 rounded-3 w-auto text-muted">
                <option selected>Status</option>
                <option value="1">Em andamento</option>
                <option value="2">Entregues</option>
                <option value="3">Cancelados</option>
            </select>
        </div>
    </div>

    <div class="row g-4 mb-4">

        <div class="col-12">
            <div class="card order-card border-0 shadow-sm">
                <div class="card-body p-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="order-icon bg-warning text-white rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="bi bi-clock-history fs-4"></i>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <h5 class="fw-bold mb-0" style="color: var(--heading-color);">Pedido #1024</h5>
                                <span class="badge bg-warning text-dark px-2 py-1 rounded-pill small">Preparando</span>
                            </div>
                            <p class="text-muted small mb-0">Hoje, 19:30 • 1x Baião de Dois Completo, 1x Suco de Caju</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-md-end gap-2">
                        <span class="fw-bolder fs-5" style="color: var(--primary-color);">R$ 47,90</span>
                        <button class="btn btn-sm btn-outline-secondary rounded-pill px-3">Acompanhar Entrega</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card order-card border-0 shadow-sm">
                <div class="card-body p-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="order-icon bg-success text-white rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="bi bi-check2-all fs-4"></i>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <h5 class="fw-bold mb-0" style="color: var(--heading-color);">Pedido #0987</h5>
                                <span class="badge bg-success px-2 py-1 rounded-pill small">Entregue</span>
                            </div>
                            <p class="text-muted small mb-0">12 de Junho, 20:15 • 2x Tapioca de Carne de Sol, 1x Guaraná Jesus</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-md-end gap-2">
                        <span class="fw-bolder fs-5 text-muted">R$ 52,00</span>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-primary rounded-pill px-3" style="color: var(--primary-color); border-color: var(--primary-color);">Pedir Novamente</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card order-card border-0 shadow-sm">
                <div class="card-body p-4 d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <div class="order-icon bg-success text-white rounded-circle d-flex justify-content-center align-items-center flex-shrink-0">
                            <i class="bi bi-check2-all fs-4"></i>
                        </div>
                        <div>
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <h5 class="fw-bold mb-0" style="color: var(--heading-color);">Pedido #0842</h5>
                                <span class="badge bg-success px-2 py-1 rounded-pill small">Entregue</span>
                            </div>
                            <p class="text-muted small mb-0">05 de Junho, 12:40 • 1x Cuscuz com Ovo e Queijo</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column align-items-md-end gap-2">
                        <span class="fw-bolder fs-5 text-muted">R$ 15,50</span>
                        <div class="d-flex gap-2">
                            <button class="btn btn-sm btn-outline-primary rounded-pill px-3" style="color: var(--primary-color); border-color: var(--primary-color);">Pedir Novamente</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <nav aria-label="Navegação de páginas de pedidos">
        <ul class="pagination custom-pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link border-0 shadow-sm" href="#" tabindex="-1" aria-disabled="true"><i class="bi bi-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link border-0 shadow-sm" href="#">1</a></li>
            <li class="page-item"><a class="page-link border-0 shadow-sm" href="#">2</a></li>
            <li class="page-item"><a class="page-link border-0 shadow-sm" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link border-0 shadow-sm" href="#"><i class="bi bi-chevron-right"></i></a>
            </li>
        </ul>
    </nav>

</div>
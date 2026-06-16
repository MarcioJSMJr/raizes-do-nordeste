<div class="container-fluid mb-5">

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
        <div>
            <h1 class="dash-title"><i class="bi bi-journal-text me-2" style="color: var(--primary-color);"></i> Gerenciar Cardápio</h1>
            <p class="dash-subtitle mb-0">Adicione, edite ou pause pratos do menu rapidamente.</p>
        </div>
        <button class="btn btn-add-item rounded-pill px-4 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#modalNovoPrato">
            <i class="bi bi-plus-lg me-2"></i> Novo Prato
        </button>
    </div>

    <div class="input-group shadow-sm border-0 rounded-3 overflow-hidden mb-4" style="max-width: 400px;">
        <span class="input-group-text bg-white border-0 text-muted"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control border-0 bg-white" placeholder="Buscar prato para editar...">
    </div>

    <div class="row g-4">
        
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card edit-menu-card border-0 shadow-sm h-100">
                <div class="d-flex align-items-center p-3 border-bottom border-light">
                    <img src="https://images.unsplash.com/photo-1628840042765-356cda07504e?q=80&w=200&auto=format&fit=crop" class="rounded-3 me-3" style="width: 70px; height: 70px; object-fit: cover;" alt="Baião">
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1">Baião de Dois Completo</h6>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill small">Ativo</span>
                    </div>
                    <div class="fw-bolder fs-5 text-dark">R$ 38,90</div>
                </div>
                <div class="card-body p-3 d-flex gap-2">
                    <button class="btn btn-sm btn-outline-primary w-50 rounded-3 fw-medium" data-bs-toggle="modal" data-bs-target="#modalEditarPrato" data-nome="Baião de Dois Completo" data-preco="38,90" data-categoria="1" data-status="ativo">
                        <i class="bi bi-pencil-square me-1"></i> Editar
                    </button>
                    <button class="btn btn-sm btn-outline-warning w-50 rounded-3 fw-medium text-dark"><i class="bi bi-pause-circle me-1"></i> Pausar</button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-4">
            <div class="card edit-menu-card border-0 shadow-sm h-100 inactive-item">
                <div class="d-flex align-items-center p-3 border-bottom border-light">
                    <img src="https://images.unsplash.com/photo-1596450514735-111a2fe02935?q=80&w=200&auto=format&fit=crop" class="rounded-3 me-3 opacity-50" style="width: 70px; height: 70px; object-fit: cover;" alt="Cuscuz">
                    <div class="flex-grow-1">
                        <h6 class="fw-bold mb-1 text-muted">Cuscuz com Ovo e Queijo</h6>
                        <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill small">Pausado</span>
                    </div>
                    <div class="fw-bolder fs-5 text-muted">R$ 15,50</div>
                </div>
                <div class="card-body p-3 d-flex gap-2">
                    <button class="btn btn-sm btn-outline-primary w-50 rounded-3 fw-medium" data-bs-toggle="modal" data-bs-target="#modalEditarPrato" data-nome="Cuscuz com Ovo e Queijo" data-preco="15,50" data-categoria="2" data-status="inativo">
                        <i class="bi bi-pencil-square me-1"></i> Editar
                    </button>
                    <button class="btn btn-sm btn-success w-50 rounded-3 fw-medium"><i class="bi bi-play-circle me-1"></i> Ativar</button>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modalNovoPrato" tabindex="-1" aria-labelledby="modalNovoPratoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 1.2rem;">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold" id="modalNovoPratoLabel" style="color: var(--heading-color);">Adicionar Novo Prato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-medium text-muted">Nome do Prato</label>
                            <input type="text" class="form-control rounded-3" placeholder="Ex: Acarajé Tradicional">
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-medium text-muted">Preço (R$)</label>
                                <input type="text" class="form-control rounded-3" placeholder="00,00">
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-medium text-muted">Categoria</label>
                                <select class="form-select rounded-3">
                                    <option value="1">Pratos Principais</option>
                                    <option value="2">Tapiocas</option>
                                    <option value="3">Bebidas</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-medium text-muted">Descrição</label>
                            <textarea class="form-control rounded-3" rows="2" placeholder="Ingredientes e detalhes..."></textarea>
                        </div>
                        <button type="submit" class="btn w-100 rounded-pill fw-bold text-white" style="background-color: var(--primary-color);">Salvar Prato</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditarPrato" tabindex="-1" aria-labelledby="modalEditarPratoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 1.2rem;">
                <div class="modal-header border-bottom-0 pb-0">
                    <h5 class="modal-title fw-bold" id="modalEditarPratoLabel" style="color: var(--heading-color);">Editar Prato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-medium text-muted">Nome do Prato</label>
                            <input type="text" class="form-control rounded-3" id="editNome">
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-6">
                                <label class="form-label small fw-medium text-muted">Preço (R$)</label>
                                <input type="text" class="form-control rounded-3" id="editPreco">
                            </div>
                            <div class="col-6">
                                <label class="form-label small fw-medium text-muted">Categoria</label>
                                <select class="form-select rounded-3" id="editCategoria">
                                    <option value="1">Pratos Principais</option>
                                    <option value="2">Tapiocas</option>
                                    <option value="3">Bebidas</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-medium text-muted">Status</label>
                            <select class="form-select rounded-3" id="editStatus">
                                <option value="ativo">Ativo (Visível)</option>
                                <option value="inativo">Pausado (Invisível)</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 rounded-pill fw-bold text-white" style="background-color: var(--primary-color);">Atualizar Prato</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
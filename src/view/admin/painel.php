<div class="container-fluid mb-5">

    <div class="mb-4">
        <h1 class="dash-title">Gestão de Pedidos</h1>
        <p class="dash-subtitle mb-0">Acompanhe os pedidos em tempo real (Visão Balcão / Cozinha).</p>
    </div>

    <div class="row g-4 kanban-board">
        
        <div class="col-12 col-lg-4">
            <div class="kanban-col bg-light rounded-4 p-3 h-100 border d-flex flex-column">
                <h5 class="fw-bold mb-3 text-dark d-flex justify-content-between align-items-center">
                    <span>Novos <span class="badge bg-danger rounded-pill ms-1">1</span></span>
                    <i class="bi bi-bell-fill text-danger fs-5"></i>
                </h5>
                
                <div class="kanban-dropzone flex-grow-1" id="lista-novos">
                    <div class="card order-task border-0 shadow-sm mb-3 border-start border-4 border-danger">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="fw-bold fs-5">#1026</span>
                                <span class="small text-muted">19:45</span>
                            </div>
                            <ul class="list-unstyled small mb-3 text-muted fw-medium">
                                <li>1x Tapioca de Carne de Sol</li>
                                <li>1x Suco de Caju</li>
                            </ul>
                            <p class="small text-dark mb-0"><i class="bi bi-person"></i> Visitante</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="kanban-col bg-light rounded-4 p-3 h-100 border d-flex flex-column">
                <h5 class="fw-bold mb-3 text-dark d-flex justify-content-between align-items-center">
                    <span>Em Preparo <span class="badge bg-warning text-dark rounded-pill ms-1">1</span></span>
                    <i class="bi bi-fire text-warning fs-5"></i>
                </h5>

                <div class="kanban-dropzone flex-grow-1" id="lista-preparo">
                    <div class="card order-task border-0 shadow-sm mb-3 border-start border-4 border-warning">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="fw-bold fs-5">#1025</span>
                                <span class="small text-muted text-warning fw-bold"><i class="bi bi-clock"></i> 10 min</span>
                            </div>
                            <ul class="list-unstyled small mb-3 text-muted fw-medium">
                                <li>2x Baião de Dois</li>
                            </ul>
                            <p class="small text-dark mb-0"><i class="bi bi-person"></i> Cliente Fiel</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="kanban-col bg-light rounded-4 p-3 h-100 border d-flex flex-column">
                <h5 class="fw-bold mb-3 text-dark d-flex justify-content-between align-items-center">
                    <span>Prontos <span class="badge bg-success rounded-pill ms-1">1</span></span>
                    <i class="bi bi-check-circle-fill text-success fs-5"></i>
                </h5>

                <div class="kanban-dropzone flex-grow-1" id="lista-prontos">
                    <div class="card order-task border-0 shadow-sm mb-3 border-start border-4 border-success">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="fw-bold fs-5">#1024</span>
                                <span class="badge bg-light text-success border border-success">Aguardando</span>
                            </div>
                            <ul class="list-unstyled small mb-3 text-muted fw-medium">
                                <li>1x Cuscuz com Ovo</li>
                            </ul>
                            <p class="small text-dark mb-0"><i class="bi bi-geo-alt"></i> Rua das Flores, 123</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const configKanban = {
            group: 'pedidos', 
            animation: 150,
            ghostClass: 'sortable-ghost', 
            easing: "cubic-bezier(1, 0, 0, 1)"
        };

        Sortable.create(document.getElementById('lista-novos'), configKanban);
        Sortable.create(document.getElementById('lista-preparo'), configKanban);
        Sortable.create(document.getElementById('lista-prontos'), configKanban);
    });
</script>
<div class="container-fluid">

    <div class="alert alert-warning alert-dismissible fade show shadow-sm border-0 d-flex align-items-center mb-4" role="alert" style="background-color: rgba(255, 179, 0, 0.15); color: var(--secondary-color);">
        <i class="bi bi-shield-lock-fill fs-4 me-3" style="color: var(--highlight-color);"></i>
        <div>
            <strong>Privacidade e LGPD:</strong> Utilizamos cookies para personalizar seu cardápio, processar seus pedidos e gerenciar seus pontos no programa de fidelidade. Ao continuar, você concorda com o uso de seus dados.
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>

    <div class="mb-4 d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3">
        <div>
            <h1 class="dash-title">Nosso Cardápio</h1>
            <p class="dash-subtitle mb-0">Sabores autênticos do nordeste, feitos com amor para você.</p>
        </div>
        
        <div class="d-flex gap-2 w-100" style="max-width: 500px;">
            <div class="input-group shadow-sm border-0 rounded-3 overflow-hidden">
                <span class="input-group-text bg-white border-0 text-muted"><i class="bi bi-search"></i></span>
                <input type="text" class="form-control border-0 bg-white" placeholder="Buscar por pratos, bebidas...">
            </div>
            <select class="form-select shadow-sm border-0 rounded-3 w-auto d-none d-md-block text-muted">
                <option selected>Categorias</option>
                <option value="1">Pratos Principais</option>
                <option value="2">Tapiocas</option>
                <option value="3">Bebidas</option>
            </select>
        </div>
    </div>

    <div class="row g-4 mb-4">

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100 menu-card border-0 shadow-sm">
                <div class="card-img-container">
                    <img src="<?= BASE_URL; ?>view/assets/images/baiao.png" class="card-img-top" alt="Baião de Dois">
                    <span class="badge bg-danger position-absolute top-0 end-0 m-3 shadow">Mais Vendido</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Baião de Dois Completo</h5>
                    <p class="card-text text-muted small mb-3">Arroz, feijão de corda, queijo coalho, carne de sol e manteiga da terra.</p>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <span class="price fw-bolder fs-5">R$ 38,90</span>
                        <a href="<?= BASE_URL; ?>checkout" class="btn btn-add rounded-pill px-3 fw-medium text-decoration-none"><i class="bi bi-plus-lg me-1"></i> Pedir</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100 menu-card border-0 shadow-sm">
                <div class="card-img-container">
                    <img src="<?= BASE_URL; ?>view/assets/images/tapioca.png" class="card-img-top" alt="Tapioca">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Tapioca de Carne de Sol</h5>
                    <p class="card-text text-muted small mb-3">Tapioca artesanal recheada com carne de sol desfiada e catupiry.</p>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <span class="price fw-bolder fs-5">R$ 22,00</span>
                        <a href="<?= BASE_URL; ?>checkout" class="btn btn-add rounded-pill px-3 fw-medium text-decoration-none"><i class="bi bi-plus-lg me-1"></i> Pedir</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100 menu-card border-0 shadow-sm">
                <div class="card-img-container">
                    <img src="<?= BASE_URL; ?>view/assets/images/cuscuz.png" class="card-img-top" alt="Cuscuz">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Cuscuz com Ovo e Queijo</h5>
                    <p class="card-text text-muted small mb-3">Clássico cuscuz de milho quentinho, acompanhado de ovo frito e queijo.</p>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <span class="price fw-bolder fs-5">R$ 15,50</span>
                        <a href="<?= BASE_URL; ?>checkout" class="btn btn-add rounded-pill px-3 fw-medium text-decoration-none"><i class="bi bi-plus-lg me-1"></i> Pedir</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <div class="card h-100 menu-card border-0 shadow-sm">
                <div class="card-img-container">
                    <img src="<?= BASE_URL; ?>view/assets/images/suco.png" class="card-img-top" alt="Suco">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">Suco de Caju Natural</h5>
                    <p class="card-text text-muted small mb-3">Suco refrescante e natural da fruta, servido bem gelado (500ml).</p>
                    <div class="mt-auto d-flex justify-content-between align-items-center">
                        <span class="price fw-bolder fs-5">R$ 9,00</span>
                        <a href="<?= BASE_URL; ?>checkout" class="btn btn-add rounded-pill px-3 fw-medium text-decoration-none"><i class="bi bi-plus-lg me-1"></i> Pedir</a>
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
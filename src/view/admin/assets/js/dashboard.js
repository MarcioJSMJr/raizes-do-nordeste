document.addEventListener("DOMContentLoaded", function() {

    const modalEditarPrato = document.getElementById('modalEditarPrato');
    
    if (modalEditarPrato) {
        modalEditarPrato.addEventListener('show.bs.modal', function (event) {
        
            const button = event.relatedTarget;
            const nome = button.getAttribute('data-nome');
            const preco = button.getAttribute('data-preco');
            const categoria = button.getAttribute('data-categoria');
            const status = button.getAttribute('data-status');
            const inputNome = modalEditarPrato.querySelector('#editNome');
            const inputPreco = modalEditarPrato.querySelector('#editPreco');
            const selectCategoria = modalEditarPrato.querySelector('#editCategoria');
            const selectStatus = modalEditarPrato.querySelector('#editStatus');
            
            if(inputNome) inputNome.value = nome;
            if(inputPreco) inputPreco.value = preco;
            if(selectCategoria) selectCategoria.value = categoria;
            if(selectStatus) selectStatus.value = status;
        });
    }

});
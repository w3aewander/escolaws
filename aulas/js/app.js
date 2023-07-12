/**
 * Funções AJAX em Javascript Vanill
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @version: 1.0
 */

document.addEventListener('DOMContentLoaded', (evt) => {
    document.forms[0].addEventListener('submit', (ev) => {
        ev.preventDefault();
        //alert('Evento padrão suprimido.');
        let produto = ev.target.descricao.value;
        let id = ev.target.id.value;
        
        if (!produto) {
            alert('Descrição do produto não pode ser vazio.');
            return;
        } else {

            let formData = new FormData();
            formData.append("descricao", produto);
            formData.append("id", id);

            fetch('inserir_registro_parametros.php', { method: 'POST', body: formData })
                .then(r => r.text())
                .then(r => alert(r))
                .then(location.href = "form_produto.php");
        }
    });


});


const excluirProduto = (id) => {

    let confirma = confirm('Tem certeza que deseja excluir este registro?');
    if (confirma) {
        fetch(`excluir_produto.php?id=${id}`)
            .then(r => r.text())
            .then(location.href = 'form_produto.php');
    } else {
        alert('Exclusão abortada.');
    }
};

const editarProduto = (id,descricao) => {

    document.getElementById('id').value = id;
    document.getElementById('descricao').value = descricao;


};

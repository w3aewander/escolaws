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

        if ( ! produto ) {
            alert('Descrição do produto não pode ser vazio.');
            return; 
        } else {
        
        let formData = new FormData();
        formData.append("descricao",produto);
        fetch('inserir_registro_parametros.php',  { method: 'POST', body: formData  })
           .then( r => r.text())
           .then( r => alert( r))
           .then( location.href = "form_html.php");
        }
     });

     
});

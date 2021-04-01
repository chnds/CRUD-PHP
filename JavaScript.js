function alert_js() {
    var razao_social = document.getElementById('razao_social');
    var cnpj = document.getElementById('cnpj');
    var bairro = document.getElementById('bairro');
    var logradouro = document.getElementById('logradouro');
    var numero = document.getElementById('numero');
    var estado = document.getElementById('estado');
    var complemento = document.getElementById('complemento');
    var cep = document.getElementById('cep');
    var telefone = document.getElementById('telefone');

    if (razao_social.value == '' ||  cnpj.value == ''||  bairro.value == ''|| logradouro.value == ''|| numero.value == ''|| estado.value == ''|| complemento.value == ''|| cep.value == ''|| telefone.value == '') {
        alert('Preencha os campos obrigatórios!');
        return false;      
    }
}

function exclude_js(){
   var choice=confirm("Deseja realmente excluir?");
   if(choice==false){
        return false; 
   }
}


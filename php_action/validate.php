<?php

$action=$_POST['action'];
// Variáveis dinâmicas do formulário
foreach ($_POST as $key => $value) {
    // Limpa todas as tags HTML/Limpa os espaços em branco do valor
    $val_input = trim(strip_tags($value) ); // Trim - Retira espaço do final e inicio de uma string 
    //Strig_tags - retira as Tags PHP e HTML 
    if ( empty($val_input)) { // Verifica se existe algum dado nulo
        $erro = 'Preencha todos os campos obrigatórios.';
        if($action=='create'){
            die(header("Location:../index.php?erro=".$erro));
        }else{
            die(header("Location:" . $_SERVER['HTTP_REFERER'] . "&erro=" . $erro));
        }
    }
}
?>
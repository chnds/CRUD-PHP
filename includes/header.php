<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title> Formulário</title>
        <!--CSS-->
        <link type="text/css" rel="stylesheet"  href="style.css"/> 
        <script src="JavaScript.js"></script>
        <!--BOOTSTRAP-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       <!--JQUERY-->
       <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
       <!--JQUERY MASK-->
       <script type="text/javascript" src="jquery.mask.min.js"></script>
       <!--SCRIPT-->
 			<script type="text/javascript">
 			$(document).ready(function(){
 				$("#cnpj").mask("00.000.000.0000-00")
    			$("#cpf").mask("000.000.000-00")
    			$("#cep").mask("00000-000")
    			$("#telefone").mask("(00)00000-0000")
			})	

 			</script>
    </head>
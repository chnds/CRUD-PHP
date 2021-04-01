<?php require_once("BD/db_connect.php");
        $var= $_GET['id'];   
        $sql = "SELECT * FROM usuarios WHERE id = $var";
        $result=$connect->query($sql);
        $usuarios = $result->fetch_assoc(); //Obtém uma linha do resultado como um array associativo
        //print_r($empresa['razao_social']);die;
?>

<?php require_once("BD/db_connect.php");
        $sql = "SELECT * FROM empresas";
        $empresas = mysqli_query($connect,$sql); 
        // echo '<pre>';
        // print_r($empresas);die; 
?>
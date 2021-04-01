<?php require_once("BD/db_connect.php");
        $sql = "SELECT * FROM usuarios";
        $usuarios = mysqli_query($connect,$sql); 
?>
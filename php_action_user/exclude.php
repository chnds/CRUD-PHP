<?php require_once("../BD/db_connect.php");
        $id= $_GET['id'];
        $sql = "DELETE FROM usuarios WHERE id = $id";
        mysqli_query($connect,$sql); 
        if(mysqli_query($connect,$sql)){
                header('Location:../usuarios.php?exclude');
            }
            else{
                header('Location:../usuarios.php?error');
            }
?>
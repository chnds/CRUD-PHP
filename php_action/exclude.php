<?php require_once("../BD/db_connect.php");
        $id= $_GET['id'];
        $sql = "DELETE FROM empresas WHERE id = $id";
        mysqli_query($connect,$sql); 
        if(mysqli_query($connect,$sql)){
        	
                header('Location:../index.php?exclude');
            }
            else{
                header('Location:../index.php?error');
            }
?>
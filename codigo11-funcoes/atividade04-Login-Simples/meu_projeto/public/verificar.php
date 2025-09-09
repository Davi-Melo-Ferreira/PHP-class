<?php
include "usuarios.php";
    function verificar($usuarios){
        foreach($usuarios as $user){
            if($_SESSION['usuario'] == $user['usuario'] && $_SESSION['senha'] == $user['senha']){
                header("Location: meu_projeto/public/restrita.php");
            } else{
                return false;
            }
        }
    } 
?>
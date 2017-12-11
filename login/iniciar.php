<?php
    session_start();
    function verificar_session(){
        if(!isset($_SESSION['login_user'])){
            unset($_SESSION);
            header("location: php/login.php");
        }
    }
?>
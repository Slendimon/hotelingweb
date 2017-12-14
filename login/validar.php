<?php
    session_start();
    include("../php/conexion.php");

    if($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $myusername = mysqli_real_escape_string($con,$_POST['login']);
        $mypassword = base64_encode($_POST['password']);
        
        $sql = "SELECT nombre_usuario,idusuario FROM usuarios 
                WHERE nombre_usuario = '$myusername' and password_usuario = '$mypassword'";

        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $count = mysqli_num_rows($result);
          
        if($count == 1):

            $_SESSION['login_user'] = $myusername;
            $_SESSION['id_login']= $row['idusuario'];
                   
            echo json_encode(array('error' => false, 'id' => $row['idusuario']));
    

        else: 
            echo json_encode(array('error' => true));
            
        endif;
     }
       
    mysqli_close($con);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="../css/login.css">
    
    <title>Login</title>
</head>
<body>  
  <div class="login">
    <h1>Login</h1>
    <form method="POST" action="" id="formig">
      <p><input type="text" name="login" value="" placeholder="Usuario o correo"></p>
      <p><input type="password" name="password" value="" placeholder="Contraseña"></p>
      <p class="remember_me">
        <label>
          <input type="checkbox" name="remember_me" id="remember_me">
          Recordar en este equipo.
        </label>
      </p>
      <p class="submit"><input type="submit" name="commit" value="Entrar" class="btnenviar"></p>
    </form>
  </div>
  <script src="../node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
  <script src="../js/main.js"></script>

</body>
</html>
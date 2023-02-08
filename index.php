<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login</title>
 </head>
  <body>
    <center>
        <main class="form-signin">
        <form>
            <div class="form-floating" >
                <label for="floatingInput">Correo</label>
                <input type="email" class="form-control" id="floatingInput" placeholder="Correo">
            </div>
            <br>
            <div class="form-floating">
                <label for="floatingPassword">Contraseña</label>
                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
            </div>
            <br>
        </form>
        <form action="principal.php">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Enviar</button>
        </form>
        </main>
</center>
  </body>
</html>
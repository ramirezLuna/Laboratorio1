<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Cliente</title>
  </head>
  <body>
  <main class="form-signin">
        <form action="infocliente.php" method = "post">
        <li class="nav-item"><a href="principal.php" class="nav-link active" aria-current="page">principal</a></li>
            <div class="row" class="bi me-2" width="40" height="32">
            <div class="col">
                <label for="">Nombre</label>
                <input id="nom" class ="form-control " type="text" name ="nombre">
            </div>
            <div class="col">
                 <label for="">Apellido</label>
                 <input id="nom" class ="form-control " type="text" name ="apellido">
            </div>
            </div>
            <div class="row" class="bi me-2" width="40" height="32">
            <div class="col">
                <label for="">Direccion</label>
                <input id="nom" class ="form-control " type="text" name ="direccion">
            </div>
            <div class="col">
                 <label for="">Telefono</label>
                 <input id="nom" class ="form-control " type="text" name ="telefono">
            </div>
            <div class="col">
                 <label for="">DUI</label>
                 <input id="nom" class ="form-control " type="text" name ="dui">
            </div>
            </div>
            <br><br>
            <button class ="btn btn-success" type ="submit">Guardar</button>
            <button type="reset" class="btb btn-secundary">Cancelar</button>
        </form>
        </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

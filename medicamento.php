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
        <form action="infomedicamento.php" method = "post">
        <li class="nav-item"><a href="principal.php" class="nav-link active" aria-current="page">Principal</a></li>
            <div class="row" class="bi me-2" >
            <div class="col">
                <label for="">Nombre</label>
                <input id="nom" class ="form-control " type="text" name ="nombre">
            </div>
            <div class="col">
                 <label for="">Apellido</label>
                 <input id="ape" class ="form-control " type="text" name ="apellido">
            </div>
            </div>
            <div class="row" class="bi me-2" >
            <div class="col">
                <label for="">Medicamento</label>
                <input id="medi" class ="form-control " type="text" name ="medicamento">
            </div>
            <div class="col">
                 <label for="">Veterianrio/as</label>
                 <input id="vete" class ="form-control " type="text" name ="veterinario">
            </div>
            <div class="col">
                 <label for="">Fecha Inicio</label>
                 <input id="inicio" class ="form-control " type="text" name ="inicio">
            </div>
            <div class="col">
                 <label for="">Fecha Final</label>
                 <input id="fecha" class ="form-control " type="text" name ="final">
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
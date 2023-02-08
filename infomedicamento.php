<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>metodo get</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <ul class="nav nav-pills">
        <li class="nav-item"><a href="principal.php" class="nav-link active" aria-current="page">Principal</a></li>
      </ul>
  <?php
    $nombre = $_POST['nombre'];
    $apellido  =$_POST['apellido'];
    $medicamento = $_POST['medicamento'];
    $veterinario =$_POST['veterinario'];
    $fecha_inicio =$_POST['inicio'];
    $fecha_final =$_POST['final'];
    ?>
    <table class = "table table-light">
        <tbody>
            <tr>
                <td colspan = "2">Dattos  del cliente</td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><?php echo $nombre ?></td>
            </tr>
            <tr> 
                <td>Apellido</td>
                <td><?php echo $apellido ?></td>
            </tr>
            <tr> 
                <td>Medicamento</td>
                <td><?php echo $medicamento ?></td>
            </tr>
            <tr> 
                <td>Veterinario</td>
                <td><?php echo $veterinario ?></td>
            </tr>
            <tr> 
                <td>Fecha Inicio</td>
                <td><?php echo $fecha_inicio ?></td>
            </tr>
            <tr> 
                <td>Fecha Final</td>
                <td><?php echo $fecha_final ?></td>
            </tr>
        </tbody>
    </table>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
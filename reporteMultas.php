<?php 
    
    $conexion = new mysqli('74.208.110.170','Admin','miguemipilin','chequeo');
  
   
    ?>
  

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,500&family=Gabarito&family=Josefin+Sans:wght@300&family=Staatliches&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital@1&family=DM+Sans:opsz,wght@9..40,500&family=Gabarito&family=Josefin+Sans:wght@300&family=Staatliches&display=swap"
        rel="stylesheet">

        <script>
    function imprimirPagina() {
        window.print();
    }
</script>

</head>

<header>
    <div class="container text-center">
        <div class="row justify-content-md-center">
            <div class="col">
                <img src="img/img1-removebg-preview.png" alt="">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col">
                <p class="display-6 text-center">Colectivas Jaltepec </p>
            </div>
        </div>
        
    </div>
</header>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" >
        <div class="container-fluid">
          <a class="navbar-brand h5" href="reporteMultas.php">Reporte de Multas</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active h6" aria-current="page" href="Index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h6" href="crearHorario.php">Crear Horario</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h6" href="verHorarios.php">Ver Horarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h6" href="reporteRegistros.php">Reporte de LLegadas/Salidas</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  
      <div class="container text-center">
      <form method="post">
        <div class="row">
          <div class="col margen">
            <!-- <input name="fecha" class="form-control form-control-sm" type="date" placeholder="Fecha ('YYYY-MM-DD')" aria-label=".form-control-sm example"> -->
            <label style="color: black;" class ="h4 text-center" for="">Reporte Semanal</label>
          </div>
        </div>
        <div class="row">
          <div class="col">
          <button type="submit" class="btn btn-primary">Generar</button>
          </div>
       </div>
       </form>  
      </div>
   
      
        
      <table class="table">
        <thead>
          <tr id="columnas">
            <th scope="col">ID de multa</th>
            <th scope="col">Unidad</th>
            <th scope="col">Fecha</th>
            <th scope="col">Estado</th>
           
          </tr>
        </thead>
        <tbody>
        <?php
        //Tabla para reportes de multas semanales
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
          //Generar la consulta en la base de datos
          $sql = "SELECT idmultas, unidad, fecha, estadoMulta
          FROM multas
          WHERE YEARWEEK(fecha, 1) = YEARWEEK(CURDATE(), 1);";
          $result = mysqli_query($conexion,$sql);
          //Por cada consulta insertar una fila en la tabla
          while ($mostrar= mysqli_fetch_array($result)) {
            ?>
            <tr id = `$cont`>
              <td><?php echo $mostrar['idmultas']?></td>
              <td><?php echo $mostrar['unidad']?></td>
              <td><?php echo $mostrar['fecha']?></td>
              <td><?php echo $mostrar['estadoMulta']?></td>
            </tr>
            <?php
          }
        }
        ?>
        </tbody>
      </table>

      <div class="container text-center">
        <form>
        <button type="button" class="btn btn-primary" onclick="imprimirPagina()">Imprimir Página</button>
        </form>
      </div>
      <div class="margen">

</div>
</body>
<footer>
  <p class="display-8 text-center">VMDL</p>
</footer>
</html>
<?php 
    
    // $conexion = new mysqli('74.208.110.170','Admin','miguemipilin','chequeo');

    $cont = 0;
    ?>



<DOCTYPE html>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
          <a class="navbar-brand h5" href="crearHorario.php">Creación de Horarios</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active h6" aria-current="page" href="Index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h6" href="verHorarios.php">Consultar Horarios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link h6" href="reporteMultas.php">Reporte de Multas</a>
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
          <div class="col-6">
            <p style = "color: black;" class="display-8 text-center">Coloca la fecha del horario</p>
          </div>
          <div class="col-6">
          <input id="fecha" class="form-control form-control-sm" type="date" placeholder="Fecha ('YYYY-MM-DD')" aria-label=".form-control-sm example">
          </div>
        </div>
       </form>  
      </div>
    
      <table id="tabla" class="table">
        <thead>
          <tr id="columnas">
            <th scope="col">#</th>
            <th scope="col">ID</th>
            <th scope="col">Salida</th>
            <th scope="col">Llegada</th>
            <th scope="col">Ruta</th>
          </tr>
        </thead>
        <tbody>
          <tr id = `$cont`>
            <th scope="row"><?php echo $cont ?></th>
            <td><input class="id__crearHorario" type="number" name="id_crearHorario[]"></td>
            <td><input type="time" name="salida[]"></td>
            <td><input type="time" name="llegada[]"></td>
            <td><input type="text" name="ruta[]"></td>
            <td><button class="eliminarFila btn btn-danger" type="button">Eliminar fila</button></td>
        </tr>
        
        <script>
          var co = 1;
$(document).ready(function(){
 $("#insertarFila").click(function(){
    
   // Crear una nueva fila
   var nuevaFila = `<tr id = ${co}>
            <th scope="row">${co}</th>
            <td><input class="id__crearHorario" type="number" name="id_crearHorario[]"></td>
            <td><input type="time" name="salida[]"></td>
            <td><input type="time" name="llegada[]"></td>
            <td><input type="text" name="ruta[]"></td>
            <td><button class="eliminarFila btn btn-danger" type="button">Eliminar fila</button></td>
        </tr>`;
        co++;
    
  
   
   // Agregar la nueva fila a la tabla
   $("#tabla").append(nuevaFila);
 });

 $("#tabla").on("click", ".eliminarFila", function () {
                $(this).closest("tr").remove();
            });
            //Funcion al darle Click al boton #Guardar
            $("#guardar").click(function(){

              function id(){
                bandera = true;
                var id = document.getElementById("id__crearHorario");
                var exId = /^\d{1,2}$/;

                if(!exId.test(id)){
                  bandera = false
                  alert("ID NO VALIDO");
                }

                if(bandera){
                  console.log("Bien");
                }else{
                  return
                }

              }

              id();



              var filas = $("#tabla tbody tr");
              //Almacenar la fecha para guardar
              var fecha = document.getElementById("fecha").value;
              if(!fecha || fecha.lenght < 3){
          alert("Establezca una fecha para el horario");
          return
        }
        //Para cada filaa...
              filas.each((index, element) => {
                
                //Guardar los datos de las columnas en variables
        var id_crearHorario = $(element).find(".id__crearHorario").val();
        var salida = $(element).find("[name='salida[]']").val();
        var llegada = $(element).find("[name='llegada[]']").val();
        var ruta = $(element).find("[name='ruta[]']").val();
                
        console.log(id_crearHorario, salida, llegada, ruta);
        //Enviar las variables a PHP para ser utilizadas en una consulta SQL
        $.ajax({
            url: 'php/Insert.php',
            type: 'POST',
            data: {
                id_crearHorario: id_crearHorario,
                salida: salida,
                llegada: llegada,
                ruta: ruta,
                fecha: fecha
            },
            success: function(response) {
                // La respuesta del servidor
                
                alert(response);
            },
            error: function() {
                alert('Error al insertar en la base de datos');
            }
        });
              });
          });
  
 

});
</script>
               
        </tbody>
      </table>
      
      <div class="container text-center">
        <form>
          <div class="row">
            <div class="col">
              <button id="insertarFila" type="button" class="btn btn-primary">Nueva fila</button>
            </div>
            <div class="col">
              <button id="guardar" type="button" class="btn btn-primary">Guardar</button>
            </div>
         </div>
         </form>  
        </div>

        <div class="margen">

</div>
<div class="margen">


</body>
<footer>
  <p class="display-8 text-center">VMDL</p>
</footer>
</html>
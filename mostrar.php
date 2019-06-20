<?php

session_start();

if(isset($_SESSION['name'])){

require('conectDB.php');

$con = new ConectorBD('localhost', 'mundocue_userapp', '%Ucp_/MkT#');
$con->initConexion('mundocue_apps');

$tamanoPagina = 10;

$pagina = $_GET["pagina"];
if(!$pagina){
    $inicio = 0;
    $pagina = 1;
}else{
    $inicio = ($pagina - 1) * $tamanoPagina;
}

$consulta = $con->consultar(['reg_busquedas'], ['*']);

$numTotalRegistros = mysqli_num_rows($consulta);

$totalPaginas = ceil($numTotalRegistros / $tamanoPagina);

$consulta1 = $con->consultar(['reg_busquedas'], ['*'], ' ORDER BY id DESC LIMIT '. $inicio .','.$tamanoPagina);

$i = 0;
?>

<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="verfirmas.css"  media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="estilo.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>Registro de Busquedas Laborales</title>

      <script>

          function seeMore(detailsTrunc, detailsWhole){
            $("#"+detailsTrunc).addClass("hide");           
            $("#"+detailsWhole).removeClass("hide");                
          }

         function seeLess(detailsTrunc, detailsWhole){
            $("#"+detailsTrunc).removeClass("hide");
            $("#"+detailsWhole).addClass("hide");                  
          } 



      </script>
      <style>
          .show{
              display: inherit;
          }
          .hide{
              display: none;
          }
      </style>
   </head>
<body>


<div id="superior" style="width:100%; height:10vh; position:relative; background:#295E94; margin:0; padding:0; margin-bottom:1vh;">
        <div style="width:81%; height:100%; position:relative; margin: 0 auto;">
            <div class="logo"><a href="inicio"><img src="img/logowhite.svg" height="100%" title="Universidad de la Cuenca del Plata"/></a></div>
        </div>
    </div>
 


<div class="container">
  <div class="row primera">
    <div class="col s12">
      <h1 class="center-align" style="color: #295E94">Registro de Busquedas Laborales</h1>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <table class="striped white">
          <thead>
            <tr>
              <th data-field="co">Id</th>
              <th data-field="co">Titulo</th>
              <th data-field="cd">Detalles</th>
              <th data-field="p">Requisito1</th>
              <th data-field="r">Requisito2</th>
              <th data-field="fs">Requisito3</th>
              <th data-field="fl">Requisito4</th>
              <th data-field="hs">Requisito5</th>
              <th data-field="hs">Footer</th>
              <th data-field="hl">Fecha</th>
            </tr>
          </thead>

  <tbody id="table-body">
    <?php
          while ($fila = $consulta1->fetch_assoc()){
    ?>
    <tr>
      <td><?php echo $fila['id'] ?> </td>
      <td><?php echo $fila['title'] ?> </td>
      <td ><div id="detailsTrunc<?php echo $i ?>" style="width: 100px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><?php echo $fila['details'] ?> <div><button onclick="seeMore('detailsTrunc<?php echo $i ?>', 'detailsWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px"><img style="width: 50%; height: 10px" src="img/anadir.png" alt="x" /></button></div></div><div class="hide" id="detailsWhole<?php echo $i ?>"><?php echo $fila['details'] ?> <div><button onclick="seeLess('detailsTrunc<?php echo $i ?>', 'detailsWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px" ><img style="width: 50%; height: 10px" src="img/menos.png" alt="x" /></button></div></div> </td>
      <td ><div id="reqOneTrunc<?php echo $i ?>" style="width: 100px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><?php echo $fila['req_one'] ?> <div><button onclick="seeMore('reqOneTrunc<?php echo $i ?>', 'reqOneWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px"><img style="width: 50%; height: 10px" src="img/anadir.png" alt="x" /></button></div></div><div class="hide" id="reqOneWhole<?php echo $i ?>"><?php echo $fila['req_one'] ?> <div><button onclick="seeLess('reqOneTrunc<?php echo $i ?>', 'reqOneWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px" ><img style="width: 50%; height: 10px" src="img/menos.png" alt="x" /></button></div></div> </td>
      <td ><div id="reqTwoTrunc<?php echo $i ?>" style="width: 100px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><?php echo $fila['req_two'] ?> <div><button onclick="seeMore('reqTwoTrunc<?php echo $i ?>', 'reqTwoWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px"><img style="width: 50%; height: 10px" src="img/anadir.png" alt="x" /></button></div></div><div class="hide" id="reqTwoWhole<?php echo $i ?>"><?php echo $fila['req_two'] ?> <div><button onclick="seeLess('reqTwoTrunc<?php echo $i ?>', 'reqTwoWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px" ><img style="width: 50%; height: 10px" src="img/menos.png" alt="x" /></button></div></div> </td>
      <td ><div id="reqThreeTrunc<?php echo $i ?>" style="width: 100px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><?php echo $fila['req_three'] ?> <div><button onclick="seeMore('reqThreeTrunc<?php echo $i ?>', 'reqThreeWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px"><img style="width: 50%; height: 10px" src="img/anadir.png" alt="x" /></button></div></div><div class="hide" id="reqThreeWhole<?php echo $i ?>"><?php echo $fila['req_three'] ?> <div><button onclick="seeLess('reqThreeTrunc<?php echo $i ?>', 'reqThreeWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px" ><img style="width: 50%; height: 10px" src="img/menos.png" alt="x" /></button></div></div> </td>
      <td ><div id="reqFourTrunc<?php echo $i ?>" style="width: 100px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><?php echo $fila['req_four'] ?> <div><button onclick="seeMore('reqFourTrunc<?php echo $i ?>', 'reqFourWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px"><img style="width: 50%; height: 10px" src="img/anadir.png" alt="x" /></button></div></div><div class="hide" id="reqFourWhole<?php echo $i ?>"><?php echo $fila['req_four'] ?> <div><button onclick="seeLess('reqFourTrunc<?php echo $i ?>', 'reqFourWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px" ><img style="width: 50%; height: 10px" src="img/menos.png" alt="x" /></button></div></div> </td>
      <td ><div id="reqFiveTrunc<?php echo $i ?>" style="width: 100px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><?php echo $fila['req_five'] ?> <div><button onclick="seeMore('reqFiveTrunc<?php echo $i ?>', 'reqFiveWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px"><img style="width: 50%; height: 10px" src="img/anadir.png" alt="x" /></button></div></div><div class="hide" id="reqFiveWhole<?php echo $i ?>"><?php echo $fila['req_five'] ?> <div><button onclick="seeLess('reqFiveTrunc<?php echo $i ?>', 'reqFiveWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px" ><img style="width: 50%; height: 10px" src="img/menos.png" alt="x" /></button></div></div> </td>
      <td ><div id="footerTrunc<?php echo $i ?>" style="width: 100px; text-overflow:ellipsis; white-space:nowrap; overflow:hidden"><?php echo $fila['footer'] ?> <div><button onclick="seeMore('footerTrunc<?php echo $i ?>', 'footerWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px"><img style="width: 50%; height: 10px" src="img/anadir.png" alt="x" /></button></div></div><div class="hide" id="footerWhole<?php echo $i ?>"><?php echo $fila['footer'] ?> <div><button onclick="seeLess('footerTrunc<?php echo $i ?>', 'footerWhole<?php echo $i ?>')" style="background-color: inherit; border: 0px;width: 30px; height: 30px" ><img style="width: 50%; height: 10px" src="img/menos.png" alt="x" /></button></div></div> </td>
      <td><?php echo $fila['fecha'] ?> </td>
    </tr>
    <?php
    $i++;
  
    }

  
    ?>
  </tbody>

</table>
<p style="text-align: center"><button class="cerrarSesion" ><a href="logout.php">Cerrar Sesion</a></button></p>
</div>
</div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>

<?php

if($totalPaginas > 1){
    for($i=1;$i<=$totalPaginas;$i++){
        if ($pagina == $i)
        echo $pagina . " ";
        else
        echo "<button class=botonPaginas ><a href='mostrar.php?pagina=" . $i . "'>" . $i . "</a></button> ";
    }
}}else{
  Header("Location: login.php");
}

?>
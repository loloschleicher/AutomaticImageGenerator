<?php

require('conectDB.php');

$titulo = $_POST['Titulo'];
$detalles = $_POST['Detalles'];
$reqUno = $_POST['RequisitoUno'];
$reqDos = $_POST['RequisitoDos'];
$reqTres = $_POST['RequisitoTres'];
$reqCuatro = $_POST['RequisitoCuatro'];
//$reqCinco = $_POST['RequisitoCinco'];
$footer = $_POST['Footer'];
$design = $_POST['typeDesign'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link href="http://allfont.es/allfont.css?fonts=pt-sans-narrow" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:900&display=swap" rel="stylesheet">
    <title>Generador de imagen para busquedas laborales</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js" type="text/javascript"></script>   
</head>
<body>
<div class="container" style="margin-top: 500px">
    <div class="row" style="width: 100%">      
            

           
           
            <div class="col-12">        
                <button style="width: 100%;background-color: #3DB55B" type="button" class="btn-secondary; text-align: center"><a style="color: white; text-decoration:none" id="btn-Convert-Html2Image" href="#">Descargar</a></button>
            </div>
      
 








        <div   id="designOn"  style="position: relative; background-color:white;width: 1080px; height: 1080px">
        <div class="row"  style="background-color: white" >
            <img src="img/Recursos/header1.png" alt="" style="width: 100%; height: 35%">                                                             
            <div class="titlePhp"  style="font-family: 'Lato', sans-serif;margin-top: 3%;border: none; width: 85%; color: #989898;text-transform: uppercase; text-align: left; font-size: 102.7px;height: auto;max-height: 220px; word-wrap: break-word; line-height: 100%; margin-left: 7.8%" name="" >
                
            <?php 
       
            echo wordwrap($titulo,13,"<br>\n",TRUE);
            ?>                       
            </div>                                                            
        </div>                
        <div class="row fila2" style="margin-top: -2px">
            <div class="col-auto" style="background-color: white; width: 5.7%">   
            </div>
        <div class="col-auto" style="width: 88.60%; background-color: white; margin-left: 7.6%">
            <div  style="background-color: white; border: none; width: 95%; color: black; text-align: justify;margin-left: -0.5%;font-size: 17.94px;height: auto;word-break:break-word; margin-top: 3.6%; word-spacing: -2.37px" name="" maxlength="100">
                <img src="img/Recursos/objetivos1.png" style="width: 24.5%; height: 20%" alt="">
            </div>                      
            <div id="Card4Detalles" style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width:95%; color: rgb(143, 139, 139); text-align: justify;font-size: 33.5px;height: auto;word-break:break-word; margin-top: 1.3%; word-spacing: -2.37px" name="" maxlength="100">
                <?php print_r($detalles); ?>
            </div>
                                                <br>
                                                <div id="Card4Requisitos"  style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width: 95%; color: rgb(143, 139, 139);font-size: 33.5px;height: 300px;word-break: break-word; margin-top: 2%;word-spacing: -2.37px" name="" maxlength="100">
                                                   <img style="margin-bottom: 1%;width: 26%; height: 21.5%" src="img/Recursos/requisitos1.png" alt=""> 
                                                   <div  >
                                                    <img id="1point1"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                        <?php print_r($reqUno); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="1point2"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                    <?php print_r($reqDos); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="1point3"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqTres); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="1point4"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqCuatro); ?>
                                                    </span>
                                                   </div>
                                                                                 
                                                </div>
                                                
                                            </div>
                                            <div class="col-auto" style="background-color:white; width: 5.7%" >
                                               
                                            </div>             
                                        </div>
                                        <div class="row" id="footer" style="position: absolute; top: 85%;margin-left:-86px">
                                            <div class="row">
                                                <img style="width: 85%;margin-left: 185px; height: 85%" src="img/Recursos/linea.png" alt="">
                                            </div>
                                          
                                       <div class="row" style="width:77%;margin-top: 28px;margin-left: 210px; ">
                                       <div class="col-1" style="margin-left:-60px;background-color: white;color:rgb(143, 139, 139);height: auto">                       
                                                <img style="width: 70px; height: 60px; " src="img/Recursos/maletin.png" alt="" > 
                                                </div>
                                                <div class="col-auto" style="width: 90%; display: table;margin-top: -15px;margin-left:20px;line-height:150%;background-color: white;color:rgb(143, 139, 139); text-align: left;word-break:break-word;font-size: 28px; height: auto">
                                                <span style="font-family: 'PT Sans Narrow', sans-serif;display: table-cell; vertical-align: middle; height: 80px;"  id="Card4Footer">
                                                    <?php print_r($footer); ?>
                                                    </span>
                                                </div>
                                       </div>
                                               
                
                                            
                                                                     
                                        </div>
                                       
                                       
                                    </div>











        <div   id="designTw"  style="position: relative; background-color:white;width: 1080px; height: 1080px">
        <div class="row"  style="background-color: white" >
            <img src="img/Recursos/header2.png" alt="" style="width: 100%; height: 35%">                                                             
            <div class="titlePhp"  style="font-family: 'Lato', sans-serif;margin-top: 3%;border: none; width: 85%; color: #989898;text-transform: uppercase; text-align: left; font-size: 102.7px;height: auto;max-height: 220px; word-wrap: break-word; line-height: 100%; margin-left: 7.8%" name="" >
            <?php 
       
                echo wordwrap($titulo,13,"<br>\n",TRUE);
            ?>                           
            </div>                                                            
        </div>                
        <div class="row fila2" style="margin-top: -2px">
            <div class="col-auto" style="background-color: white; width: 5.7%">   
            </div>
        <div class="col-auto" style="width: 88.60%; background-color: white; margin-left: 7.6%">
            <div  style="background-color: white; border: none; width: 95%; color: black; text-align: justify;margin-left: -0.5%;font-size: 17.94px;height: auto;word-break:break-word; margin-top: 3.6%; word-spacing: -2.37px" name="" maxlength="100">
                <img src="img/Recursos/objetivos2.png" style="width: 24.5%; height: 20%" alt="">
            </div>                      
            <div id="Card4Detalles" style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width:95%; color: rgb(143, 139, 139); text-align: justify;font-size: 33.5px;height: auto;word-break:break-word; margin-top: 1.3%; word-spacing: -2.37px" name="" maxlength="100">
                <?php print_r($detalles); ?>
            </div>
                                                <br>
                                                <div id="Card4Requisitos"  style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width: 95%; color: rgb(143, 139, 139);font-size: 33.5px;height: 300px;word-break: break-word; margin-top: 2%;word-spacing: -2.37px" name="" maxlength="100">
                                                   <img style="margin-bottom: 1%;width: 26%; height: 21.5%" src="img/Recursos/requisitos2.png" alt=""> 
                                                   <div  >
                                                    <img id="2point1"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                        <?php print_r($reqUno); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="2point2"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                    <?php print_r($reqDos); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="2point3"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqTres); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="2point4"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqCuatro); ?>
                                                    </span>
                                                   </div>
                                                                               
                                                </div>
                                                
                                            </div>
                                            <div class="col-auto" style="background-color:white; width: 5.7%" >
                                               
                                            </div>             
                                        </div>
                                        <div class="row" id="footer" style="position: absolute; top: 85%;margin-left:-86px">
                                            <div class="row">
                                                <img style="width: 85%;margin-left: 185px; height: 85%" src="img/Recursos/linea.png" alt="">
                                            </div>
                                          
                                       <div class="row" style="width:77%;margin-top: 28px;margin-left: 210px; ">
                                       <div class="col-1" style="margin-left:-60px;background-color: white;color:rgb(143, 139, 139);height: auto">                       
                                                <img style="width: 70px; height: 60px; " src="img/Recursos/maletin.png" alt="" > 
                                                </div>
                                                <div class="col-auto" style="width: 90%;display: table;margin-top: -15px;margin-left:20px;line-height:150%;background-color: white;color:rgb(143, 139, 139); text-align: left;word-break:break-word;font-size: 28px; height: auto">
                                                <span style="font-family: 'PT Sans Narrow', sans-serif;display: table-cell; vertical-align: middle; height: 80px;" id="Card4Footer">
                                                    <?php print_r($footer); ?>
                                                    </span>
                                                </div>
                                       </div>
                                               
                
                                            
                                                                     
                                        </div>
                                       
                                       
                                    </div>










        
        <div   id="designThre"  style="position: relative; background-color:white;width: 1080px; height: 1080px">
        <div class="row"  style="background-color: white" >
            <img src="img/Recursos/header3.png" alt="" style="width: 100%; height: 35%">                                                             
            <div class="titlePhp"  style="font-family: 'Lato', sans-serif;margin-top: 3%;border: none; width: 85%; color: #989898;text-transform: uppercase; text-align: left; font-size: 102.7px;height: auto;max-height: 220px; word-wrap: break-word; line-height: 100%; margin-left: 7.8%" name="" >
            <?php 
       
                echo wordwrap($titulo,13,"<br>\n",TRUE);
            ?>                            
            </div>                                                            
        </div>                
        <div class="row fila2" style="margin-top: -2px">
            <div class="col-auto" style="background-color: white; width: 5.7%">   
            </div>
        <div class="col-auto" style="width: 88.60%; background-color: white; margin-left: 7.6%">
            <div  style="background-color: white; border: none; width: 95%; color: black; text-align: justify;margin-left: -0.5%;font-size: 17.94px;height: auto;word-break:break-word; margin-top: 3.6%; word-spacing: -2.37px" name="" maxlength="100">
                <img src="img/Recursos/objetivos3.png" style="width: 24.5%; height: 20%" alt="">
            </div>                      
            <div id="Card4Detalles" style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width:95%; color: rgb(143, 139, 139); text-align: justify;font-size: 33.5px;height: auto;word-break:break-word; margin-top: 1.3%; word-spacing: -2.37px" name="" maxlength="100">
                <?php print_r($detalles); ?>
            </div>
                                                <br>
                                                <div id="Card4Requisitos"  style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width: 95%; color: rgb(143, 139, 139);font-size: 33.5px;height: 300px;word-break: break-word; margin-top: 2%;word-spacing: -2.37px" name="" maxlength="100">
                                                   <img style="margin-bottom: 1%;width: 26%; height: 21.5%" src="img/Recursos/requisitos3.png" alt=""> 
                                                   <div  >
                                                    <img id="3point1"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                        <?php print_r($reqUno); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="3point2"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                    <?php print_r($reqDos); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="3point3"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqTres); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="3point4"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqCuatro); ?>
                                                    </span>
                                                   </div>
                                                                                
                                                </div>
                                                
                                            </div>
                                            <div class="col-auto" style="background-color:white; width: 5.7%" >
                                               
                                            </div>             
                                        </div>
                                        <div class="row" id="footer" style="position: absolute; top: 85%;margin-left:-86px">
                                            <div class="row">
                                                <img style="width: 85%;margin-left: 185px; height: 85%" src="img/Recursos/linea.png" alt="">
                                            </div>
                                          
                                       <div class="row" style="width:77%;margin-top: 28px;margin-left: 210px; ">
                                       <div class="col-1" style="margin-left:-60px;background-color: white;color:rgb(143, 139, 139);height: auto">                       
                                                <img style="width: 70px; height: 60px; " src="img/Recursos/maletin.png" alt="" > 
                                                </div>
                                                <div class="col-auto" style="width: 90%;display: table;margin-top: -15px;margin-left:20px;line-height:150%;background-color: white;color:rgb(143, 139, 139); text-align: left;word-break:break-word;font-size: 28px; height: auto">
                                                <span style="font-family: 'PT Sans Narrow', sans-serif;display: table-cell; vertical-align: middle; height: 80px;" id="Card4Footer">
                                                    <?php print_r($footer); ?>
                                                    </span>
                                                </div>
                                       </div>
                                               
                
                                            
                                                                     
                                        </div>
                                       
                                       
                                    </div>






       



       
        <div   id="designFou"  style="position: relative; background-color:white;width: 1080px; height: 1080px">
        <div class="row"  style="background-color: white" >
            <img src="img/Recursos/header4.png" alt="" style="width: 100%; height: 35%">                                                             
            <div class="titlePhp"  style="font-family: 'Lato', sans-serif;margin-top: 3%;border: none; width: 85%; color: #989898;text-transform: uppercase; text-align: left; font-size: 102.7px;height: auto;max-height: 220px; word-wrap: break-word; line-height: 100%; margin-left: 7.8%" name="" >
            <?php 
       
                 echo wordwrap($titulo,13,"<br>\n",TRUE);
            ?>                            
            </div>                                                            
        </div>                
        <div class="row fila2" style="margin-top: -2px">
            <div class="col-auto" style="background-color: white; width: 5.7%">   
            </div>
        <div class="col-auto" style="width: 88.60%; background-color: white; margin-left: 7.6%">
            <div  style="background-color: white; border: none; width: 95%; color: black; text-align: justify;margin-left: -0.5%;font-size: 17.94px;height: auto;word-break:break-word; margin-top: 3.6%; word-spacing: -2.37px" name="" maxlength="100">
                <img src="img/Recursos/objetivos4.png" style="width: 24.5%; height: 20%" alt="">
            </div>                      
            <div id="Card4Detalles" style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width:95%; color: rgb(143, 139, 139); text-align: justify;font-size: 33.5px;height: auto;word-break:break-word; margin-top: 1.3%; word-spacing: -2.37px" name="" maxlength="100">
                <?php print_r($detalles); ?>
            </div>
                                                <br>
                                                <div id="Card4Requisitos"  style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width: 95%; color: rgb(143, 139, 139);font-size: 33.5px;height: 300px;word-break: break-word; margin-top: 2%;word-spacing: -2.37px" name="" maxlength="100">
                                                   <img style="margin-bottom: 1%;width: 26%; height: 21.5%" src="img/Recursos/requisitos4.png" alt=""> 
                                                   <div  >
                                                    <img id="4point1"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                        <?php print_r($reqUno); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="4point2"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%">
                                                    <?php print_r($reqDos); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="4point3"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqTres); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="4point4"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%">
                                                   <?php print_r($reqCuatro); ?>
                                                    </span>
                                                   </div>
                                                                              
                                                </div>
                                                
                                            </div>
                                            <div class="col-auto" style="background-color:white; width: 5.7%" >
                                               
                                            </div>             
                                        </div>
                                        <div class="row" id="footer" style="position: absolute; top: 85%;margin-left:-86px">
                                            <div class="row">
                                                <img style="width: 85%;margin-left: 185px; height: 85%" src="img/Recursos/linea.png" alt="">
                                            </div>
                                          
                                       <div class="row" style="width:77%;margin-top: 28px;margin-left: 210px; ">
                                       <div class="col-1" style="margin-left:-60px;background-color: white;color:rgb(143, 139, 139);height: auto">                       
                                                <img style="width: 70px; height: 60px; " src="img/Recursos/maletin.png" alt="" > 
                                                </div>
                                                <div class="col-auto" style="width: 90%;display: table;margin-top: -15px;margin-left:20px;line-height:150%;background-color: white;color:rgb(143, 139, 139); text-align: left;word-break:break-word;font-size: 28px; height: auto">
                                                <span style="font-family: 'PT Sans Narrow', sans-serif;display: table-cell; vertical-align: middle; height: 80px;" id="Card4Footer">
                                                    <?php print_r($footer); ?>
                                                    </span>
                                                </div>
                                       </div>
                                               
                
                                            
                                                                     
                                        </div>
                                       
                                       
                                    </div>








            
        <div   id="designFiv"  style="position: relative; background-color:white;width: 1080px; height: 1080px">
        <div class="row"  style="background-color: white" >
            <img src="img/Recursos/header5.png" alt="" style="width: 100%; height: 35%">                                                             
            <div class="titlePhp"  style="font-family: 'Lato', sans-serif;margin-top: 3%;border: none; width: 85%; color: #989898;text-transform: uppercase; text-align: left; font-size: 102.7px;height: auto;max-height: 220px; word-wrap: break-word; line-height: 100%; margin-left: 7.8%" name="" >
            <?php 
       
                echo wordwrap($titulo,13,"<br>\n",TRUE);
            ?>                           
            </div>                                                            
        </div>                
        <div class="row fila2" style="margin-top: -2px">
            <div class="col-auto" style="background-color: white; width: 5.7%">   
            </div>
        <div class="col-auto" style="width: 88.60%; background-color: white; margin-left: 7.6%">
            <div  style="background-color: white; border: none; width: 95%; color: black; text-align: justify;margin-left: -0.5%;font-size: 17.94px;height: auto;word-break:break-word; margin-top: 3.6%; word-spacing: -2.37px" name="" maxlength="100">
                <img src="img/Recursos/objetivos5.png" style="width: 24.5%; height: 20%" alt="">
            </div>                      
            <div id="Card4Detalles" style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width:95%; color: rgb(143, 139, 139); text-align: justify;font-size: 33.5px;height: auto;word-break:break-word; margin-top: 1.3%; word-spacing: -2.37px" name="" maxlength="100">
                <?php print_r($detalles); ?>
            </div>
                                                <br>
                                                <div id="Card4Requisitos"  style="font-family: 'PT Sans Narrow', sans-serif;line-height: 135%;background-color: white; border: none; width: 95%; color: rgb(143, 139, 139);font-size: 33.5px;height: 300px;word-break: break-word; margin-top: 2%;word-spacing: -2.37px" name="" maxlength="100">
                                                   <img style="margin-bottom: 1%;width: 26%; height: 21.5%" src="img/Recursos/requisitos5.png" alt=""> 
                                                   <div  >
                                                    <img id="5point1"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%" >
                                                        <?php print_r($reqUno); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="5point2"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                    <span style="margin-left: .2%" >
                                                    <?php print_r($reqDos); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="5point3"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%" >
                                                   <?php print_r($reqTres); ?>
                                                    </span>
                                                   </div>
                                                   <div>
                                                   <img id="5point4"  style="width: 1%; height:1%" src="img/Recursos/punto.png" alt="">
                                                   <span style="margin-left: .2%"  >
                                                   <?php print_r($reqCuatro); ?>
                                                    </span>
                                                   </div>
                                                                              
                                                </div>
                                                
                                            </div>
                                            <div class="col-auto" style="background-color:white; width: 5.7%" >
                                               
                                            </div>             
                                        </div>
                                        <div class="row" id="footer" style="position: absolute; top: 85%;margin-left:-86px">
                                            <div class="row">
                                                <img style="width: 85%;margin-left: 185px; height: 85%" src="img/Recursos/linea.png" alt="">
                                            </div>
                                          
                                       <div class="row" style="width:77%;margin-top: 28px;margin-left: 210px; ">
                                       <div class="col-1" style="margin-left:-60px;background-color: white;color:rgb(143, 139, 139);height: auto">                       
                                                <img style="width: 70px; height: 60px; " src="img/Recursos/maletin.png" alt="" > 
                                                </div>
                                                <div class="col-auto" style="width: 90%;display: table;margin-top: -15px;margin-left:20px;line-height:150%;background-color: white;color:rgb(143, 139, 139); text-align: left;word-break:break-word;font-size: 28px; height: auto">
                                                <span style="font-family: 'PT Sans Narrow', sans-serif;display: table-cell; vertical-align: middle; height: 80px;" id="Card4Footer">
                                                    <?php print_r($footer); ?>
                                                    </span>
                                                </div>
                                       </div>
                                               
                
                                            
                                                                     
                                        </div>
                                       
                                       
                                    </div>













        
        </div>
       
    </div> 
    
    <script>
        if('<?php echo $reqUno?>' == ""){
    $("#1point1").addClass("ocultar");
    $("#2point1").addClass("ocultar");
    $("#3point1").addClass("ocultar");
    $("#4point1").addClass("ocultar");
   
        }
if('<?php echo $reqDos?>' == ""){
    $("#1point2").addClass("ocultar");
    $("#2point2").addClass("ocultar");
    $("#3point2").addClass("ocultar");
    $("#4point2").addClass("ocultar");
 
}
if('<?php echo $reqTres?>' == ""){
    $("#1point3").addClass("ocultar");
    $("#2point3").addClass("ocultar");
    $("#3point3").addClass("ocultar");
    $("#4point3").addClass("ocultar");
    //$("#5point3").addClass("ocultar");
}
if('<?php echo $reqCuatro?>' == ""){
    $("#1point4").addClass("ocultar");
    $("#2point4").addClass("ocultar");
    $("#3point4").addClass("ocultar");
    $("#4point4").addClass("ocultar");
    //$("#5point4").addClass("ocultar");
}
/*if('' == ""){
    $("#1point5").addClass("ocultar");
    $("#2point5").addClass("ocultar");
    $("#3point5").addClass("ocultar");
    $("#4point5").addClass("ocultar");
   $("#5point5").addClass("ocultar");
}*/



$(document).ready(function(){


    
if ('<?php echo $design?>' == "design1"){
var element = $("#designOn"); 
console.log(element);
var getCanvas; 
html2canvas(element, {
    onrendered: function (canvas) {
    getCanvas = canvas;
            }
         });

setTimeout(function(){ 
var imgageData = getCanvas.toDataURL("image/png", 1);
var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
$("#btn-Convert-Html2Image").attr("download", "busqueda_<?php echo $titulo?>.png").attr("href", newData);
document.getElementById('btn-Convert-Html2Image').dispatchEvent(new MouseEvent("click"));
}, 100);      

}



if ('<?php echo $design?>' == "design2"){
var element = $("#designTw"); 
console.log(element);
var getCanvas; 
html2canvas(element, {
    onrendered: function (canvas) {
    getCanvas = canvas;
            }
         });

setTimeout(function(){ 
var imgageData = getCanvas.toDataURL("image/png", 1);
var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
$("#btn-Convert-Html2Image").attr("download", "busqueda_<?php echo $titulo?>.png").attr("href", newData);
document.getElementById('btn-Convert-Html2Image').dispatchEvent(new MouseEvent("click"));
}, 100);      

}

if ('<?php echo $design?>' == "design3"){
var element = $("#designThre"); 
console.log(element);
var getCanvas; 
html2canvas(element, {
    onrendered: function (canvas) {
    getCanvas = canvas;
            }
         });

setTimeout(function(){ 
var imgageData = getCanvas.toDataURL("image/png", 1);
var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
$("#btn-Convert-Html2Image").attr("download", "busqueda_<?php echo $titulo?>.png").attr("href", newData);
document.getElementById('btn-Convert-Html2Image').dispatchEvent(new MouseEvent("click"));
}, 100);      

}

if ('<?php echo $design?>' == "design4"){
var element = $("#designFou"); 
console.log(element);
var getCanvas; 
html2canvas(element, {
    onrendered: function (canvas) {
    getCanvas = canvas;
            }
         });

setTimeout(function(){ 
var imgageData = getCanvas.toDataURL("image/png", 1);
var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
$("#btn-Convert-Html2Image").attr("download", "busqueda_<?php echo $titulo?>.png").attr("href", newData);
document.getElementById('btn-Convert-Html2Image').dispatchEvent(new MouseEvent("click"));
}, 100);      

}

if ('<?php echo $design?>' == "design5"){
var element = $("#designFiv"); 
console.log(element);
var getCanvas; 
html2canvas(element, {
    onrendered: function (canvas) {
    getCanvas = canvas;
            }
         });

setTimeout(function(){ 
var imgageData = getCanvas.toDataURL("image/png", 1);
var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
$("#btn-Convert-Html2Image").attr("download", "busqueda_<?php echo $titulo?>.png").attr("href", newData);
document.getElementById('btn-Convert-Html2Image').dispatchEvent(new MouseEvent("click"));
}, 100);      

}

});

</script>

<style>
    

    .ocultar{
        display: none;
    }


</style>
</body>

</html>
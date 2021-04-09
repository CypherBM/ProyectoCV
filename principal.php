<!DOCTYPE html>
<html lang="en">
<?php

	include_once("phpFiles/sentenciasSql.php");	
	

	if(!isset($_SESSION["usuario"])){
		header('Location: login.php');
	}else{
	
?>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery35.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">	
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="styles/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="styles/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="icon/icono.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="styles/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

	<link rel="icon" href="icon/icono.png" type="image/gif" />

	<link rel="stylesheet" type="text/css" href="style.css">
	
    <script type="text/javascript">
    $(document).ready(function(){
        $("#nose").click(function(){
            if($("#nose").val()=="artista"){
                $("#myModal").modal('show');   
            }else{
                alert("no se puede ingrsar musica");             
            }

        });
        $("#salir").click(function(){
		var envioDatos="";
				
					$.ajax({
						type : 'POST',       //necesitamos definir como vamos a pasar los datos
						data : envioDatos,   // enviar la variable o los datos que requiera php
						url  : 'cerrar.php',
						success: function(requerimiento){  // en versiones de jQuery responseTex
						if((requerimiento)=="1"){
							window.open("principal.php","_self");
						}
					}	

		  });
	});
    
    });
    
    </script>
    

</head>
<body>
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h3 class="modal-title col-11 text-center"> Ingreso de musica</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <embed src="crud.php" width="100%" height="250px" >
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">          		
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>



<input type="button" class="btn btn-danger" data-toggle="modal"  id="nose"  value="<?php
echo determinarRol();
    ?>">
    
<a class="btn btn-danger" href="login.php" id="salir">salir</a>

</body>
</html>
<?php
}
?>
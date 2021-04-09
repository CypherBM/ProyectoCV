<!DOCTYPE html>
<html>
<head>
	<title>Login</title>   
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
			$("#ingresar").click(function(){
				var usuario=$("#usuario").val();
				var clave=$("#clave").val();
			if(usuario==""||clave==""){
				$('#myModal2').modal('show');
			}else{
				var envioDatos = 'action=comprobarUsuario&usuario='+usuario+		
										'&clave='+clave;

					$.ajax({
						type : 'POST',       //necesitamos definir como vamos a pasar los datos
						data : envioDatos,   // enviar la variable o los datos que requiera php
						url  : 'phpFiles/sentenciasSql.php',
						success: function(requerimiento){  // en versiones de jQuery responseText		
              
							if((requerimiento)==1)
							{					
								window.location.replace("principal.php");
							}else if((requerimiento)!==1){
								$('#myModal3').modal('show');
							}
						}
					});
			}
			});
		});
	</script>
</head>
<body background="images/img1.jpg" style="background-color: #e5e6f0;">

<div class="modal fade" id="myModal2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h4 class="modal-title col-11 text-center"> Aviso</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Falta el campo usuario y/o contraseña <!-- Texto, componentes, formulario completo -->
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">	
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h4 class="modal-title col-11 text-center"> Aviso</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        Los datos ingresados son incorrectos <!-- Texto, componentes, formulario completo -->
        </div>
        
      </div>
    </div>
  </div>
		
	<form enctype="multipart/form-data" style="
   text-align: center;
   vertical-align:center;
   margin-top:10%;
   display: flex;
  justify-content: center;
  align-items: center;">
		<table >
		<tr>
        <td>
        <img src="images/logo-baner.png" alt="logo" style="height:100px;" />
        </td>
        </tr>	
			<tr>
				<td><input type="text" name="usuario" id="usuario" placeholder="ID usuario" style="width: 60%;
    padding: 16px 32px;
    font-size: 16px;
    margin: 8px;
    border: 1px solid #f7ebdd;
    border-radius: 5px;
    margin-top: 10px;
    text-align: left;
    color: #333;
    background: rgb(255, 255, 255);  width: 300px;"> </td>
			</tr>
			<tr>
				<td><input type="password" name="clave" id="clave" placeholder="Contraseña" style="width: 60%;
    padding: 16px 32px;
    font-size: 16px;
    margin: 8px;
    border: 1px solid #f7ebdd;
    border-radius: 5px;
    margin-top: 10px;
    text-align: left;
    color: #333;
    background: rgb(255, 255, 255); width: 300px;"><br></br></td>
			</tr>
			<tr>			
				<th colspan="2"><input type="button" name="ingresar" id="ingresar" value="Iniciar sesion" style="background-color: #cf2323;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    line-height: 48px;
    padding: 0 16px;
    width: 150px;
	color: #fff;">&nbsp;<input type="button" name="registrar" id="registrar" value="Registrar" onclick= "location.href='registro.php'" style="background-color: #cf2323;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    line-height: 48px;
    padding: 0 16px;
    width: 150px;
	color: #fff;"> </th>
			</tr>
		</table>
		</form>
	</div>



</body>
</html>
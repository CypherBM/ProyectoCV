<!DOCTYPE html>
<html>
<head>
	<title>Login</title>    
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="css/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>	
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery35.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){	
			$("#ingresar").click(function(){
				var usuario=$("#usuario").val();
				var clave=$("#clave").val();
			if(usuario==""||clave==""){
				alert("faltan datos");
			}else{
				var envioDatos = 'action=comprobarUsuario&usuario='+usuario+		
										'&clave='+clave;
					alert(envioDatos);
					$.ajax({
						type : 'POST',       //necesitamos definir como vamos a pasar los datos
						data : envioDatos,   // enviar la variable o los datos que requiera php
						url  : 'sentenciasSql.php',
						success: function(requerimiento){  // en versiones de jQuery responseText		
              alert(requerimiento);
							if((requerimiento)==1)
							{					
								alert("hecho");
							}else if((requerimiento)!==1){
								alert("contraseña o usuario incorrectos");
							}
						}
					});
			}
			});
		});
	</script>
</head>
<body background="images/background.jpg" style="background-color: #e5e6f0;">

		
	<form style="
   text-align: center;
   vertical-align:center;
   margin-top:14%;
   display: flex;
  justify-content: center;
  align-items: center;">
		<table >
        <div style="color:#ff8a27; font-face:Helvetica; font-size:'7';"><h1>Solo basta con <br> registrarse y listo</h1>
        </div>
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
    background: rgb(255, 255, 255); width: 300px;"> </td>
			</tr>
			<tr>			
				<th colspan="2"><input type="button" name="ingresar" id="ingresar" value="Iniciar sesion" style="background-color: #1877f2;
    border: none;
    border-radius: 6px;
    font-size: 20px;
    line-height: 48px;
    padding: 0 16px;
    width: 150px;
	color: #fff;">&nbsp;<input type="button" name="registrar" id="registrar" value="Registrar" onclick= "location.href='registro.php'" style="background-color: #1877f2;
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
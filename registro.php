<!DOCTYPE html>
<html>
<head>
	<title>Loguin</title>    
    <link rel="StyleSheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>	
    <script type="text/javascript" src="js/jquery35.js">
		$(document).ready(function(){	
			$("#ingresar").click(function(){
				var cedula = $("#usuario").val();
				var clave = $("#clave").val();
				if(cedula=="" || clave=="")
				{
					alert("Falta datos");							 
				}
				else
				{
					var envioDatos = 'action=comprobarUsuario&usuario='+cedula+		
										'&clave='+clave;
					//alert(envioDatos);
					$.ajax({
						type : 'POST',       //necesitamos definir como vamos a pasar los datos
						data : envioDatos,   // enviar la variable o los datos que requiera php
						url  : 'senteciasSql.php',
						success: function(requerimiento){  // en versiones de jQuery responseText
						
							if((requerimiento)==1)
							{					
								window.open("principalFacebook.php","_self");
							}else if((requerimiento)!==1){
								alert("contraseña o usuario incorrectos")
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
				<td><input type="text" name="clave" id="clave" placeholder="Contraseña" style="width: 60%;
    padding: 16px 32px;
    font-size: 16px;
    margin: 8px;
    border: 1px solid #f7ebdd;
    border-radius: 5px;
    margin-top: 10px;
    text-align: left;
    color: #333;
    background: rgb(255, 255, 255); width: 300px;"> </td>
    <tr>
    <td>
    <select name="tipo" id="tipo" style="width: 60%;
    padding: 16px 32px;
    font-size: 16px;
    margin: 8px;
    border: 1px solid #f7ebdd;
    border-radius: 5px;
    margin-top: 10px;
    text-align: left;
    color: #333;
    background: rgb(255, 255, 255); width: 300px; font-face:Helvetica;">
    <option value="artista">artista</option>
    <option value="usuario">usuario</option>
    </select>
    </td>
    </tr>
			</tr>
			<tr>				
				<th colspan="1"><input type="button" name="registrar" id="registrar" value="Registrar" style="background-color: #1877f2;
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
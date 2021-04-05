<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>    
    <link rel="StyleSheet" href="css/bootstrap/css/bootstrap.min.css" type="text/css">
    <script src="css/bootstrap/js/bootstrap.min.js"></script>	
    <script src="js/jquery35.js"></script>
    <script type="text/javascript" >
		$(document).ready(function(){	
			$("#registrar").click(function(){
				var usuario = $("#usuario").val();
				var clave = $("#clave").val();
                var clave1 = $("#clave1").val();
                var nombre = $("#nombre").val();
                var correo = $("#correo").val();
                var rol = $("select#tipo").val();
                var genero = $("select#gen").val();
				if(usuario=="" || clave==""||clave1==""||nombre==""||correo=="")
				{
					alert("Falta datos");							 
				}else{
                    if(($("#clave").val())!=($("#clave1").val())){
                        $("#clave").focus();
                    }else if($("select#tipo").val()=="0"){
                        $("select#tipo").focus();
                    }else if($("select#gen").val()=="0"){
                        $("select#gen").focus();
                    }else{
                    var envioDatos = 'action=registrarUsuario&usuario='+usuario+		
										'&clave='+clave+
                                        '&nombre='+nombre+
                                        '&correo='+correo+
                                        '&rol='+rol+
                                        '&genero='+genero;
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
								alert("algun campo esta mal ingresado")
							}
						}
					});	


                    }
                }

			});
		});
	</script>
    
</head>
<body background="images/background.jpg" style="background-color: #e5e6f0;">
		
	<form style="
   text-align: center;
   vertical-align:center;
   margin-top:6%;
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
    background: rgb(255, 255, 255); width: 300px;">
    </td>
    <tr>
    <tr>
	<td><input type="password" name="clave1" id="clave1" placeholder="Repita la Contraseña" style="width: 60%;
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
    <tr>
				<td><input type="text" name="nombre" id="nombre" placeholder="Nombre" style="width: 60%;
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
				<td><input type="text" name="correo" id="correo" placeholder="Correo electronico" style="width: 60%;
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
    <option value="0">seleccione una Rol</option>
    <option value="artista">artista</option>
    <option value="usuario">usuario</option>
    </select>
    </td>
    </tr>
    <tr>
    <td>
    <select name="gen" id="gen" style="width: 60%;
    padding: 16px 32px;
    font-size: 16px;
    margin: 8px;
    border: 1px solid #f7ebdd;
    border-radius: 5px;
    margin-top: 10px;
    text-align: left;
    color: #333;
    background: rgb(255, 255, 255); width: 300px; font-face:Helvetica;">
    <option value="0">seleccione una genero</option>
    <option value="m">Masculino</option>
    <option value="f">Femenino</option>
    <option value="i">Otros</option>
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
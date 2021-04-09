<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<script src="js/jquery35.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="css/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>	
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	

	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script type="text/javascript">		
		$(document).ready(function(){
			$("#si").click(function(){
		
				if($("#nombre").val()==""){
					$('#myModal3').modal('show')
				}else{
          var nombre = $("#nombre").val();
        }
          var descripcion=$("#descripcion").val();
        
				

				 // capturamos el contenido del input tipo file

				var formulario = new FormData();        
				formulario.append('nombre',nombre);		
				formulario.append('descripcion',descripcion);
       // formulario.append('usuario',usuario);
				formulario.append('action','InsertarPlaylist');
        
				//var respuesta = confirm('¿Está seguro que desea guardar los datos?');
				
				//if(respuesta)
				//{					
				/*	var envioDatos = 'action=InsertarUsuarios&cedula='+cedula+
										'&nombre='+nombre+
										'&clave='+clave+
										'&telefono='+telefono+
										'&direccion='+direccion;*/
					//alert(envioDatos);
					$.ajax({
						type : 'POST',       //necesitamos definir como vamos a pasar los datos
						contentType: false,         // verificar el contenido que se pretende pasar por ajax (true, false)
						processData: false,               // analizar los valores o datos que voy a enviar (true, false)
						data : formulario,   // enviar la variable o los datos que requiera php
						url  : 'phpFiles/SentenciasSql.php',
						success: function(requerimiento){  // en versiones de jQuery responseText
							alert(requerimiento);
							$('#myModal').modal('hide');
                window.location.reload('crud.php');
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
          <h4 class="modal-title col-11 text-center"> Aviso</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          ¿Está seguro que desea guardar la información? <!-- Texto, componentes, formulario completo -->
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="si">Guardar cambios</button> 		
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>



  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Aviso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Información ingresada
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
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
          Falta el campo nombre <!-- Texto, componentes, formulario completo -->
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">	
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h4 class="modal-title col-11 text-center"> Aviso</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Falta el archivo de la cancion <!-- Texto, componentes, formulario completo -->
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">	
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
   <div class="modal fade" id="myModal5" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h4 class="modal-title col-11 text-center"> Aviso</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Solo se permiten archivos de audio <!-- Texto, componentes, formulario completo -->
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">	
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>

<form class="col-12" method="POST" enctype="multipart/form-data" id="formulario" name="formulario">

	
	<table class="table table-dark table-hover">
 
		<tr class="form-group">
			<td>Nombre de la Playlist</td>
			<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="white" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
	<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
	</svg><input type="text" name="nombre" id="nombre"></td>
		</tr>
    <tr class="form-group">
			<td>Descripcion</td>
			<td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" color="white" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
	<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
	</svg><input type="text" name="descripcion" id="descripcion"></td>
		</tr>
	</table>
	<input type="button" name="ingresar" id="ingresar" value="Guardar" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
	</form>

	
</body>
</html>
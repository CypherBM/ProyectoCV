<!DOCTYPE html>
<html lang="es">
<?php
	if(!isset($_SESSION)){

	}
	session_start();

	include_once("phpFiles/sentenciasSql.php");	
	

	if(!isset($_SESSION["usuario"])){
		header('Location: index.php');
	}else{
	
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toda tu musica en un solo lugar</title>
    <script type="text/javascript" src="js/jquery35.js"></script>
    <link rel="StyleSheet" href="bootstrap/css/bootstrap.css">
    <link rel="StyleSheet" href="styles/stylePrincipal.css">
    <link rel="StyleSheet" href="styles/slider.css">
    <link rel="icon" href="icon/icono.png" type="image/gif" />
    <script type="text/javascript" src="js/slider.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/292edbdf21.js" crossorigin="anonymous"></script>
    <!--- APLAYER SCRIPTS --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js" integrity="sha512-RWosNnDNw8FxHibJqdFRySIswOUgYhFxnmYO3fp+BgCU7gfo4z0oS7mYFBvaa8qu+axY39BmQOrhW3Tp70XbaQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css" integrity="sha512-CIYsJUa3pr1eoXlZFroEI0mq0UIMUqNouNinjpCkSWo3Bx5NRlQ0OuC6DtEB/bDqUWnzXc1gs2X/g52l36N5iw==" crossorigin="anonymous" />

    <script type="text/javascript">
        $(document).ready(function() {
            $('#autoWidth').lightSlider({
                autoWidth: true,
                loop: true,
                onSliderLoad: function() {
                    $('#autoWidth').removeClass('cS-hidden');
                }
            });

            $("#nose").click(function(){
            if($("#nose").val()=="Subir canciones"){
                $("#myModal").modal('show');   
            }

        });
        $("#salir").click(function(){
		var envioDatos="";
				
					$.ajax({
						type : 'POST',       //necesitamos definir como vamos a pasar los datos
						data : envioDatos,   // enviar la variable o los datos que requiera php
						url  : 'phpFiles/cerrar.php',
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
 <!-- ========================================================== Modales-->
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

  <div class="modal fade" id="myModal1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h3 class="modal-title col-11 text-center"> Ingreso de musica</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          !Aqui podrias añadir una cancion pero no eres un artista¡ 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">          		
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header ">
          <h3 class="modal-title col-11 text-center">AVISO</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                ¿Desea cerrar la sesión? 
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">          		
          <a type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</a>
          <a type="button" class="btn btn-danger" href="index.php" id="salir">Logout</a>
        </div>
        
      </div>
    </div>
  </div>
  <!-- ========================================================== Modales-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand text-primary" href="principal.php"><i class="fas fa-headphones-alt"></i></i> Music Hub</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- =============================================================== LEFT SIDE CONTENT -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-music"></i> Música</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-music"></i>Artistas</a>
                        </li>

                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><i class="fas fa-music"></i>Playlist</a>
                        </li>

                    </ul>
                    <!-- ========================================================== CENTER CONTENT -->
                    <ul class="navbar-nav mr-auto ml-auto">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2 ch_length" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-primary rounded my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </ul>

                    <!-- =============================================================== RIGHT SIDE CONTENT -->
                    <ul class="navbar-nav ml-auto">
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo nombreBase(); ?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <input type="button" class="btn btn-white" border-width:0px; border-color:White; data-toggle="modal"  id="nose"  value="<?php echo determinarRol();?>">                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#myModal2">Salir</a>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Nuevos Lanzamientos</h3>
                </div>
            </div>
        </div>

        <!-- box slider-->
        <section class="slider">
            <ul id="autoWidth" class="cs-hidden">
                <!--1------------------------------------>
                <li class="item-b">
                    <!--box-slider--------------->
                    <div class="box">
                        <!--img-box---------->
                        <div class="slide-img">
                            <img src="https://geo-media.beatport.com/image_size/1400x1400/37d71724-1d64-474f-b432-59e82f6c51cf.jpg">
                            <!--overlayer---------->
                            <div class="overlay">
                                <!--buy-btn------>
                                <a href="javascript:void();" class="album-poster buy-btn" data-switch="0">Reproducir Ahora</a>
                            </div>
                        </div>
                        <!--detail-box--------->
                        <div class="detail-box">
                            <!--type-------->
                            <div class="type">
                                <strong>
                                    <p>Stronger</p>
                                </strong>
                                <span>Stonebank ft Emel</span>
                            </div>
                        </div>

                    </div>
                </li>
                <!--2------------------------------------>
                <li class="item-b">
                    <!--box-slider--------------->
                    <div class="box">
                        <!--img-box---------->
                        <div class="slide-img">
                            <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                            <!--overlayer---------->
                            <div class="overlay">
                                <!--buy-btn------>
                                <a href="javascript:void();" class="album-poster buy-btn" data-switch="1">Reproducir Ahora</a>
                            </div>
                        </div>
                        <!--detail-box--------->
                        <div class="detail-box">
                            <!--type-------->
                            <div class="type">
                                <strong>
                                    <p>Si Estuviesemos Juntos</p>
                                </strong>
                                <span>Bad Bunny</span>
                            </div>
                        </div>

                    </div>
                </li>
                <!--2------------------------------------>
                <li class="item-b">
                    <!--box-slider--------------->
                    <div class="box">
                        <!--img-box---------->
                        <div class="slide-img">
                            <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                            <!--overlayer---------->
                            <div class="overlay">
                                <!--buy-btn------>
                                <a href="javascript:void();" class="album-poster buy-btn" data-switch="1">Reproducir Ahora</a>
                            </div>
                        </div>
                        <!--detail-box--------->
                        <div class="detail-box">
                            <!--type-------->
                            <div class="type">
                                <strong>
                                    <p>Si Estuviesemos Juntos</p>
                                </strong>
                                <span>Bad Bunny</span>
                            </div>
                        </div>

                    </div>
                </li>
                <!--2------------------------------------>
                <li class="item-b">
                    <!--box-slider--------------->
                    <div class="box">
                        <!--img-box---------->
                        <div class="slide-img">
                            <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                            <!--overlayer---------->
                            <div class="overlay">
                                <!--buy-btn------>
                                <a href="javascript:void();" class="album-poster buy-btn" data-switch="1">Reproducir Ahora</a>
                            </div>
                        </div>
                        <!--detail-box--------->
                        <div class="detail-box">
                            <!--type-------->
                            <div class="type">
                                <strong>
                                    <p>Si Estuviesemos Juntos</p>
                                </strong>
                                <span>Bad Bunny</span>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </section>


    </div>


    <div id="aplayer"></div>


    <script>
        // NOW I CLICK album-poster TO GET CURRENT SONG ID
        $(".album-poster").on('click', function(e) {
            var dataSwitchId = $(this).attr('data-switch');
            //console.log(dataSwitchId);

            // and now i use aplayer switch function see
            ap.list.switch(dataSwitchId); //this is static id but i use dynamic 

            // aplayer play function
            // when i click any song to play
            ap.play();

            // click to slideUp player see
            $("#aplayer").addClass('showPlayer');
        });

        const ap = new APlayer({
            container: document.getElementById('aplayer'),
            listFolded: true,
            //theme: '#b7daff',
            volume: 0.7,
            //fixed: true,
            audio: [{
                    name: 'Stronger',
                    artist: 'Stonebank ft Emel',
                    url: 'canciones/Stonebank - Stronger (feat. Emel).mp3',
                    cover: 'https://geo-media.beatport.com/image_size/1400x1400/37d71724-1d64-474f-b432-59e82f6c51cf.jpg'
                },
                {
                    name: 'Si Estuviesemos Juntos',
                    artist: 'Bad Bunny',
                    url: 'canciones/Bad Bunny - Si Estuviésemos Juntos.mp3',
                    cover: 'https://images.pexels.com/photos/1699161/pexels-photo-1699161.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
                }


            ]
        });
    </script>

</body>

</html>
<?php
}
?>
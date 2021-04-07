<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toda tu musica en un solo lugar</title>
    <link rel="StyleSheet" href="bootstrap/css/bootstrap.css">
    <link rel="StyleSheet" href="styles/stylePrincipal.css">
    <script type="text/javascript" src="js/jquery35.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/292edbdf21.js" crossorigin="anonymous"></script>
    <!--- APLAYER SCRIPTS --->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js" integrity="sha512-RWosNnDNw8FxHibJqdFRySIswOUgYhFxnmYO3fp+BgCU7gfo4z0oS7mYFBvaa8qu+axY39BmQOrhW3Tp70XbaQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css" integrity="sha512-CIYsJUa3pr1eoXlZFroEI0mq0UIMUqNouNinjpCkSWo3Bx5NRlQ0OuC6DtEB/bDqUWnzXc1gs2X/g52l36N5iw==" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand text-primary" href="#"><i class="fas fa-headphones-alt"></i></i> Music Hub</a>
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Usuario
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Ajustes</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Salir</a>
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
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="0">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="1">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="2">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="3">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="4">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="5">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="6">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="7">
                        <img src="https://www.lahiguera.net/musicalia/artistas/bad_bunny/disco/9592/bad_bunny_x100pre-portada.jpg">
                    </a>
                    <h4> Lorem ipsum</h4>
                    <p>Lorem ipsum - 2010</p>
                </div>

            </div>

        </div>
    </div>

    <div id="aplayer"></div>


	<script>


		// NOW I CLICK album-poster TO GET CURRENT SONG ID
		$(".album-poster").on('click', function(e){
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
		    audio: [
		    {
		        name: 'Si Estuviesemos Juntos',
		        artist: 'Bad Bunny',
		        url: 'canciones/Bad Bunny - Si Estuviésemos Juntos.mp3',
		        cover: 'https://images.pexels.com/photos/1699161/pexels-photo-1699161.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
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
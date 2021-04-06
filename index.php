<!DOCTYPE html>
<html lang="es">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Titulo Pagina -->
    <title>Music Hub</title>
    <!-- bootstrap css -->
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

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
     end loader -->

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo-baner.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Inicio</a> </li>                                        
                                        <li> <a href="login.php">Iniciar Sesion</a> </li>
                                        <li> <a href="registro.php">Registrarse</a> </li>                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- BUSCADOR
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="images/search_icon.png"></button>
                        </form>
                    </div>
                    --->
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="banner_section">
        <div class="banner-main">
            <img src="images/banner.jpg" />
            <div class="container">

                <div class="text-bg relative">
                    <br><br><br><br><br><br><br>
                    <strong><h2><br><br>Tu traes la pasion, Music Hub te trae la musica</h2></strong>
                    <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis lacinia nec et est
                        <br> aptent taciti sociosqu ad litora torquent per conubia nostra
                    </p>
                    <a href="registro.php">Pruebalo Ahora</a>
                </div>

            </div>
        </div>

    </section>

    <!-- music-box  -->
    <div class="music-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="icon/icon1.png" alt="icon" /></i>
                        <h3>Custom Player</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="icon/icon2.png" alt="icon" /></i>
                        <h3>Easy customize</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="icon/icon3.png" alt="icon" /></i>
                        <h3>Music Playlist</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="icon/icon4.png" alt="icon" /></i>
                        <h3>Custom Gallery</h3>
                        <p>t is a long established fact that a reader will be distracted by the readable </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="img-box">
                    <figure><img src="images/musicbg.jpg" alt="img" /></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="text-box">
                    <div class="box">
                        <i><img src="images/5.png" /></i>
                        <h3>Escucha A Tus Artistas Favoritos</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable
                            <br> content of a page when looking at its layout. The point of using Lorem
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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



    <!-- Albums -->
    <div id="screenshot" class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Albums-box </h2>
                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                                <img src="images/album1.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                                <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                            </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                                <img src="images/album2.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                                <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                            </span>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Albums -->

    <!--  footer -->
    <footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Contactate Con Nosotros</h3>
                            <ul class="locarion_icon">
                                <li><img src="icon/1.png" alt="icon" />Ambato - Ecuador</li>
                                <li><img src="icon/2.png" alt="icon" />Phone : ( +593 99999999 )</li>
                                <li><img src="icon/3.png" alt="icon" />Email : musichub@email.com</li>

                            </ul>

                            <ul class="contant_icon">
                                <li><img src="icon/fb.png" alt="icon" /></li>
                                <li><img src="icon/tw.png" alt="icon" /></li>
                                <li><img src="icon/lin(2).png" alt="icon" /></li>
                                <li><img src="icon/instagram.png" alt="icon" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>Get In Touch</h3>
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Name" type="text" name="Name">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Phone" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Email" type="text" name="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                            <h3>New Music </h3>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music1.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music2.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music3.jpg" /></figure>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <figure><img src="images/music4.jpg" /></figure>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p></p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery35.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>
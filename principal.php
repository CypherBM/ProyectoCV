<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once("phpFiles/sentenciasSql.php");
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
	<script src="js/jquery35.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
    }
    });
    
    </script>
    

</head>
<body>
<input type="hidden" id="nose"  value="<?php
echo determinarRol();
    ?>">
    

</body>
</html>
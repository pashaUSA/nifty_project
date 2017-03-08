<?php
?>

	<link rel="apple-touch-icon" sizes="180x180" href="fav/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="fav/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="fav/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="fav/manifest.json">
	<link rel="mask-icon" href="fav/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Baloo|Dosis|Open+Sans|Play|Raleway" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/unite-gallery.css" rel="stylesheet" type="text/css">
    <link href="css/scrolling-nav.css" rel="stylesheet" type="text/css">
    <link href="css/flags.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
    <link href="css/style.less" rel="stylesheet/less" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Necessary Plugings  -->
    <script type="text/javascript" src="js/moment.js"></script>
    <script type="text/javascript" src="js/less.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
    <?php 
        if ($currentLocation == 'contact.php'){
           include_once "sections/google-map-scripts.php"; 
        }
    ?>
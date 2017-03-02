<!-- Scrolling Nav JavaScript -->
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/scrolling-nav.js"></script>
<script type="text/javascript" src="js/unitegallery.min.js"></script>
<script type="text/javascript" src="js/ug-theme-tilesgrid.js"></script>
<script type="text/javascript" src="js/ug-theme-slider.js"></script>
<script type="text/javascript" src="js/jquery.flagstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<?php 
if ($currentLocation == 'contact.php'){
       include_once "sections/js-contact-form.php"; 
    }
	else if ($currentLocation == 'index.php'){
		include_once "sections/js-request-form.php"; 
	};
?>
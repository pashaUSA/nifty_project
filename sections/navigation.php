<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-nifty navbar-fixed-top navbar-custom">
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><i class="fa fa-bars fa-3"></i> </button>
        <a id="nifty-logo" href="./"> <img src="images/logo.png" alt="Logo"> </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <!--
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li> -->
            <li <?php if ($currentLocation == 'index.php') echo 'class="active"'; ?>> <a class="page-scroll" href="./">Home</a> </li>
            <li> <a class="page-scroll" href="<?php if ($currentLocation == 'contact.php') echo './'; ?>#services">Services</a> </li>
            <li> <a class="page-scroll" href="<?php if ($currentLocation == 'contact.php') echo './'; ?>#places-gallery">Places to visit</a> </li>
            <li <?php if ($currentLocation == 'contact.php') echo 'class="active"'; ?>> <a class="page-scroll" href="contact.php">Contact</a> </li>
            <li><a class="page-scroll" data-toggle="modal" data-target="#currencyModal">Currency Converter</a></li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container-->
</nav>

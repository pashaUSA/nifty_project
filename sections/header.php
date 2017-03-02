<!-- Header -->
<header>
    <!-- Navigation -->
    <?php 
    //$currentLocation = basename($_SERVER['PHP_SELF']);
    ?>
    <nav id="mainNav" class="navbar navbar-nifty navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i> </button>
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
                    <li class="dropdown"> <a href="#" class="dropdown-toggle">Currency Converter<span class="caret"></span></a>
                        <ul id="currency" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <?php include_once "sections/curency-converter.php"; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-->
    </nav>
</header>
<!-- /.header -->

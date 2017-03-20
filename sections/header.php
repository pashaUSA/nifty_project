<!-- Header -->
<header>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-nifty navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span>Menu <i class="fa fa-bars"></i> </button>
                <a id="nifty-logo" href="#page-top"> <img src="images/logo.png" alt="Logo"> </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!--
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li> -->
                    <li> <a class="page-scroll" href="#page-top">Home</a> </li>
                    <li> <a class="page-scroll" href="#services">Services</a> </li>
                    <li> <a class="page-scroll" href="#places-gallery">Places to visit</a> </li>
                    <li> <a class="page-scroll" href="contact.html">Contact</a> </li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Currency Converter<span class="caret"></span></a>
                        <ul id="currency" class="dropdown-menu" data-ng-app="ForEx">
                            <li>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="panel panel-default" data-ng-controller="ConvertCtrl">
                                            <div class="panel-body">
                                                <form action="" method="POST">
                                                    <legend>Currency Converter</legend>

                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="fromType">From</label>
                                                            <select ng-model="fromType" class="form-control" required data-ng-change="forExConvert()" ng-options="k for (k, v) in rates track by v"> </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="toType">To</label>
                                                            <select ng-model="toType" class="form-control" required data-ng-change="forExConvert()" ng-options="k for (k, v) in rates track by v"> </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">From Value</label>
                                                            <input type="number" class="form-control" placeholder="Enter value" data-ng-model="fromValue" data-ng-change="forExConvert()"> </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="">To Value</label>
                                                            <input type="text" class="form-control" placeholder="Enter value" data-ng-model="toValue" data-ng-change="forExConvert()"> </div>
                                                    </div>
                                                </form>
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

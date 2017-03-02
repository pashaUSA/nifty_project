<section id="contact-form">
    <div class="container">
        <div class="row">
            <h3 class="main-title">Contact <strong>Us</strong></h3>
            <p class="lead">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <div class="form-container">
                <form action="submit/contact-form.php" method="post" class="contact-form" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input class="form-control" id="name" name="name" placeholder="Your name" type="text" required="required" />
                                </div>
                            </div>
                            <!--/.form-group -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <input class="form-control" id="email" name="email" placeholder="Your e-mail" type="email" required="required" />
                                </div>
                            </div>
                            <!--/.form-group -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input class="form-control" id="tel" name="tel" placeholder="Phone" type="tel" required="required" />
                                </div>
                            </div>
                            <!--/.form-group -->
                        </div>

                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <select class="select form-control"  id="subject" name="subject" required="required">
                                    <option value="Not Selected">Subject</option>
                                    <option value="General">General</option>
                                    <option value="Customer Support">Customer Support</option>
                                    <option value="Report an issue">Report an issue</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="input-group-addon select-chevron">
                                    <i class="fa fa-chevron-down"></i>
                                </div>

                            </div>
                            <!--/.form-group -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-pencil"></i>
                                </div>
                                <textarea class="form-control" cols="80" id="message" name="message" rows="50" placeholder="Type your message here..."></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group text-right large-margin-top">
                                <input type="submit" class="btn btn-nifty" value="Send" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                            </div>
                        </div>
                    </div>
                    <footer class="notification-box"></footer>
                </form>
                <!--/.contact-form -->
            </div>
            <!--/.form-container -->

        </div>
    </div>
</section>
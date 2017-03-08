<section id="contact-form">
    <div class="container">
            <h3 class="main-title">Contact <strong>Us</strong></h3>
            <p class="lead">Whether you’re looking for more information, or you’d like to let us know how we did, you’ll find easy ways to contact us right here.</p>
							
							<p class="lead"> You can also write us directly from your mail box. <br>Our contact email is: <a href="mailto:tours@nifty.com">tours@nifty.com</a></p>
            <div class="form-container">
                <form class="contact-form" id="contactForm" data-toggle="validator">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <input class="form-control" id="name" name="name" placeholder="Your name" type="text" required="required"/>
                                    
                                </div><div class="help-block with-errors"></div>
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
                                    
                                </div><div class="help-block with-errors"></div>
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
                                    <input class="form-control" id="tel" name="tel" placeholder="Phone" type="tel"/>
                                   
                                </div> <div class="help-block with-errors"></div>
                            </div>
                            <!--/.form-group -->
                        </div>

                        <!--/column -->
                        <div class="col-sm-6">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-check"></i>
									</div>
									<select class="select form-control"  id="subject" name="subject" required="required">
										<option value="" disabled="disabled">--- Subject ---</option>
										<option value="General">General</option>
										<option value="Customer Support">Customer Support</option>
										<option value="Report an issue">Report an issue</option>
										<option value="Other">Other</option>
									</select>
									<div class="input-group-addon select-chevron">
										<i class="fa fa-chevron-down"></i>
									</div>

								</div>
								<div class="help-block with-errors"></div>
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
                                <textarea class="form-control" cols="80" id="message" name="message" rows="50" placeholder="Type your message here..." required></textarea>
                                
                            </div><div class="help-block with-errors"></div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group text-right large-margin-top">
                                <button type="submit" class="btn btn-nifty" id="form-submit">Send</button>
                            </div>
                        </div>
                    </div>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
        	    <div class="clearfix"></div>
                </form>
                <!--/.contact-form -->
            </div>
            <!--/.form-container -->
    </div>
</section>
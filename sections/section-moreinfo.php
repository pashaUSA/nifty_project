<section id="hero">
    <div class="container">
        <div class="row more-info-req-form">
            <div class="col-md-8 col-sm-12 col-md-offset-4">
                <form  class="request-form" id="requestForm" data-toggle="validator">
                    <div class="row">
                        <h2 class="form-heading">Get <strong>more</strong> information</h2>
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="control-label requiredField" for="name"> Name</label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-user"></i> </div>
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="required" /> </div>
									<div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="control-label requiredField" for="email"> Email</label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-envelope">
                                    </i> </div>
                                    <input class="form-control" id="email" name="email" placeholder="Email" type="text" required="required"/> </div>
									<div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="control-label " for="tel"> Telephone # </label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-phone"></i> </div>
                                    <input class="form-control" id="tel" name="tel" placeholder="Phone Number" type="text" /> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group ">
                                <label class="control-label " for="tripName"> Trip name </label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-plane"></i> </div>
                                    <select class="select form-control" id="tripName" name="tripName" required="required">
                                            <option value="Paris"> Paris </option>
                                            <option value="Rome"> Rome </option>
                                            <option value="Taj Mahal"> Taj Mahal </option>
                                            <option value="Athens"> Athens </option>
                                            <option value="Kyoto"> Kyoto </option>
                                        </select>
									<div class="input-group-addon select-chevron">
										<i class="fa fa-chevron-down"></i>
									</div>
                                </div>
								<div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group ">
                                <label class="control-label " for="translator"> Require translator </label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-language"></i> </div>
                                    <select class="select form-control" id="translator" name="translator" required="required">
                                            <option value="Yes"> Yes </option>
                                            <option value="No"> No </option>
                                        </select>
									<div class="input-group-addon select-chevron">
										<i class="fa fa-chevron-down"></i>
									</div>
                                </div>
								<div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="language-group" class="form-group ">
                                <label class="control-label " for="language"> Select Language </label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-comments-o"></i> </div>
                                    <select class="select form-control" id="language" name="language">
                                            <option value="French"> French </option>
                                            <option value="Spanish"> Spanish </option>
                                            <option value="Chinese"> Chinese </option>
                                        </select>
									<div class="input-group-addon select-chevron">
										<i class="fa fa-chevron-down"></i>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label class="control-label " for="startdate"> Start Date </label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-calendar">
        </i> </div>
                                    <input class="form-control" id="startdate" name="startdate" placeholder="MM/DD/YYYY" type="text" required="required"/> </div>
									<div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label class="control-label " for="enddate"> End Date </label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-calendar">
        </i> </div>
                                    <input class="form-control" id="enddate" name="enddate" placeholder="MM/DD/YYYY" type="text" required="required"/> </div>
									<div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group ">
                                <label class="control-label " for="number"> Number of people traveling </label>
                                <div class="input-group">
                                    <div class="input-group-addon"> <i class="fa fa-users">
        </i> </div>
                                    <input class="form-control" id="number" name="number" type="number" min="1" required="required"/> </div>
									<div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group ">
                                <label class="control-label " for="message"> Message </label>
                                <textarea class="form-control" cols="40" id="message" name="message" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-right">
                            <button class="btn btn-nifty" name="submit" type="submit"> Submit </button>
                        </div>
						
                    </div>
					<div id="msgSubmit" class="h3 text-center hidden"></div><div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

</section>
<!-- /.Hero -->

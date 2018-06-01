<?php $site_url = $this->Url->build('/',true); ?>
<div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 page-content">
                    <div class="inner-box category-content">
                        <h2 class="title-2"><i class="icon-user-add"></i> Create your account, Its free </h2>

                        <div class="row">
                            <div class="col-sm-12">
                             <?php echo $this->Form->create($user, ["class" => "form-horizontal" ,  'id' => 'UserSignupForm', 'enctype' => 'multipart/form-data']); ?>
                                    <fieldset>
                                       <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Email <sup>*</sup></label>

                                            <div class="col-md-6">
                                              <?php echo $this->Form->text('email', ['class'=>'form-control input-md' ,'required' => true]); ?>
                                             </div>
                                        </div>
                                        
                                          <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Password <sup>*</sup></label>

                                            <div class="col-md-6">
                                              <?php echo $this->Form->text('new_password', [ 'type' =>'password',  'class'=>'form-control input-md' ,'required' => true]); ?>
                                             </div>
                                        </div>
                                        
                                          <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Confirm Password <sup>*</sup></label>

                                            <div class="col-md-6">
                                              <?php echo $this->Form->text('confirm_password', ['type' =>'password',  'class'=>'form-control input-md' ,'required' => true]); ?>
                                             </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">First Name <sup>*</sup></label>

                                            <div class="col-md-6">
                                              <?php echo $this->Form->text('first_name', ['class'=>'form-control input-md' ,'required' => true]); ?>
                                             </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
	                                            <label class="col-md-4 control-label">Last Name <sup>*</sup></label>

                                        <div class="col-md-6">
											<?php echo $this->Form->text('last_name', ['class'=>'form-control input-md' ,'required' => true]); ?>                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Mobile <sup>*</sup></label>

                                            <div class="col-md-6">
                                               <?php echo $this->Form->text('mobile', ['class'=>'form-control input-md' ,'required' => true]); ?>

                                               
                                            </div>
                                        </div>
                                        
                                          <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Phone</label>

                                            <div class="col-md-6">
                                               <?php echo $this->Form->text('phone', ['class'=>'form-control input-md']); ?>

                                               
                                            </div>
                                        </div>
                                        
                                          <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Fax</label>

                                            <div class="col-md-6">
                                               <?php echo $this->Form->text('fax', ['class'=>'form-control input-md' ]); ?>

                                               
                                            </div>
                                        </div>
 									
                                    <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Address</label>

                                            <div class="col-md-6">
                                               <?php echo $this->Form->text('address', ['class'=>'form-control input-md' ,'required' => true]); ?>

                                               
                                            </div>
                                        </div>
                                        
                                         <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Zip Code</label>

                                            <div class="col-md-6">
                                               <?php echo $this->Form->text('zip_code', ['class'=>'form-control' ,'required' => true]); ?>

                                               
                                            </div>
                                        </div>
                                        
                                         <div class="form-group  row required">
                                            <label class="col-md-4 control-label">Country</label>

                                            <div class="col-md-6">
                                               <?php echo $this->Form->input('country_id', ['options' => $Countries,'id' =>'inputState',  'class'=>'form-control' ,'required' => true ,'dev' => false, 'label' => false]); ?>

                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label"></label>

                                            <div class="col-md-8">
                                                <div class="termbox mb10">
                                                    <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                                        <input type="checkbox" class="custom-control-input" required>
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-description"> I have read and agree to the 
                                                        <a href="<?=$site_url?>pages/terms" target="_blank">Terms & Conditions</a> </span>
                                                    </label>
                                                </div>
                                                <div style="clear:both"></div>
                                                <button type="submit" class="btn btn-primary  btn-block">Submit</button>
                                                </div>
                                        </div>
                                    </fieldset>
                                <?php echo $this->Form->end();?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.page-content -->

                <div class="col-md-4 reg-sidebar">
                    <div class="reg-sidebar-inner text-center">
                        <div class="promo-text-box"><i class=" icon-picture fa fa-4x icon-color-1"></i>

                            <h3><strong>Post a Free Adds</strong></h3>

                            <p> Post your free online ads with us. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. </p>
                        </div>
                        <div class="promo-text-box"><i class=" icon-pencil-circled fa fa-4x icon-color-2"></i>

                            <h3><strong>Create and Manage Items</strong></h3>

                            <p> Nam sit amet dui vel orci venenatis ullamcorper eget in lacus.
                                Praesent tristique elit pharetra magna efficitur laoreet.</p>
                        </div>
                        <div class="promo-text-box"><i class="  icon-heart-2 fa fa-4x icon-color-3"></i>

                            <h3><strong>Create your Favorite ads list.</strong></h3>

                            <p> PostNullam quis orci ut ipsum mollis malesuada varius eget metus.
                                Nulla aliquet dui sed quam iaculis, ut finibus massa tincidunt.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>

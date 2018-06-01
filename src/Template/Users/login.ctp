<!-- File: src/Template/Users/login.ctp -->

<?php /*?><div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('email') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div><?php */?>

<?php $site_url = $this->Url->build('/',true); ?> 
<div class="main-container">
        <div class="container">
            <div class="row">
            <div class="col-sm-6 login-page">
            <div class="row">
             <div class="col-md-4">
            
             </div>
              <div class="col-md-8" style="padding:20px;" >
           <strong> Welcome to My Real Home</strong> <br>
			Login to continue to your personal panel <br> <br>
           <ul>
           <li> 
			Post your properties to thousands of potential investors, tenants and interested individuals. <br><br>
            </li>
            <li>
            Set up property email alerts providing you latest listings of properties as they appear on RealHome.pk. <br><br>
            </li>
            <li>
            Save your favorite properties in your panel to view them later.One stop solution for all your property needs.
            </li>
            </ul>
            </div>
            </div>
            </div>
             <div class="col-sm-1">
             </div>
                <div class="col-sm-5 login-box">
                    <?= $this->Flash->render() ?>
                    <div class="card card-default">
                        
                        
                        <div class="card-header card-header gheading">
                                MY REALHOME
                          
                        </div>
					    <div class="card-body">
                           <?= $this->Form->create('',['class' => ""] ) ?>
                                <div class="row">
                                 
                                    <label for="sender-email" class="col-sm-3">Email:</label>
                                   
									 <div class="col-sm-9">
                                    <div class="input-icon"><i class="icon-user fa"></i>
                                    <?= $this->Form->text('email' ,[  "id" => "sender-email" ,  "class" => "form-control" , "placeholder"=>"Email"]) ?>
                                      
                                    </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <label for="user-pass" class="control-label col-sm-3">Password:</label>
								 <div class="col-sm-9">
                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                    <?= $this->Form->password('password' ,[  "id" => "user-passl" ,  "class" => "form-control" , "placeholder"=>"Password"]) ?>
                                    </div>
                                    </div>
                                </div>
                               <br>
                                <div class="row text-center">
                                   <label for="" class="control-label col-sm-3"></label>
                                   <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary  btn-block">Login</button>
                                    </div>
                                    <div class="col-sm-6">
                                      <p class="text-center pull-right"><a href="<?=$site_url?>users/forgot_password"> Lost your password? </a>
                                    </div>
                                    
                                </div>
                            <?= $this->Form->end() ?>
                        </div>
                        <div class="card-footer">
                         <span> Are you new to REALHOME? </span>
                          <span class="checkbox pull-right">  <a href="<?=$site_url?>users/signup"><strong>BECOME A FREE MEMBER</strong> </a></span>

                            <?php /*?><div class="checkbox pull-left">
                                <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description"> Keep me logged in</span>
                                </label>
                            </div><?php */?>


                          
                         

                            <div style=" clear:both"></div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
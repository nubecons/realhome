<?php $site_url = $this->Url->build('/',true); ?> 
<div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 login-box">
                    <div class="card card-default">
                        <div class="panel-intro text-center">
                            <h2 class="logo-title">
                                <!-- Original Logo will be placed here  -->
                                <span class="logo-icon"><i
                                        class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span> New Password<span></span>
                            </h2>
                        </div>
                        <?= $this->Flash->render() ?>
					    <div class="card-body">
                           <?php echo $this->Form->create(null, ['url' => ['action' => 'forgotreset'], 'id' => 'UserForgotresetForm']); ?>
                                <div class="form-group">
                                    <label for="sender-email" class="control-label">New Password:</label>

                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                     <?php echo $this->Form->password('new_password', ['required'=>true, "class" => "form-control email"]); ?>
                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="user-pass" class="control-label">Confirm Password:</label>

                                    <div class="input-icon"><i class="icon-lock fa"></i>
                                   <?php echo $this->Form->password('confirm_password', ['required'=>true ,"class" => "form-control email"]); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary  btn-block">Submit</button>
                                    
                                </div>
                            <?= $this->Form->end() ?>
                        </div>
                      
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
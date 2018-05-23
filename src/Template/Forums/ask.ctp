<?php

$site_url = $this->Url->build('/',true); ?>

<div class="main-container inner-page">
    <div class="container">
        <div class="section-content">
            <div class="section-block">
                <div class="row">
                    <div class="col-md-3  page-sidebar-right">
                        <aside>
                            <div class="card sidebar-card card-contact-seller">
                                <div class="card-header gheading">Ask your Question</div>
                                <div class="card-content user-info">
                                    <div class="card-body text-center">
                                        <div>
                                            <div ><span class="icon search"></span>Ask Your Question&nbsp;</div>

                                            <textarea name="thread_detail" id="thread_detail" style=";width:190px;" class="rfield left focused" placeholder="Get your questions answered by real estate experts ..." onfocus="$(this).addClass( & quot; focused & quot; );" rows="4"></textarea>		<div onclick="$(this).closest('form').submit();" class="clr ask_form_btn grn_btn">
                                                <a href="#buy" class="nav-link" data-toggle="tab"><button type="button" class="btn btn-block btn-primary">Ask Now</button></a>
                                            </div>
                                            <div class="clr"><a rel="nofollow" href="<?=$site_url."forums/ask"?>" class="green" style="float: left; margin: 0px 0px 10px 13px;"><i class="icon d"></i>Start New Discussion</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card sidebar-card">
                                <div class="card-header gheading">Forum Categories</div>
                                <div class="inner-box">
                                    <div class="user-panel-sidebar">
                                        <div class="collapse-box">
                                    <?php if($ForumCategories){
                                        foreach($ForumCategories as $ForumCategory){
                                            if($ForumCategory->parent_id ==0){?>
                                            <h5 class="collapse-title no-border"><?php echo $ForumCategory->title; ?><a class="pull-right" aria-expanded="true" data-toggle="collapse" href="#MyClassified"><i class="fa fa-angle-down"></i></a></h5>
                                            <?php }if($ForumCategory->parent_id == $ForumCategory->id){?>
                                            <div id="MyClassified" class="panel-collapse collapse show">
                                                <ul class="acc-list">
                                                    <li><a href="#"><i class="icon-home"></i><?php echo $ForumCategory->title; ?></a></li>

                                                </ul>
                                            </div>
                                            <?php }}}?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="col-sm-9 col-thin-left page-content ">
                        <div class="row">
                    <?= $this->Flash->render() ?>
                            <div class="col-sm-12">
                            <?php echo $this->Form->create($forum ,['class' => "form-horizontal" ,'enctype' => 'multipart/form-data' ] ); ?>
                                <div class="card sidebar-card card-contact-seller">
                                    <div class="card-header gheading">Create Topic </div>
                                    <div class="card-content user-info">
                                        <div class="card-body">

                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Title: </label>
                                                <div class="col-sm-8">
                                                <?php echo $this->Form->text('title', ['class'=>'form-control']); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Description: </label>
                                                <div class="col-sm-8">
                                                    <?php echo $this->Form->text('description', ['class'=>'form-control' ,'type' =>'textarea' , "rows"=>"3" ,"style"=>"height: 130px;" ]); ?>
                                                   <?php /*?> <textarea class="form-control" name="textarea" rows="3" style="height: 190px;">Describe here</textarea><?php */?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label  class="col-sm-3 col-form-label">Category:</label>
                                                <div class="col-sm-4">
                                        <?php echo $this->Form->input('forum_category_id', ['required' => true, 'empty' =>'-- Select --','options' => $ForumCategoriesList ,'onchange' => "get_forum_sub_categories()", 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label  class="col-sm-3 col-form-label">Sub Category:</label>
                                                <div class="col-sm-4" id="sub_category_div">
                                        <?php echo $this->Form->input('forum_sub_category_id', ['required' => true, 'empty' =>'-- Select --','options' => '' , 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                                </div>

                                            </div>
                                            <div class="form-group row" >
                                                <label  class="col-sm-3 col-form-label">City:</label>
                                                <div class="col-sm-4">
                                        <?php echo $this->Form->input('city_id', [ 'required' => true, 'empty' =>'-- Select --', 'options' => $Cities ,'onchange' => "get_locations()", 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                                </div>

                                            </div> 
                                            <div class="form-group row" >
                                                <label  class="col-sm-3 col-form-label">Location:</label>
                                                <div class="col-sm-4" id="locations_div">
                                        <?php echo $this->Form->input('location_id', [ 'empty' =>'-- Select--', 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                                </div>

                                            </div>   

                              <?php  if(!$sUser) { ?>

                                            <div class="form-group row">
                                                <label for="" class="col-sm-3 col-form-label">Membership Status: </label>
                                                <div class="col-sm-8">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input onClick="check_member('1')" class="form-check-input" type="radio" name="membership_status"  value="1" 
                                                     <?php if(@$this->request->data['membership_status'] == 1){?> checked <?php } ?>> Existing Member
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <input onClick="check_member('2')"  class="form-check-input" type="radio" name="membership_status"  value="2" <?php if(@$this->request->data['membership_status'] == 2){?> checked <?php } ?>> New Member 
                                                        </label>
                                                    </div>




                                                </div>
                                            </div>

                                            <div id="already_member_div">

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="textinput-name">Email</label>

                                                    <div class="col-sm-4">
                                        <?php echo $this->Form->text('email', ['class'=>'form-control']); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="textinput-name">Password</label>

                                                    <div class="col-sm-4">
                                        <?php echo $this->Form->password('password', ['class'=>'form-control']); ?>
                                                    </div>
                                                </div>

                                            </div>

                        

                                            <div id="new_member_div">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="textinput-name">First Name</label>

                                                    <div class="col-sm-4">
                                        <?php echo $this->Form->text('contact_first_name', ['class'=>'form-control']); ?>
                                                    </div>
                                                </div>



                                                <!-- Text input-->
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="seller-Number">Last Name
                                                    </label>

                                                    <div class="col-sm-4">
                                          <?php echo $this->Form->text('contact_last_name', ['class'=>'form-control']); ?>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="seller-Number">Cell
                                                    </label>

                                                    <div class="col-sm-4">
                                         <?php echo $this->Form->text('contact_mobile', ['class'=>'form-control']); ?>
                                                    </div>
                                                </div>


                                 
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="seller-Number">Email</label>

                                                    <div class="col-sm-4">
                                           <?php echo $this->Form->email('contact_email', ['class'=>'form-control']); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label" for="seller-Number">Password</label>

                                                    <div class="col-sm-4">
                                           <?php echo $this->Form->password('contact_password', ['class'=>'form-control']); ?>
                                                    </div>
                                                </div>
                               

                                            </div>
    							<?php }?>

                                            <!-- Button  -->
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"></label>

                                                <div class="col-sm-8">
                                                    <button type="submit"  class="btn btn-primary">Submit </button>
                                                </div>
                                            </div>
                                        </div></div></div>
                                     <?php echo $this->Form->end()?>

                            </div>
                        </div>

                    </div>

                    <!--/.page-side-bar-->
                </div>
            </div>


        </div>

    </div>
</div>
<script>
    function get_locations() { 
        var CityId = $('#city-id option:selected').val();
        $.ajax({
            type: "POST",
            url: "<?php echo $site_url?>Products/get_locations/" + CityId,
            success: function (data) {
                if (data != '')
                {
                    $('#locations_div').html(data);
                }
            }
        });
    }

    function get_forum_sub_categories() { 
        var CategoryId = $('#forum-category-id option:selected').val();
        $.ajax({
            type: "POST",
            url: "<?php echo $site_url?>Products/get_forum_sub_categories/" + CategoryId,
            success: function (data) {
                if (data != '')
                {
                    $('#sub_category_div').html(data); 
                }
            }
        });
    }
	
	function check_member(val) {

        if (val == '2') {

            $('#already_member_div').hide();
            $('#new_member_div').show();

        } else {

            $('#already_member_div').show();
            $('#new_member_div').hide();

        }


    }

   

    $(document).ready(function () {
        check_member('<?=$this->request->data['membership_status']?>');
        
    });

</script>
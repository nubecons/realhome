<?php

$site_url = $this->Url->build('/',true); ?> 


 <?php echo $this->requestAction('/projects/search_element' , [ 'post' => [ 'purpose' => isset($purpose)?$purpose:'']]);?>

<!-- /.search-row -->
<div class="main-container">
    <div class="container">
        <div class="row">
        <div class="col-md-8 page-content col-thin-right">


            <div class="card sidebar-card card-contact-seller">
                <div class="card-header gheading">FEATURED AGENTS <span class="badge badge-secondary"></span>
                </div>
                <div class="card-content user-info">
                    <div class="card-body text-center">
                        <ul class="list-unstyled list-user-list list-user-list-cus ">

                            <li>
                                <a href="#" data-toggle="tooltip" title="aaaa">

                                    <img alt="img" src="<?=$site_url?>img/agents/165153.jpg" class="img-circle" style="display:inline; vertical-align:middle">
                                </a>
                            </li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/162995.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img"src="<?=$site_url?>img/agents/169904.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/165435.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/150916.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/172338_5a55d5d81a0f3.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/157272.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/127436.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/160737_5a8eb4f6a15a0.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/168597_5acdfdbda51be.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/159955.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/168857.jpg"
                                        class="img-circle   "></a></li>

                            <li><a><img alt="img"src="<?=$site_url?>img/agents/1996_5a619fe5b6dbe.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/156816.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/158071.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/168138.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/165008.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/149724.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/170538_59f18e630c5f1.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/153242.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/160721_5a61c4acdce9e.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/168955.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/157275.jpg"
                                        class="img-circle   "></a></li>
                            <li><a><img alt="img" src="<?=$site_url?>img/agents/166715.jpg"
                                        class="img-circle   "></a></li>


                        </ul>


                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style=" padding-left: 30px;">

            <div class="card sidebar-card card-contact-seller">
                <div class="card-header gheading">Find New Projects in Pakistan <span class="badge badge-secondary"></span>
                </div>
                <div class="card-content user-info">
               <div class="inner-box category-content">
               
                    <div class="row">
                    <?= $this->Flash->render() ?>
                        <div class="col-sm-12">

                            <div class="form-group row">
                                <label  class="col-sm-5 col-form-label">City:</label>
                                <div class="col-sm-7">
                                        <?php echo $this->Form->input('city_id', ['required' => true, 'empty' =>'-- Select --','options' => @$Cities ,'id'=>'city_id','onchange' => "get_locations()", 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                </div>

                            </div>

                            <div class="form-group row" >
                                <label  class="col-sm-5 col-form-label">Location:</label>
                                <div class="col-sm-7" id="locations_div">
                                        <?php echo $this->Form->input('location_id', [ 'required' => true, 'empty' =>'-- Select --', 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                </div>

                            </div>  


                            <div class="form-group row">
                                <label  class="col-sm-5 col-form-label">Bedrooms:</label>
                                <div class="col-sm-7">
                                        <?php echo $this->Form->input('bedrooms', ['empty' =>'-- Select --','options' => @$BedRooms , 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label  class="col-sm-5 col-form-label">Bathrooms:</label>
                                <div class="col-sm-7">
                                        <?php echo $this->Form->input('bathrooms', ['empty' =>'-- Select --',  'options' => @$BathRooms , 'dev' => false , 'label' => false, 'class'=>'form-control']); ?>
                                </div>

                            </div>

                            <!-- Button  -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"></label>

                                <div class="col-sm-8">
                                    <button type="submit"  class="btn btn-primary">Find Projects </button>
                                </div>
                            </div>

							
							
							

                        </div>
                    </div>
                </div>
                </div>
            </div>            
            
        </div>
    </div>
        <div class="card-header gheading"><span>Latest  </span> Discover New Projects </div>
        <div class="inner-box relative ">
                   
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="no-margin item-news owl-carousel owl-theme" style="opacity: 1; display: block;">
                                
                                  <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 6920px; left: 0px; display: block;"><div class="owl-item" style="width: 865px;"><div class="item">
                                    <div class="row col-sm-12">


                                <div class="col-sm-3  col-xs-3 no-padding">
                                    <div><a href="#"><img alt="news" src="<?=$site_url?>img/industry-1-150x150.jpg" style=" vertical-align:top"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-9  col-xs-9  add-desc-box">
                                    <div class="jobs-item">
                                     
                                      <h4 class="job-title"><a href="#">KWSB forms online water tankers centre</a></h4>
                                       <div class="jobs-desc"> Our developers work out of our offices in New York,
                                        Washington DC, Los Angeles, Oakland, Boston, and London. We're looking
                                        for a front-end web developer to join... </div>
                                      <div class="job-actions">
                                        <ul class="list-unstyled list-inline">
                                          <li> <a class="save-job" href="#"> <span class="fa fa-star-o"></span> Read More</a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                              
                            </div>
                                        </div></div><div class="owl-item" style="width: 865px;"><div class="item">
                                    <div class="row col-sm-12">


                                 <div class="col-sm-3  col-xs-3 no-padding">
                                    <div><a href="#"><img alt="news" src="<?=$site_url?>img/water-tanker-150x150.jpg" style=" vertical-align:top"></a></div>
                                </div>
                                <!--/.photobox-->
                               <div class="col-sm-9 col-xs-9  add-desc-box">
                                    <div class="jobs-item">
                                     
                                      <h4 class="job-title"><a href="#">KWSB forms online water tankers centre</a></h4>
                                       <div class="jobs-desc"> Our developers work out of our offices in New York,
                                        Washington DC, Los Angeles, Oakland, Boston, and London. We're looking
                                        for a front-end web developer to join... </div>
                                      <div class="job-actions">
                                        <ul class="list-unstyled list-inline">
                                          <li> <a class="save-job" href="#"> <span class="fa fa-star-o"></span> Read More</a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                              
                            </div>
                                        </div></div><div class="owl-item" style="width: 865px;"><div class="item">
                                    <div class="row col-sm-12">


                                <div class="col-sm-3  col-xs-3 no-padding">
                                    <a href="#"><img alt="news" src="<?=$site_url?>img/fbr-150x150.jpg" style=" vertical-align:top"></a>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-9 col-xs-9  add-desc-box">
                                    <div class="jobs-item">
                                     
                                      <h4 class="job-title"><a href="#">KWSB forms online water tankers centre</a></h4>
                                       <div class="jobs-desc"> Our developers work out of our offices in New York,
                                        Washington DC, Los Angeles, Oakland, Boston, and London. We're looking
                                        for a front-end web developer to join... </div>
                                      <div class="job-actions">
                                        <ul class="list-unstyled list-inline">
                                          <li> <a class="save-job" href="#"> <span class="fa fa-star-o"></span> Read More</a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                              
                            </div>
                                        </div></div><div class="owl-item" style="width: 865px;"><div class="item">
                                    <div class="row col-sm-12">


                                <div class="col-sm-3  col-xs-3 no-padding">
                                    <div><a href="#"><img alt="news" src="<?=$site_url?>img/industry-1-150x150.jpg" style=" vertical-align:top"></a></div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-9 col-xs-9  add-desc-box">
                                    <div class="jobs-item">
                                     
                                      <h4 class="job-title"><a href="#">KWSB forms online water tankers centre</a></h4>
                                       <div class="jobs-desc"> Our developers work out of our offices in New York,
                                        Washington DC, Los Angeles, Oakland, Boston, and London. We're looking
                                        for a front-end web developer to join... </div>
                                      <div class="job-actions">
                                        <ul class="list-unstyled list-inline">
                                          <li> <a class="save-job" href="#"> <span class="fa fa-star-o"></span> Read More</a> </li>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                              
                            </div>
                                        </div></div></div></div>
                                  
                                  
                                  
                                  
                                   
                                                    

                              
                                <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
                            </div>
                        </div>
                    </div>
    </div>

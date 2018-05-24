<?php

$site_url = $this->Url->build('/',true); ?> 

<!-- /.intro -->
<div class="main-container">
    <div class="container">
        <div style="clear: both"></div>


        <div class="row">
                <div class="col-md-9  box-title gheading">
                        <h2>Maps By Societe</h2>

                        
                    </div>
                                <?php 
				
				$totalCities = count($Cities);
				
				$dispRows = $totalCities / 3 ;
				
				?>
            <div class="col-md-9 page-content col-thin-right ">
                <div class="inner-box category-content ">
                 
                       
                    <div class="row">
                       
                        <div class="col-md-4 col-sm-4 ">
                            <div class="cat-list">
                                <ul class="cat-collapse  cat-id-1">

                                  <?php
								   $counter = 0 ;
								   foreach($Cities as $City){
									   $counter = $counter + 1;
                                                                          
									   ?>
                                    <li><a href="<?=$site_url."maps/locations/".$City['id']?>"><?=$City['title']?><span class="count"><?php echo ' ('.number_format($this->GetInfo->getLocationCount(array('city_id'=>$City['id']))).')';?></span></a></li> 
                                     <?php 
									 
									  if($counter >= $dispRows ){
											if($counter == $dispRows){
												$counter = 0 ;
											}else{
												$counter = 1 ;
											}
										 ?>
                                </ul>
                            </div>
                        </div> 
                        <div class="col-md-4 col-sm-4 ">
                            <div class="cat-list">
                                <ul class="cat-collapse  cat-id-1">
                                    <?php	  
									   }
									 }?>
                                </ul>
                            </div>
                        </div>


                    </div>

                </div>

            </div>
            <div class="col-md-3 page-sidebar col-thin-left">
                <aside>
                     <?php echo $this->requestAction('/products/ads_element');?>   
                </aside>
            </div>

            <div class="col-md-9 content-box ">
                <div class="row row-featured">
                    <div class="col-md-12  box-title gheading">
                        <div class="inner"><h2><span> NEW</span>
                                SOCIETY MAPS <a href="#" class="sell-your-item"> View more <i class="  icon-th-list"></i> </a></h2>

                        </div>
                    </div>

                    <div style="clear: both"></div>

                    <div class=" relative  content featured-list-row  w100">

                        <nav class="slider-nav has-white-bg nav-narrow-svg">
                            <a class="prev">
                                <span class="nav-icon-wrap"></span>

                            </a>
                            <a class="next">
                                <span class="nav-icon-wrap"></span>
                            </a>
                        </nav>
                        <div class="adds-wrapper property-list">
                            <div class="item-list make-grid">

                                <div class="row">


                                    <div class="col-md-3 no-padding photobox">
                                        <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="#"><img class="thumbnail no-margin" src="<?=$site_url?>images/house/thumb/2.jpg" alt="img"></a></div>
                                    </div>
                                    <!--/.photobox-->
                                    <div class="add-desc-box col-md-9">
                                        <div class="ads-details">
                                            <h5 class="add-title"><a href="#">
                                                    Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                            <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i class="fa fa-map-marker"></i> Map</a>  </span> </span>


                                        </div>

                                    </div>
                                    <!--/.add-desc-box-->
                                    <div class="col-md-3 text-right  price-box">

                                        <a class="btn btn-success btn-sm bold" href="#">
                                            View More
                                        </a>


                                    </div>
                                    <!--/.add-desc-box-->
                                </div>
                            </div>
                            <!--/.item-list-->
                            <div class="item-list make-grid">

                                <div class="row">


                                    <div class="col-md-3 no-padding photobox">
                                        <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="#"><img class="thumbnail no-margin" src="<?=$site_url?>images/house/thumb/2.jpg" alt="img"></a></div>
                                    </div>
                                    <!--/.photobox-->
                                    <div class="add-desc-box col-md-9">
                                        <div class="ads-details">
                                            <h5 class="add-title"><a href="#">
                                                    Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                            <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i class="fa fa-map-marker"></i> Map</a>  </span> </span>


                                        </div>

                                    </div>
                                    <!--/.add-desc-box-->
                                    <div class="col-md-3 text-right  price-box">

                                        <a class="btn btn-success btn-sm bold" href="#">
                                            View More
                                        </a>


                                    </div>
                                    <!--/.add-desc-box-->
                                </div>
                            </div>
                            <!--/.item-list-->
                            <div class="item-list make-grid">

                                <div class="row">


                                    <div class="col-md-3 no-padding photobox">
                                        <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="#"><img class="thumbnail no-margin" src="<?=$site_url?>images/house/thumb/2.jpg" alt="img"></a></div>
                                    </div>
                                    <!--/.photobox-->
                                    <div class="add-desc-box col-md-9">
                                        <div class="ads-details">
                                            <h5 class="add-title"><a href="#">
                                                    Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                            <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i class="fa fa-map-marker"></i> Map</a>  </span> </span>


                                        </div>

                                    </div>
                                    <!--/.add-desc-box-->
                                    <div class="col-md-3 text-right  price-box">

                                        <a class="btn btn-success btn-sm bold" href="#">
                                            View More
                                        </a>


                                    </div>
                                    <!--/.add-desc-box-->
                                </div>
                            </div>
                            <!--/.item-list-->
                            <div class="item-list make-grid">

                                <div class="row">


                                    <div class="col-md-3 no-padding photobox">
                                        <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="#"><img class="thumbnail no-margin" src="<?=$site_url?>images/house/thumb/2.jpg" alt="img"></a></div>
                                    </div>
                                    <!--/.photobox-->
                                    <div class="add-desc-box col-md-9">
                                        <div class="ads-details">
                                            <h5 class="add-title"><a href="#">
                                                    Exclusive and modern luxury apartment  Union Avenue </a></h5>
                                            <span class="info-row"> <span class="item-location">544 Union Avenue, Brooklyn, NY 11211 |  <a><i class="fa fa-map-marker"></i> Map</a>  </span> </span>


                                        </div>

                                    </div>
                                    <!--/.add-desc-box-->
                                    <div class="col-md-3 text-right  price-box">

                                        <a class="btn btn-success btn-sm bold" href="#">
                                            View More
                                        </a>


                                    </div>
                                    <!--/.add-desc-box-->
                                </div>
                            </div>
                            <!--/.item-list-->
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-md-9">
                <div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group faq-panel">
                    <div class="card">
                        <div id="headingOne" role="tab" class="card-header gheading">
                            <h4 class="card-title" style=" color:  white !important;">
                                
                                    About Realhome Society Maps Overview
                                
                            </h4>
                        </div>
                        <div aria-labelledby="headingOne" role="tabpanel" class="panel-collapse collapse show" id="collapseOne">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
                                amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu erat
                                mattis lorem, lacinia lacinia dui enim at eros. Pellentesque ut gravida augue. Duis
                                ac dictum tellus
                                <br><br>
                                Pellentesque in mauris placerat, porttitor lorem id, ornare nisl. Pellentesque
                                rhoncus convallis felis, in egestas libero. Donec et nibh dapibus, sodales nisi
                                quis, fringilla augue. Donec dui quam, egestas in varius ut, tincidunt quis ipsum.
                                Nulla nec odio eu nisi imperdiet dictum.
                                <br><br>
                                Curabitur sed leo dictum, convallis lorem eu, suscipit mi. Mauris viverra blandit
                                varius. Proin non sem turpis. Etiam fringilla hendrerit nunc at accumsan. Duis
                                mollis auctor lobortis.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div style="clear: both"></div>
    </br></br>
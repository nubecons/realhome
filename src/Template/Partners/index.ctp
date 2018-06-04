<?php

$site_url = $this->Url->build('/',true); ?> 

<div class="intro has-map"  style="background-image: url(<?=$site_url?>images/bg3.jpg); height: 340px;">
<br>
    <div class="dtable hw100">
        <div class="dtable-cell hw100">
            <div class="container text-center">
                <div class=" inner-box">

                    <div class="row card-footer">
                        <div class="col-md-12 card bg-light" style="padding-top:0px;" >
                            <ul id="myTab" class="nav" role="tablist" >
                                <li class="nav-item"><a href="#buy"   class="nav-link" data-toggle="tab"><button type="button" class="btn btn-block btn-primary" >  PARTNERS</button></a></li>
                                <li class="nav-item"><a href="#rent"  class="nav-link" data-toggle="tab"><button type="submit" class="btn btn-block btn-default" >  PRODUCTS</button></a></li>
                                <li class="nav-item"><a href="#rent"  class="nav-link" data-toggle="tab"><button type="submit" class="btn btn-block btn-primary" >  SERVICES</button></a></li>

                            </ul>
                        </div>
                    </div>



                    <div id="myTabContent" class="tab-content" style="margin-top:10px;">
                        <div class="tab-pane in active" id="buy">
                            <div class="container">
                                <div class="row">

 <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                                        <label for="cities">Keyword</label>
                                        <input type="text" placeholder="Enter Location" name="Location" class="form-control" />
                                    </div>
                                
                                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                                        <label for="exampleInputEmail1">Select Product/Service</label>
                                        <select class="form-control selecter" name="product_type_id" id="search-category">
                                            <option selected="selected" value="">All Properties</option>
                           <?php
							foreach($ProductTypes as $Mainkey => $ProductType){
							 ?>

                                            <option value="<?=$Mainkey?>" style="background-color:#E9E9E9;font-weight:bold;">-- <?=$ProductType?> --</option>
                                     <?php
											 foreach($SubProductTypes[$Mainkey]  as $key => $sProductType){?>
                                            <option value="<?=$key?>"><?=$sProductType?></option>

                              <?php }
							}
							 ?>    


                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                                        <label for="cities">Cities</label>
										<?php echo $this->Form->input('city_id',
                                        ['empty' =>'All Citiess',
                                        'options' => @$Cities , 'dev' => false , 'label' => false, 
                                        'class'=>'form-control selecter',
                                        ]); ?>

                                    </div>

                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                                        <label for="cities">Location</label>
                                        <input type="text" placeholder="Enter Location" name="Location" class="form-control" />
                                    </div>
                                    <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
                                        <label for="exampleInputEmail1"> &nbsp;</label>
                                        <button type="submit" class="btn btn-block btn-primary fa fa-search"> Search</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                   <?php /*?> <div class="tab-pane " id="rent">
                        <p>Microsoft Windows is a series of graphical
                            interface operating systems developed, marketed,
                            and sold by Microsoft</p> 
                    </div><?php */?>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>


<!-- /.intro -->
<div class="main-container">
    <div class="container">
     <?php /*?>   <div style="clear: both"></div>
        <div class="col-xl-12 content-box ">
            <div class="row row-featured">
                <div class=" relative  content featured-list-row  w100">
                    <nav class="slider-nav has-white-bg nav-narrow-svg">
                        <a class="prev"><span class="nav-icon-wrap"></span></a>
                        <a class="next"><span class="nav-icon-wrap"></span></a>
                    </nav>
              
                           
                                <div class="owl-item" style="width: 1000px !important; height: 300px !important;">
                                    <div class="item">
                                        <img class="img-responsive" src="images/auto/2012-mercedes-benz-sls-amg.jpg" alt="img">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="images/img/partners/149635_5a49f40bae9d6.jpg" alt="img">
                                    </div>
                                </div>
                            
                 
                    </div>
                </div>



            </div><?php */?>
                       
       <div class="container col-md-8" >
       <div class="w3-content">
          <img src="<?=$site_url?>images/house/thumb/2.jpg" >
          <img src="<?=$site_url?>images/house/thumb/11.jpg" >
          <img src="<?=$site_url?>images/house/thumb/13.jpg" >
          <img src="<?=$site_url?>images/house/thumb/14.jpg">
        </div>
       
       </div>     
            

<script src="<?=$site_url?>assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
$(document).ready(function () {
	$('.w3-content').bxSlider({
	  auto: false,
	  autoControls: true,
	  stopAutoOnClick: true,
	  pager: false,
	  minSlides:1,
	  infiniteLoop: false,
	  moveSlides:1,
	});
});

</script>
            
            

              <div class="container col-md-8" >
                
                    <div class="card sidebar-card card-contact-seller">
                                <div class="card-header gheading">FEATURED AGENTS <span class="badge badge-secondary"></span>
                                </div>
                                <div class="card-content user-info">
                                    <div class="card-body text-center">
                                        <ul class="list-unstyled list-user-list list-user-list-cus ">
                    
                                            <li><img alt="img" src="<?=$site_url?>img/agents/165153.jpg"
                                                        class="img-circle" style="display:inline; vertical-align:middle"></li>
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
          <div class="container col-md-8" >
        <div class="col-xl-12 content-box ">
                <div class="row row-featured">
                    <div style="clear: both"></div>
                    <div class="tab-lite relative w100">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs gheading " role="tablist">
                            <li role="presentation" class=" nav-item"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" class="nav-link"><i class="icon-location-2"></i>Partners</a>
                            </li>
                            <li role="presentation" class="nav-item"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab" class="nav-link"><i class="icon-search"></i>Products</a>
                            </li>
                            <li role="presentation" class="nav-item"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab" class="nav-link"><i class="icon-th-list"></i>Services</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" style="padding:15px;">
                            <div role="tabpanel" class="tab-pane active" id="tab1">
                              <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class="fa fa-car ln-shadow"></i>Automobiles  </a>

                                        <span data-target=".cat-id-1" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse cat-id-1 collapse show" style="">
                                        <li><a href="#">Car Parts &amp; Accessories</a></li>
                                        <li><a href="#">Campervans &amp; Caravans</a></li>
                                        <li><a href="#">Motorbikes &amp; Scooters</a></li>
                                        <li><a href="#">Motorbike Parts &amp; Accessories</a></li>
                                        <li><a href="#">Vans, Trucks &amp; Plant</a></li>
                                        <li><a href="#">Wanted</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class="icon-home ln-shadow"></i>
                                        Property <span class="count">228,705</span></a> <span data-target=".cat-id-2" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span></h3>


                                    <ul class="cat-collapse collapse show cat-id-2">
                                        <li><a href="#">House for Rent</a></li>
                                        <li><a href="#">House for Sale </a></li>
                                        <li><a href="#"> Apartments For Sale </a></li>
                                        <li><a href="#">Apartments for Rent </a></li>
                                        <li><a href="#">Farms-Ranches </a></li>
                                        <li><a href="#">Land </a></li>
                                        <li><a href="#">Vacation Rentals </a></li>
                                        <li><a href="#">Commercial Building</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class="icon-home ln-shadow"></i>
                                        Jobs <span class="count">6375</span></a>

                                        <span data-target=".cat-id-3" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-3">
                                        <li><a href="#">Full Time Jobs</a></li>
                                        <li><a href="#">Internet Jobs </a></li>
                                        <li><a href="#">Learn &amp; Earn jobs </a></li>
                                        <li><a href="#"> Manual Labor Jobs </a></li>
                                        <li><a href="#">Other Jobs </a></li>
                                        <li><a href="#">OwnBusiness </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class="fa fa-briefcase ln-shadow"></i> Services <span class="count">45,526</span></a>
                                        <span data-target=".cat-id-4" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-4">
                                        <li><a href="#">Building, Home &amp; Removals</a></li>
                                        <li><a href="#">Entertainment</a></li>
                                        <li><a href="#">Health &amp; Beauty</a></li>
                                        <li><a href="#">Miscellaneous</a></li>
                                        <li><a href="#">Property &amp; Shipping</a></li>
                                        <li><a href="#">Tax, Money &amp; Visas</a></li>
                                        <li><a href="#">Telecoms &amp; Computers</a></li>
                                        <li><a href="#">Travel Services &amp; Tours</a></li>
                                        <li><a href="#">Tuition &amp; Lessons</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class="icon-book-open ln-shadow"></i> Learning <span class="count">26,529</span></a> <span data-target=".cat-id-5" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-5">
                                        <li><a href="#"> Automotive Classes </a></li>
                                        <li><a href="#"> Computer Multimedia Classes </a></li>
                                        <li><a href="#"> Sports Classes </a></li>
                                        <li><a href="#"> Home Improvement Classes </a></li>
                                        <li><a href="#"> Language Classes </a></li>
                                        <li><a href="#"> Music Classes </a></li>
                                        <li><a href="#"> Personal Fitness </a></li>
                                        <li><a href="#"> Other Classes </a></li>
                                    </ul>
                                </div>
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class="icon-guidedog ln-shadow"></i> Pets <span class="count">42,111</span></a>
                                        <span data-target=".cat-id-6" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-6">
                                        <li><a href="#">Pets for Sale</a></li>
                                        <li><a href="#">Petsitters &amp; Dogwalkers</a></li>
                                        <li><a href="#">Equipment &amp; Accessories</a></li>
                                        <li><a href="#">Missing, Lost &amp; Found</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4   last-column">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class=" icon-basket-1 ln-shadow"></i> For Sale <span class="count">64,526</span></a> <span data-target=".cat-id-7" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-7">
                                        <li><a href="#">Audio &amp; Stereo</a></li>
                                        <li><a href="#">Baby &amp; Kids Stuff</a></li>
                                        <li><a href="#">CDs, DVDs, Games &amp; Books</a></li>
                                        <li><a href="#">Clothes, Footwear &amp; Accessories</a></li>
                                        <li><a href="#">Computers &amp; Software</a></li>
                                        <li><a href="#">Home &amp; Garden</a></li>
                                        <li><a href="#">Music &amp; Instruments</a></li>
                                        <li><a href="#">Office Furniture &amp; Equipment</a></li>
                                        <li><a href="#">Phones, Mobile Phones &amp; Telecoms</a></li>
                                        <li><a href="#">Sports, Leisure &amp; Travel</a></li>
                                        <li><a href="#">Tickets</a></li>
                                        <li><a href="#">TV, DVD &amp; Cameras</a></li>
                                        <li><a href="#">Video Games &amp; Consoles</a></li>
                                        <li><a href="#">Freebies</a></li>
                                        <li><a href="#">Miscellaneous Goods</a></li>
                                        <li><a href="#">Stuff Wanted</a></li>
                                        <li><a href="#">Swap Shop</a></li>
                                    </ul>
                                </div>
                                <div class="cat-list ">
                                    <h3 class="cat-title"><a href="#"><i class=" icon-theatre ln-shadow"></i> Community <span class="count">5,30</span> </a> <span data-target=".cat-id-8" aria-expanded="true" data-toggle="collapse" class="btn-cat-collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse collapse show cat-id-8">
                                        <li><a href="#">Announcements </a></li>
                                        <li><a href="#">Car Pool - Bike Ride </a></li>
                                        <li><a href="#">Charity - Donate - NGO </a></li>
                                        <li><a href="#">Lost - Found </a></li>
                                        <li><a href="#">Tender Notices </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab2">
                                <div class="col-xl-12 tab-inner">
                                    <div class="row">
                                      Product list gose here
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab3">
                                <div class="col-xl-12 tab-inner">
                                    <div class="row">
                                     Services List Gose here
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            </div>
    </div>
</div>
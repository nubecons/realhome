<?php $site_url = $this->Url->build('/',true); ?> 
<?php echo $this->requestAction('/products/search_element' , [ 'post' => [ 'purpose' => isset($purpose)?$purpose:'']]);?>



    <div class="main-container">
        <div class="container">
        
        
        
        
            <div style="clear: both"></div>
	            <div class="col-xl-12 content-box ">
                <div class="row row-featured">
                    <div class="col-xl-12  box-title ">
                        <div class="inner"><h2><span>TITANIUM  </span> AGENCIES <?php /*?><a href="#" class="sell-your-item"> View more <i class="  icon-th-list"></i> </a><?php */?></h2>
                        </div>
                    </div>

                    <div style="clear: both"></div>

                    <div class=" relative  content featured-list-row  w100" style="height:130px;">
							
                        <nav class="slider-nav has-white-bg nav-narrow-svg">
                            <a class="prev">
                                <span class="nav-icon-wrap"></span>

                            </a>
                            <a class="next">
                                <span class="nav-icon-wrap"></span>
                            </a>
                        </nav>
                       
                        <div class="no-margin featured-list-slider ">
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/149635_5a49f40bae9d6.jpg" alt="img">
                                </span>
                               
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/153218_5abc97bbc7555.jpg" alt="img">
                                </span>
                              
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/154721_5ac35d909d723.jpg" alt="img">
                                </span>
                               
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/157962.jpg" alt="img">
                                </span>
                              
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/149635_5a49f40bae9d6.jpg" alt="img">
                                </span>
                              
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/166379.jpg" alt="img">
                                </span>
                               
                            </a>
                            </div>
                            
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/149635_5a49f40bae9d6.jpg" alt="img">
                                </span>
                               
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/153218_5abc97bbc7555.jpg" alt="img">
                                </span>
                              
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/154721_5ac35d909d723.jpg" alt="img">
                                </span>
                               
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/157962.jpg" alt="img">
                                </span>
                              
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/149635_5a49f40bae9d6.jpg" alt="img">
                                </span>
                              
                            </a>
                            </div>
                             <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/partners/166379.jpg" alt="img">
                                </span>
                               
                            </a>
                            </div>
                            
                           <?php
						  if(count($SponsProducts) == 0) {?>
						   <?php /*?><img src="<?=$site_url?>img/maps/awaiting.jpg" alt="img" width="100%" height="250"/><?php */?>
                           
                          <?php /*?> <div class="item"><a href="#">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="<?=$site_url?>img/maps/awaiting.jpg" alt="img">
                                </span>
                              
                            </a>
                            </div><?php */?>
                           
                           <?php }else{?> 
                        
                         <?php 
						    foreach($SponsProducts as $Product){
                            ?>
                            
                            <div class="item"><a href="<?=$site_url?>products/detail/<?=$Product['id']?>">
                                <span class="item-carousel-thumb">
                                <img class="img-responsive" src="images/item/3.jpg" alt="img">
                                </span>
                                <span class="item-name"> <?=$Product['title']?>   </span>
                                
                                <span class="price">  Rs: <?=$Product['price']?> </span>
                            </a>
                            </div>
                            
                            <?php }?> <?php }?>
                        </div>
                       
                    </div>



                </div>
            </div>

            <div class="row">
                 
                <?php 
				$city_idz = ['103908'/*Lahore*/ , '103895'/*karachi*/ ,'103952'/*Peshawar*/ ,'103961'/*Rawalpindi*/ ,'103930'/*Multan*/ 
							,'103858'/*Faisalabad*/ ,'103956'/*Quetta*/ ,'103882'/*Islamabad*/,'103868'/*Gujranwala*/] ;
				
				$city_products = $this->GetInfo->getProductCityCount(['city_id in' => $city_idz]);
				
				?>
                
                <div class="col-md-9 page-content col-thin-right">
                <style>
				.list-user-list li{ width:8.33%}
				</style>
                
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
                                               
                                                 <li><a><img alt="img" src="<?=$site_url?>img/agents/156816.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/151938.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/157237_5a9fb365eb078.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/151134.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/169409_5a93d6915ca19.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/166076.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/152206.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/165679.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/155613.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/165113.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/153316.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/68754.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/157808.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/170023.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/161773.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/169227.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/172338_5a55d5d81a0f3.jpg"
                                                            class="img-circle   "></a></li>
                                                             <li><a><img alt="img" src="<?=$site_url?>img/agents/157275.jpg"
                                                            class="img-circle   "></a></li>
                                                              <li><a><img alt="img" src="<?=$site_url?>img/agents/158071.jpg"
                                                            class="img-circle   "></a></li>
                                                            <li><a><img alt="img" src="<?=$site_url?>img/agents/158071.jpg"
                                                            class="img-circle   "></a></li>
                                                <li><a><img alt="img" src="<?=$site_url?>img/agents/168138.jpg"
                                                            class="img-circle   "></a></li>
                                                                      
                                            </ul>


                                        </div>
                                    </div>
                                </div>
                
                
                    <div class="inner-box category-content">
                        <h2 class="title-2">Pakistan Properties For Sale </h2>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                    <?php /*?><h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
                                       For Sale <span class="count">277,959</span> </a>

                                        <span data-target=".cat-id-1" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3><?php */?>
                                    <ul class="cat-collapse  cat-id-1">
                                        <li><a href="<?=$site_url?>products/locations/103908">Lahore<span class="count"> (<?=isset($city_products['103908'])?number_format($city_products['103908']):'0';?>)</span></a></li> 
                                          <li><a href="<?=$site_url?>products/locations/103961">Rawalpindi<span class="count"> (<?=isset($city_products['103961'])?number_format($city_products['103961']):'0';?>)</span></a></li>
                                        <li><a href="<?=$site_url?>products/locations/103930">Multan<span class="count"> (<?=isset($city_products['103930'])?number_format($city_products['103930']):'0';?>)</span></a></li>
                                     
                                        <li><a href="#">View all cities<span class="count"> </span></a></li>
                                    </ul>
                                </div>
                               
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="cat-list">
                                    <?php /*?><h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i> For Rent <span
                                            class="count">45,526</span></a>
                                        <span data-target=".cat-id-4" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3><?php */?>
                                    <ul class="cat-collapse  cat-id-1">
                                        <li><a href="<?=$site_url?>products/locations/103895">Karachi<span class="count"> (<?=isset($city_products['103895'])?number_format($city_products['103895']):'0';?>)</span></a></li> 
                                        <li><a href="<?=$site_url?>products/locations/103858">Faisalabad<span class="count"> (<?=isset($city_products['103858'])?number_format($city_products['103858']):'0';?>)</span></a></li>
                                        <li><a href="<?=$site_url?>products/locations/103952">Peshawar<span class="count"> (<?=isset($city_products['103952'])?number_format($city_products['103952']):'0';?>)</span></a></li>
                                     </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4   last-column">
                                <div class="cat-list">
                                    <?php /*?><h3 class="cat-title"><a href="category.html"><i
                                            class=" icon-basket-1 ln-shadow"></i> For Commercial <span
                                            class="count">64,526</span></a> <span data-target=".cat-id-7"
                                                                                  aria-expanded="true"  data-toggle="collapse"
                                                                                  class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3><?php */?>
                                    <ul class="cat-collapse  cat-id-1">
                                         <li><a href="<?=$site_url?>products/locations/103882">Islamabad<span class="count"> (<?=isset($city_products['103882'])?number_format($city_products['103882']):'0';?>)</span></a></li> 
                                        <li><a href="<?=$site_url?>products/locations/103868">Gujranwala<span class="count"> (<?=isset($city_products['103868'])?number_format($city_products['103868']):'0';?>)</span></a></li>
                                        <li><a href="<?=$site_url?>products/locations/103956">Quetta<span class="count"> (<?=isset($city_products['103956'])?number_format($city_products['103956']):'0';?>)</span></a></li>
                                      </ul>
                                </div>
                              
                            </div>
                        </div>
                        
						<?php 
						$location_idz = ['677'/*DHA Defence Lahore*/ ] ;
						
						$location_product = $this->GetInfo->getProductLocationCount(['location_id in' => $location_idz]); 
						
						$city_idz = ['103908'/*Lahore*/ , '103895'/*karachi*/ ,'103882'/*Islamabad*/] ;
						$city_product = $this->GetInfo->getProductCityCount(['city_id IN' => $city_idz]);?>
                         
                        <h2 class="title-2">Most Popular Locations for Homes</h2>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="#"><i class="icon-home ln-shadow"></i>
                                       Lahore <span class="count">
                                      
                                       <?=isset($city_product['103908'])?number_format($city_products['103908']):'0';?>
                                       
                                       </span> </a>

                                        <span data-target=".cat-id-1" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse  cat-id-1">
                                        <li><a href="">Houses For Sale in DHA Defence<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li> 
                                        <li><a href="">Houses For Sale in Bahria Town<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li>
                                        <li><a href="">Houses For Sale in Johar Town<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li>
                                        <li><a href="">Houses For Sale in Allama Iqbal Town<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li>
                                        <li><a href="">Houses For Sale in State Life Housing Society<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li>
                                        <li><a href="">Houses For Sale in Pak Arab Housing Society<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li>
                                        <li><a href="">Houses For Sale in Wapda Town<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li>
                                        <li><a href="">Houses For Sale in Eden<span class="count"> (<?=isset($location_product['677'])?number_format($location_product['677']):'0';?>)</span></a></li>
                                    </ul>
                                </div>
                               
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i> Karachi <span
                                            class="count"><?=isset($city_product['103895'])?number_format($city_products['103895']):'0';?></span></a>
                                        <span data-target=".cat-id-4" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse  cat-id-1">
                                        <li><a href="">Houses For Sale in DHA Defence<span class="count"> (0)</span></a></li> 
                                        <li><a href="">Flats For Sale in DHA Defence<span class="count"> (0)</span></a></li>
                                        <li><a href="">Flats For Sale in Gulistan-e-Jauhar<span class="count"> (0)</span></a></li>
                                        <li><a href="">Houses For Sale in Bahria Town<span class="count"> (0)</span></a></li>
                                        <li><a href="">Flats For Sale in Bahria Town<span class="count"> (0)</span></a></li>
                                        <li><a href="">Flats For Sale in Gulshan-e-Iqbal Town<span class="count"> (0)</span></a></li>
                                        <li><a href="">Houses For Sale in North Karachi<span class="count"> (0)</span></a></li>
                                        <li><a href="">Flats For Sale in Clifton<span class="count"> (0)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4   last-column">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                            class=" icon-basket-1 ln-shadow"></i>Islamabad <span
                                            class="count"><?=isset($city_product['103882'])?number_format($city_products['103882']):'0';?></span></a> <span data-target=".cat-id-7"
                                                                                  aria-expanded="true"  data-toggle="collapse"
                                                                                  class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>
                                   <ul class="cat-collapse  cat-id-1">
                                        <li><a href="">Houses For Sale in Bahria Town Rawalpindi<span class="count"> (0)</span></a></li> 
                                        <li><a href="">Houses For Sale in DHA Defence<span class="count"> (0)</span></a></li>
                                        <li><a href="">Houses For Sale in Airport Housing Society<span class="count"> (0)</span></a></li>
                                        <li><a href="">Houses For Sale in E-11<span class="count"> (0)</span></a></li>
                                        <li><a href="">Houses For Sale in E-13<span class="count"> (0)</span></a></li>
                                        <li><a href="">Flats For Sale in Bahria Town Rawalpindi<span class="count"> (0)</span></a></li>
                                        <li><a href="">Flats For Sale in E-11<span class="count"> (0)</span></a></li>
                                        <li><a href="">Houses For Sale in E-11<span class="count"> (0)</span></a></li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                        
                         <h2 class="title-2">Most Popular Locations for Plots</h2>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i>
                                       Lahore <span class="count">277,959</span> </a>

                                        <span data-target=".cat-id-1" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span
                                                class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse  cat-id-1">
                                        <li><a href="">Plots For Sale in DHA Defence<span class="count"> (0)</span></a></li> 
                                        <li><a href="">Plots For Sale in Bahria Town<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Bahria Orchard<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Lake City<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in DHA 11 Rahbar<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in LDA Avenue<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Central Park Housing Scheme<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Sui Gas Housing Society<span class="count"> (0)</span></a></li>
                                    </ul>
                                </div>
                               
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i class="icon-home ln-shadow"></i> Karachi <span
                                            class="count">45,526</span></a>
                                        <span data-target=".cat-id-4" aria-expanded="true"  data-toggle="collapse"
                                              class="btn-cat-collapsed collapsed">   <span class=" icon-down-open-big"></span> </span>
                                    </h3>
                                    <ul class="cat-collapse  cat-id-1">
                                        <li><a href="">Plots For Sale in Bahria Town Karachi<span class="count"> (0)</span></a></li> 
                                        <li><a href="">Plots For Sale in Scheme 33<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in DHA Defence<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Gadap Town<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in DHA City Karachi<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Bin Qasim Town<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Gulistan-e-Jauhar<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Scheme 45<span class="count"> (0)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4   last-column">
                                <div class="cat-list">
                                    <h3 class="cat-title"><a href="category.html"><i
                                            class=" icon-basket-1 ln-shadow"></i>Islamabad <span
                                            class="count">64,526</span></a> <span data-target=".cat-id-7"
                                                                                  aria-expanded="true"  data-toggle="collapse"
                                                                                  class="btn-cat-collapsed collapsed">   <span
                                            class=" icon-down-open-big"></span> </span>
                                    </h3>
                                   <ul class="cat-collapse  cat-id-1">
                                        <li><a href="">Plots For Sale in Bahria Town Rawalpindi<span class="count"> (0)</span></a></li> 
                                        <li><a href="">Plots For Sale in DHA Defence<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Bahria Town<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in B-17<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in Gulberg<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in D-12<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in G-14<span class="count"> (0)</span></a></li>
                                        <li><a href="">Plots For Sale in I-12<span class="count"> (0)</span></a></li>
                                    </ul>
                                </div>
                              
                            </div>
                        </div>
                    </div>

                    <div class="inner-box has-aff relative">
                        <a class="dummy-aff-img" href="category.html"><img src="images/aff2.jpg" class="img-responsive"
                                                                           alt=" aff"> </a>

                    </div>
                </div>
                <div class="col-md-3 no-padding">
                    <aside>
                       <?php /*?> <div class="inner-box no-padding">
                             <div class="inner-box">
                            <h2 class="title-2">Featured Agencies</h2>

                            <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                    <li><a href="sub-category-sub-location.html"> AL- karam</a></li>
                                    <li><a href="sub-category-sub-location.html"> Real Estate </a></li>
                                    <li><a href="sub-category-sub-location.html"> Business Opportunities (4,974) </a></li>
                                    <li><a href="sub-category-sub-location.html"> Community and Events (1,258) </a></li>
                                    
                                </ul>
                            </div>
                        </div>
                            <div class="inner-box-content"><a href="#"><img class="img-responsive" src="images/site/app.jpg" alt="tv"></a></div>
                        </div><?php */?>
                          
                       <?php echo $this->requestAction('/products/ads_element');?>   
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->

    <div class="page-info hasOverly" style="background: url(images/bg.jpg); background-size:cover">
        <div class="bg-overly">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span><?=$SiteInfo['trusted_seller']?></span></h5>

                                    <div class="iconbox-wrap-text">Trusted Seller</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-th-large-1"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span><?=$SiteInfo['categories']?></span></h5>

                                    <div class="iconbox-wrap-text">Categories</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-map"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span><?=$SiteInfo['location']?></span></h5>

                                    <div class="iconbox-wrap-text">Location</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon icon-facebook"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span><?=$SiteInfo['facebook_fans']?></span></h5>

                                    <div class="iconbox-wrap-text"> Facebook Fans</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.page-info -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1><?=$SiteInfo['home_footer_text']?></h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now: </span><?=$SiteInfo['phone']?> </a>
            </div>

        </div>
    </div>
    
    
    

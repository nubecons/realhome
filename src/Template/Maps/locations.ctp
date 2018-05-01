<?php $site_url = $this->Url->build('/',true); ?> 

    <div class="intro has-map"  style="background-image: url(<?=$site_url?>images/bg3.jpg);">
        <div class="dtable hw100">
            <div class="dtable-cell hw100">
                <div class="container text-center">
                    <h1 class="intro-title animated fadeInDown">Browse Society Maps By Location </h1>

                    <p class="sub animateme fittext3 animated fadeIn">
                      
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- /.intro -->
<div class="main-container">
        <div class="container">
            <div style="clear: both"></div>
	        

            <div class="row">
                                <?php 
				
				$totalLocations = count($Locations);
				
				$dispRows = $totalLocations / 3 ;

				$city_idz = ['103908'/*Lahore*/ , '103895'/*karachi*/ ,'103952'/*Peshawar*/ ,'103961'/*Rawalpindi*/ ,'103930'/*Multan*/ 
							,'103858'/*Faisalabad*/ ,'103956'/*Quetta*/ ,'103882'/*Islamabad*/,'103868'/*Gujranwala*/] ;
				
				$city_products = $this->GetInfo->getProductCityCount(['city_id in' => $city_idz]);
				
				?>
                <div class="col-md-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Maps By Cities</h2>
                        <div class="row">
                           <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                     <ul class="cat-collapse  cat-id-1">
                                    
                                  <?php if($Locations){
								   $counter = 0 ;
								   foreach($Locations as $Location){
									   $counter = $counter + 1;
									   ?>
                                      <li><a href="<?=$site_url."maps/location_map/".$Location['id']?>"><?=$Location['name']?></li> 
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
                                  }}else{?>
                                             <h2>No Location Found against this City</h2>
                                 <?php }?>
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
            </div>
        </div>
    </div>
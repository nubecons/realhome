<?php

$site_url = $this->Url->build('/',true); ?> 

<div class="intro has-map"  style="background-image: url(<?=$site_url?>images/bg3.jpg);">
    <div class="dtable hw100">
        <div class="dtable-cell hw100">
            <div class="container text-center">
                <h1 class="intro-title animated fadeInDown"><?php if($City){ echo $City->title; }?> Property Locations</h1>

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
			
				?>

            <div class="col-md-12 page-content col-thin-right">

                <div class="category-list">
                    <ul id="myTab" class="nav nav-tabs tab-box nav nav-tabs add-tabs" role="tablist">
                        <li class="active nav-item"><a href="#houses" class="nav-link" data-toggle="tab">Houses<span class="count"> (0)</span></a></li>
                        <li class="nav-item"><a href="#flats"  class="nav-link"data-toggle="tab">Flats<span class="count"> (0)</span></a></li>
                        <li class="nav-item"><a href="#farm_house"  class="nav-link"data-toggle="tab">Farm Houses<span class="count"> (0)</span></a></li>
                        <li class="nav-item"><a href="#upper_portion"  class="nav-link"data-toggle="tab">Upper Portions<span class="count"> (0)</span></a></li>
                        <li class="nav-item"><a href="#lower_portion"  class="nav-link"data-toggle="tab">Lower Portions<span class="count"> (0)</span></a></li>
                        <li class="nav-item"><a href="#pent_house"  class="nav-link"data-toggle="tab">Pent Houses<span class="count"> (0)</span></a></li>
                        <li class="nav-item"><a href="#rooms"  class="nav-link"data-toggle="tab">Rooms<span class="count"> (0)</span></a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane in active" id="houses">
                            <div class="inner-box category-content">
                                <!--                        <h2 class="title-2">Properties</h2>-->
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 ">
                                        <div class="cat-list">
                                            <ul class="cat-collapse  cat-id-1">

                                  <?php
								   $counter = 0 ;
								   foreach($Locations as $Location){
									   $counter = $counter + 1;
									   ?>

                                      <li>
                                      <?php
									  echo $this->Form->postLink(

											$Location['name'].'<span class="count">('. $Location['records'].')</span>', 

											['action' => 'index'],
											['escape' => false,'data' => ['location_id' => $Location['id']]]
											// third
											);	
											?>
                                      
                                     <?php /*?> <a href=""><?=$Location['name']?><span class="count"> (0)</span></a><?php */?></li> 

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
                        <div class="tab-pane " id="flats">
                            <p>flats</p> 
                        </div>
                        <div class="tab-pane " id="farm_house">
                            <p>farm house</p> 
                        </div>
                        <div class="tab-pane " id="upper_portion">
                            <p>Upper Portion</p> 
                        </div>
                        <div class="tab-pane " id="lower_portion">
                            <p>Lower Portion</p> 
                        </div>
                        <div class="tab-pane " id="pent_house">
                            <p>Pent House</p> 
                        </div>
                        <div class="tab-pane " id="rooms">
                            <p>Rooms</p> 
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
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
                <div class="col-md-9 page-content col-thin-right">
                    <div class="inner-box category-content">
                        <h2 class="title-2">Maps By Locations</h2>
                        <div class="row">
                           <div class="col-md-4 col-sm-4 ">
                                <div class="cat-list">
                                     <ul class="cat-collapse  cat-id-1">
                                    
                                  
								   <?php if($Locations['location_map'] != ''){?>
                <img src="<?=$site_url?>img/maps/<?php echo $Locations['location_map'];?>" alt="img" width="100%" height="100%"/>
               <?php }else{?>
                 <img src="<?=$site_url?>img/maps/awaiting.jpg" alt="img" width="100%" height="100%"/>
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
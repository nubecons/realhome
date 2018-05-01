 <?php $site_url = $this->Url->build('/',true); ?> 
 <?php
						     foreach($Advertisements as $Advertisement){
								 $ads_link = '#';
								 $target = '';
								 if($Advertisement['link'] != ''){
									  $ads_link = $Advertisement['link'];
								      $ads_target = '_blank"';
									 
									 }
							 ?>	 
                           
                           <div class="inner-box no-padding">
                               <a href="<?=$ads_link?>" target="<?=$ads_target?>">
                                    <img class="img-responsive" src="<?=$site_url?>img/advertisements/<?=$Advertisement['image']?>" alt="">
                               </a>
                           </div>
                           <?php }?>
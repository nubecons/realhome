<?php $site_url = $this->Url->build('/',true); ?>
 <div class="container">
<header id="header">
           <strong class="menu_head">Menu</strong>
           <i class="fa fa-bars" aria-hidden="true"></i>
		   <div class="container-fluid">
			   <div class="row clearfix">
				   <div class="col-md-6">
					   <ul class="nav">
						   <li class="nav-item">
							   <a class="nav-link" href="<?=$site_url?>"><i class="fa fa-home" aria-hidden="true"></i></a>
						   </li>
						   <li class="nav-item">
							   <a class="nav-link active" href="<?=$site_url?>">Properties</a>
						   </li>
						   <li class="nav-item">
							   <a class="nav-link" href="#">Forum</a>
						   </li>
						   <li class="nav-item">
							   <a class="nav-link" href="<?=$site_url?>blogs">blog</a>
						   </li>
						   <li class="nav-item">
							   <a class="nav-link" href="<?=$site_url."maps"?>">Maps</a>
						   </li>
						  <?php /*?> <li class="nav-item">
							   <a class="nav-link" href="#">trends</a>
						   </li>
						   <li class="nav-item">
							   <a class="nav-link" href="#">index</a>
						   </li><?php */?>
						   <li class="nav-item">
							   <a class="nav-link" href="<?=$site_url?>partners">partners</a>
						   </li>
					   </ul>
				   </div>
                   
				   <div class="col-md-2 d-flex justify-content-end ">
					   <ul class="nav">
                            
                            <li class="nav-item d-flex align-items-center">
                            
                           <div id="google_translate_element"></div>
						   <script type="text/javascript">
							
							function googleTranslateElementInit() {
							 	 new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
							}
							
                            </script>
							<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        					</li>
                            </ul>
                            </div>
                   
				   <div class="col-md-4 d-flex justify-content-end ">
					   <ul class="nav">
                            
                        
						   <li class="nav-item d-flex align-items-center mr-3">
							   <div class="header_search">
                               <?php echo $this->Form->create('' ,[ 'id' =>'top_search_form' , 'url' => ['controller' => 'products' ,'action' => 'index'] , 'class' => "form-horizontal" ,'enctype' => 'multipart/form-data' ] ); ?>
								   <input placeholder="Property ID" name="product_id" type="text" class="form-control">
								   <i class="fa fa-search" aria-hidden="true" onClick="$('#top_search_form').submit()"></i>
                                   <?php echo $this->Form->end()?>
							   </div>
						   </li>
						   <li class="d-flex align-items-center">
							   <a href="<?=$site_url?>products/add"  class="add_btn d-flex align-items-center justify-content-center">
								   <i class="fa fa-plus mr-1" aria-hidden="true"></i> Add Property
							   </a>
						   </li>
                       </ul>
                       <ul class="nav d-flex">
						  <?php /*?> <li class="nav-item">
							   <a class="nav-link" href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
						   </li><?php */?>
                           <?php
						    if($sUser){
								?>
                            <li class="nav-item">
							   <a class="nav-link" href="<?=$site_url?>users/dashboard"><i class="fa fa-user" aria-hidden="true" style="color:#d33c44"></i></a>
						   </li>
                               
						   <li class="nav-item">
							   <a class="nav-link" href="<?=$site_url?>users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
						   </li>
						  
                           <?php }else{?>
                            <li class="nav-item">
							   <a class="nav-link" href="<?=$site_url?>users/login"><i class="fa fa-user" aria-hidden="true" style="color:#d33c44"></i></a>
						   </li>
                           <?php }?>
					   </ul>
				   </div>
			   </div>

		   </div>
	   </header>
       
       <div id="secondary_header">
			<div class="container-fluid d-flex" style="padding-left:0px;">
				
						<a href="<?=$site_url?>">
				            <img  src="<?=$site_url?>img/realhomelogo1.png" alt="logo"  >
						</a>
				
                
                <?php
				if(isset($is_partner) and $is_partner == 1){
			    ?>		
                
                 <ul class="nav">
		             <li class="nav-item">
						<a class="nav-link" href="<?=$site_url?>Partners">Products</a>
					</li>
					
                    <li class="nav-item br-left">
						<a class="nav-link" href="<?=$site_url?>Partners">Services</a>
					</li>
					
                    <li class="nav-item br-left">
						<a class="nav-link" href="<?=$site_url?>Partners">Partners</a>
					</li>
					
                 
                </ul>
                
                
					
					<?php }else{ ?>
                    
                     <div class="nav-item toggle_menu">
                    <a class="nav-link active" href="#">Buy <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
                <ul class="nav collapsable_menu">
					<li class="nav-item">
						<a class="nav-link" href="#">Homes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Plots</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Commercial</a>
					</li>
                </ul>
				
                <ul class="nav">
		             
                    <?php /*?> <li class="nav-item">
						<a class="nav-link" href="<?=$site_url?>Buy">Buy</a>
					</li><?php */?>
					
                    <li class="nav-item br-left">
						<a class="nav-link" href="<?=$site_url?>Rent">Rent</a>
					</li>
					
                    <li class="nav-item br-left">
						<a class="nav-link" href="<?=$site_url?>Wanted">Wanted</a>
					</li>
					
                    <li class="nav-item br-left">
						<a class="nav-link" href="<?=$site_url?>Agent">Agent</a>
					</li>
                </ul>
                
                <?php }?>
			</div>
		</div>
		</div>
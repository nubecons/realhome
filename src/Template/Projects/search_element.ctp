
<?php $site_url = $this->Url->build('/',true); ?> 
    <div class="container ">

        <div class="row" style=" padding: 10px;">
            <div class="col-md-1"></div>
            <div class="col-md-7">
<div class="w3-content w3-display-container">
  <img class="mySlides" src="<?=$site_url?>images/house/thumb/2.jpg" style="width:100%">
  <img class="mySlides" src="<?=$site_url?>images/house/thumb/11.jpg" style="width:100%">
  <img class="mySlides" src="<?=$site_url?>images/house/thumb/13.jpg" style="width:100%">
  <img class="mySlides" src="<?=$site_url?>images/house/thumb/14.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

        </div>
        
            <?php 
				$city_idz = ['103908'/*Lahore*/ , '103895'/*karachi*/ ,'103952'/*Peshawar*/ ,'103961'/*Rawalpindi*/ ,'103930'/*Multan*/ 
							,'103956'/*Quetta*/ ,'103882'/*Islamabad*/] ;
				$city_products = $this->GetInfo->getProductCityCount(['city_id in' => $city_idz]);
				
				?>
        <div class="col-md-3 ">
		
                              <div class="pop-loc_head" >  
                             <h3 class="title-3">Papular Locations</h3>
                              <div  class="col-md-12  text-center" style="padding-left:85px">
                              <div  id="cat-prev" style="width:51px; height:31px; overflow:hidden"></div>
                              </div>
                              </div>
                              	<div class="inner-box">
                              <div class="inner-box-content">
                                <ul class="cat-list arrow">
                                <li><a href="<?=$site_url?>products/locations/103908"> Lahore (<?=isset($city_products['103908'])?number_format($city_products['103908']):'0';?>)</a></li>
                                <li><a href="<?=$site_url?>products/locations/103895"> Karachi (<?=isset($city_products['103895'])?number_format($city_products['103895']):'0';?>)</a></li>
                                <li><a href="<?=$site_url?>products/locations/103952"> Islamabad (<?=isset($city_products['103882'])?number_format($city_products['103882']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103952"> Peshawar (<?=isset($city_products['103952'])?number_format($city_products['103952']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103956"> Quetta (<?=isset($city_products['103956'])?number_format($city_products['103956']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103961"> Rawalpindi (<?=isset($city_products['103961'])?number_format($city_products['103961']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103930"> Multan (<?=isset($city_products['103930'])?number_format($city_products['103930']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103908"> Lahore (<?=isset($city_products['103908'])?number_format($city_products['103908']):'0';?>)</a></li>
                                <li><a href="<?=$site_url?>products/locations/103895"> Karachi (<?=isset($city_products['103895'])?number_format($city_products['103895']):'0';?>)</a></li>
                                <li><a href="<?=$site_url?>products/locations/103952"> Islamabad (<?=isset($city_products['103882'])?number_format($city_products['103882']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103952"> Peshawar (<?=isset($city_products['103952'])?number_format($city_products['103952']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103956"> Quetta (<?=isset($city_products['103956'])?number_format($city_products['103956']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103961"> Rawalpindi (<?=isset($city_products['103961'])?number_format($city_products['103961']):'0';?>) </a></li>
                                <li><a href="<?=$site_url?>products/locations/103930"> Multan (<?=isset($city_products['103930'])?number_format($city_products['103930']):'0';?>) </a></li>
                                </ul>
                            </div>
                            <div  class="col-md-12  text-center" style="padding-left:85px">
                              <div id="cat-next" style="width:51px; height:31px;overflow:hidden"></div>
                            </div>
                            </div>
                             
                           
                         
        			</div>
                   

<script src="<?=$site_url?>assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
$(document).ready(function () {
	$('.cat-list').bxSlider({
	  mode:"vertical",	
	  auto: false,
	  autoControls: true,
	  stopAutoOnClick: true,
	  pager: false,
	  //slideWidth: 600,
	  minSlides:8,
	  infiniteLoop: false,
	  //useCSS:false,
	  wrapperClass:false,
	  moveSlides:2,
	  //hideControlOnEnd: true,
	  nextSelector:'#cat-next',
	  prevSelector:'#cat-prev',
	  prevText: ' <button class="w3-button w3-black w3-display-topmiddle" onclick="plusDivs(-1)">&#9650;</button>',   
      nextText: '  <button class="w3-button w3-black w3-display-bottommiddle" onclick="plusDivs(1)">&#9660;</button>',
	  
	  
	});
});

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
        
	    	</div>
    	</div>
    
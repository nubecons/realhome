	<?php $site_url = $this->Url->build('/',true); ?> 

<script src="<?=$site_url?>assets/plugins/bxslider/jquery.bxslider.min.js"></script>
<script>
$(document).ready(function () {
	
$('.bxslider').bxSlider({
  mode:"vertical",	
  auto: false,
  autoControls: true,
  stopAutoOnClick: true,
  pager: false,
  slideWidth: 600,
  minSlides:2,
});

});
</script>

<div class="bxslider">
  
  <div>aaaaaaaaaaaaa</div>
  <div>bbbbbbbbbbbbbbbb</div>
  <div>cccccccccccccc</div>
    
</div>
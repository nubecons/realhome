<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <title>
        <?php $this->assign('title', $title); ?>
        <?php echo $this->fetch('title');?>
       
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    
	<?php $site_url = $this->Url->build('/',true); ?> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <link href="<?=$site_url?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="<?=$site_url?>assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="<?=$site_url?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="<?=$site_url?>assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

   <link href="<?=$site_url?>assets/css/custom.css" rel="stylesheet">
    <!-- bxSlider CSS file -->
    <link href="<?=$site_url?>assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

    <script src="<?=$site_url?>assets/js/jquery.min.js"> </script>
		
    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=$site_url?>assets/js/html5shiv.js"></script>
    <script src="<?=$site_url?>assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="<?=$site_url?>assets/js/pace.min.js"></script>
    

    <?= $this->fetch('script') ?>

</head>
<body>
<div id="wrapper">
		<?=$this->element('header')?>
        
       <?= $this->fetch('content') ?>
      
       <?=$this->element('footer')?>
</div>


<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="<?= $this->Url->build('/',true); ?>assets/js/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="<?=$site_url?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=$site_url?>assets/js/vendors.min.js"></script>
<script src="<?=$site_url?>assets/js/script.js"></script>

</body>
</html>

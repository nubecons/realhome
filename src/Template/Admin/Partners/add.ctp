<h3><?php echo __('Add New Partner'); ?></h3>
<div class="banners form">
<?php echo $this->Form->create('',array('type'=>'file'));?>
	<?php
	    echo $this->Form->input('main_partner_category_id',array('options' => $PartnerCategories , 'style' => 'width:350px'));
		echo $this->Form->input('partner_category_id',array('options' => $PartnerCategorieslvl2 , 'style' => 'width:350px'));
		echo $this->Form->input('partner_sub_category_id',array('options' => $PartnerCategorieslvl3 , 'style' => 'width:350px'));
		echo $this->Form->input('partner_sub_category_id',array('options' => $Cities , 'style' => 'width:350px'));
		echo $this->Form->input('name',array('style' => 'width:350px'));
		echo $this->Form->input('mobile',array('style' => 'width:350px'));
		echo $this->Form->input('email',array('style' => 'width:350px'));
		echo $this->Form->input('description',array('type' =>'textarea', 'style' => 'width:350px'));
		
		echo $this->Form->input('image_file',array('type'=>'file'));
		echo "<br>";
		echo $this->Form->input('website',array('style' => 'width:350px'));
		echo $this->Form->input('facebook_url',array('style' => 'width:350px'));
		echo $this->Form->input('twitter_url',array('style' => 'width:350px'));
		echo $this->Form->input('google_url',array('style' => 'width:350px'));
		
		echo $this->Form->input('status' , ['style' => 'width:350px', 'options' =>['ACTIVE' => 'ACTIVE' ,'INACTIVE' => 'INACTIVE'] ]);
	?>
<div class="btns">
	  <?php echo $this->Form->submit('Submit', array('div' => false, 'class'=>'small button'));?>
	  <?php echo $this->Html->link('Cancel', array('div' => false, 'action' => "index"),array('class'=>'small button'));?>
  </div>
  <?php  echo $this->Form->end();?>
</div>

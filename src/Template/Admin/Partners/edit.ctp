<h3><?php echo __('Edit Banner'); ?></h3>
<div class="banners form">
<?php echo $this->Form->create('Banner',array('type'=>'file'));?>
	<?php
		echo $this->Form->input('id');
	    echo $this->Form->input('title',array('style' => 'width:350px'));
		echo $this->Form->input('url',array('style' => 'width:350px'));
		echo $this->Form->input('image',array('type'=>'file'));
		echo $this->Form->input('description',array('style' => 'width:350px'));
		echo $this->Form->input('status');
	?>

<div class="btns">
	  <?php echo $this->Form->submit('Submit', array('div' => false,'class'=>'small button'));?>
	  <?php echo $this->Html->link('Cancel', array('div' => false, 'action' => "index"),array('class'=>'small button'));?>
  </div>
  
  <?php  echo $this->Form->end();?>
  
</div>

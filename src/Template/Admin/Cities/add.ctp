<?php $site_url = $this->Url->build('/',true); ?> 
<h3><?php echo __('Create New City');?></h3>
<div class="maps form">
<?php echo $this->Form->create('' ,['class' => "form-horizontal" ,'enctype' => 'multipart/form-data' ] ); ?>
	<?php
		echo $this->Form->input('title',array('required'=>true,'style' => 'width:350px'));
                echo $this->Form->input('status', ['required' => true, 'empty' =>'-- Select --','options' => $CitiesStatus]);
    <div class="btns">
	  <?php echo $this->Form->submit('Submit', array('div' => false,'class'=>'small button'));?>
    </div>
<?php echo $this->Form->end()?>
</div>



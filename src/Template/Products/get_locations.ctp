<?php  echo $this->Form->input('location_id', [ 'required' => true, 'empty' =>'-- Select --','options' => $Locations , 'dev' => false , 'label' => false, 'class'=>'form-control']); 
           ?>
<?php 
	echo $this->Html->script(['ui/jquery.ui.core.js', 'ui/jquery.ui.datepicker.js','jquery.maskedinput.js'], ['block' => true]);
	echo $this->Html->css(['/css/themes/base/jquery.ui.all.css']);
?>
<script type="text/javascript">
	jQuery(function() {
		jQuery("#UserGovtIdExpiryDate").datepicker();
		jQuery('#UserGovtIdExpiryDate').datepicker('option', {dateFormat: 'yy-mm-dd', changeMonth:true, changeYear:true, minDate: '0Y', maxDate: '+40Y', yearRange: '-40:+40' });
		<?php if(isset($user->govt_id_expiry_date) && $user->govt_id_expiry_date != "") { ?>
		jQuery('#UserGovtIdExpiryDate').datepicker( 'setDate', '<?php echo date('Y-m-d', strtotime($user->govt_id_expiry_date));?>' );
		<?php } ?>
		
		jQuery("#UserDateOfBirth").datepicker();
		jQuery('#UserDateOfBirth').datepicker('option', {dateFormat: 'yy-mm-dd',changeMonth: true,changeYear: true,minDate: '-100Y',maxDate: '0Y',yearRange: '-100'});
		<?php if(isset($user->date_of_birth) && $user->date_of_birth != "") { ?>
		jQuery('#UserDateOfBirth').datepicker( 'setDate', '<?php echo date('Y-m-d', strtotime($user->date_of_birth));?>' );
		<?php } ?>

	});
</script>
<?php
	echo $this->Html->css('validationEngine.jquery.css');
	echo $this->Html->script('languages/jquery.validationEngine-en.js');
	echo $this->Html->script('jquery.validationEngine.js');
?>
<script>
	jQuery(document).ready(function(){
		// binds form submission and fields to the validation engine
		jQuery("#UserSignupForm").validationEngine();
	});
				
	function load_states()
	{
		var country_code = jQuery("#country").val();
		jQuery.ajax({
			type: "POST",
			url: "<?php echo $this->Url->build('/ajax/loadstates', true);?>",
			data: "country_code=" + country_code+"&fieldName=state&class=inputwid-2",
			cache: false,
			dataType: "html",
			success: function(data){
				jQuery("#OrderStateTD").html(data);
				jQuery("#UserSignupForm").validationEngine();
			}
		});
	}
</script>			
<?php 
echo $this->element('myaccount_topbar');?>
<div class="wrapper sign-up">
   <div class="pageSection">
      <?php echo $this->Form->create($user, ['id' => 'UserSignupForm', 'enctype' => 'multipart/form-data']); ?>
      <div class="widget_content">
         <ul>
            <li class="padded">
               <table>
                  <tr>
                     <td width="180"><label>First Name *</label></td>
                     <td><?php echo $this->Form->text('first_name', ['class'=>'validate[required] inputwid-2']); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>Last Name *</label></td>
                     <td><?php echo $this->Form->text('last_name', ['class'=>'validate[required] inputwid-2','label'=>false]); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>Email *</label></td>
                     <td><?php echo $user->email;?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>Phone Number *</label></td>
                     <td><?php echo $this->Form->text('phone_number', ['class'=>'validate[required,custom[phone]] inputwid-2','label'=>false, 'maxlength' => '50']); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>Work Phone Number</label></td>
                     <td><?php echo $this->Form->text('work_phone', ['class'=>'validate[custom[phone]] inputwid-2','label'=>false, 'maxlength' => '50']); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>Fax</label></td>
                     <td><?php echo $this->Form->text('fax', ['class'=>'inputwid-2','label'=>false, 'maxlength' => '50']); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>Cell</label></td>
                     <td><?php echo $this->Form->text('cell', ['class'=>'inputwid-2','label'=>false, 'maxlength' => '50']); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>Date of Birth</label></td>
                     <td><?php echo $this->Form->text('date_of_birth', ['class'=>'inputwid-2','label'=>false, 'id' => 'UserDateOfBirth']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Address * </label></td>
                     <td><?php echo $this->Form->text('address', ['class'=>'validate[required] textarea','label'=>false,'style'=>'height:45px;']); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>ID Type *</label></td>
                     <td><?php echo $this->Lib->getUserIdTypes(['fieldName'=>'govt_id_type', 'class'=>'validate[required] inputwid-2','label'=>false]); ?></td>
                  </tr>
                  <tr>
                     <td width="90"><label>ID Expiry Date *</label></td>
                     <td><?php echo $this->Form->text('govt_id_expiry_date', ['class'=>'validate[required] inputwid-2', 'id' => 'UserGovtIdExpiryDate']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Country *</label></td>
                     <td><?php echo $this->Lib->getCountries('country','onchange=load_states();&class=inputwid-2'); ?></td>
                  </tr>
                  <tr>
                     <td><label>State / Province / Region *</label></td>
                     <td id="OrderStateTD">
					 	<?php 
						$params = array('fieldName'=>'state','country_code'=>'US','class'=>'inputwid-2');
						 if (isset($user->state)){
							 $params['default'] = $user->state;
						 }
						 if (isset($user->country)){
							 $params['country_code'] = $user->country;
						 }
                        echo $this->Lib->getStates($params);
                        ?>
                     </td>
                  </tr>
                  <tr>
                     <td><label>City *</label></td>
                     <td><?php echo $this->Form->text('city', ['class'=>'validate[required] inputwid-2']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Zip Code *</label></td>
                     <td><?php echo $this->Form->text('zip', ['class'=>'validate[required] inputwid-2']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Citizenship</label></td>
                     <td><?php echo $this->Form->text('citizenship', ['class'=>'inputwid-2', 'maxlength' => '50']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Nationality</label></td>
                     <td><?php echo $this->Form->text('nationality', ['class'=>'inputwid-2', 'maxlength' => '50']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Resident of</label></td>
                     <td><?php echo $this->Lib->getCountries('resident_of','class=inputwid-2'); ?></td>
                  </tr>
                  <tr>
                     <td><label>Unicode Name</label></td>
                     <td><?php echo $this->Form->text('unicode', ['class' => 'inputwid-2', 'maxlength' => '255']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Occupation *</label></td>
                     <td><?php echo $this->Form->text('occupation', ['class'=>'validate[required] inputwid-1']); ?></td>
                  </tr>
                  <tr>
                     <td><label>Annual Income *</label></td>
                     <td><?php echo $this->Lib->getAnnualIncomes('annual_income'); ?></td>
                  </tr>
                  <tr>
                     <td><label>Profile Picture</label></td>
                     <td>
						<?php 
							echo $this->Form->file('profile_pic', ['class' => 'form_control sml_file']);
							echo $this->Form->hidden('old_profile_pic', ['value' => $user->profile_pic]);
							if ($user->profile_pic != '' && file_exists($profile_file_path.$user->profile_pic)){
								echo $this->Html->image("profile_pics/".$user->profile_pic,['width'=>'65', 'class' => 'profile-pic']);
							}
                        ?>
                     </td>
                  </tr>
                  <tr>
                     <td>&nbsp;</td>
                     <td><?php echo $this->Form->button(__('Save'), ['class'=>'b_empty btn_red']); ?></td>
                  </tr>
               </table>
            </li>
         </ul>
      </div>
      <?php echo $this->Form->end(); ?>
   </div>
</div>
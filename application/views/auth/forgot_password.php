<?php $this->load->view('header'); ?>

<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <p>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> 
      	<?php echo form_input($email);?>
      </p>

      <p><button name="button" id="button" value="true" type="submit" class="btn btn-primary"><?php echo lang('forgot_password_submit_btn'); ?></button></p>

<?php echo form_close();?>

<?php $this->load->view('footer'); ?>
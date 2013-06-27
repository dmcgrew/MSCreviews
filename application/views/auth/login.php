<?php $this->load->view('header'); ?>

<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login");?>

  
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>


 
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  


    <label for="remember" class="checkbox">
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    <?php echo lang('login_remember_label');?>
    </label>


  <p><button name="button" id="button" value="true" type="submit" class="btn btn-primary"><?php echo lang('login_submit_btn'); ?></button></p>

<?php echo form_close();?>

<p><a href="auth/forgot_password"><?php echo lang('login_forgot_password');?></a></p>

<?php $this->load->view('footer'); ?>
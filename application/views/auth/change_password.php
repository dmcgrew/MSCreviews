<?php $this->load->view('header'); ?>

<h1><?php echo lang('change_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/change_password");?>

      <p>
            <?php echo lang('change_password_old_password_label', 'old_password');?> 
            <?php echo form_input($old_password);?>
      </p>

      <p>
            <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
            <?php echo form_input($new_password);?>
      </p>

      <p>
            <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> 
            <?php echo form_input($new_password_confirm);?>
      </p>

      <?php echo form_input($user_id);?>
      <p><button name="button" id="button" value="true" type="submit" class="btn btn-primary"><?php echo lang('change_password_submit_btn'); ?></button></p>

<?php echo form_close();?>

<?php $this->load->view('footer'); ?>
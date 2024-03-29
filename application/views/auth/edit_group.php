<?php $this->load->view('header'); ?>

<h1><?php echo lang('edit_group_heading');?></h1>
<p><?php echo lang('edit_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open(current_url());?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> 
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('edit_group_desc_label', 'description');?> 
            <?php echo form_input($group_description);?>
      </p>

      <p><button name="button" id="button" value="true" type="submit" class="btn btn-primary"><?php echo lang('edit_group_submit_btn'); ?></button></p>

<?php echo form_close();?>

<?php $this->load->view('footer'); ?>
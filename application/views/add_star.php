<?php $this->load->view('header'); ?>


<?php if(isset($message)): ?>
    	<div class="alert <?php echo $alert_type; ?>">
    	    <button type="button" class="close" data-dismiss="alert">&times;</button>
    	    <?php echo $message; ?>
    	</div>
<?php endif; ?>
	
	


<h1>Give a Star</h1>

<?php 
	$form_attributes = array('class' => 'add_star');
	echo form_open('star', $form_attributes); 
?>

<label for="employee">Who is this star going to? <?php if(validation_errors()): ?><?php echo form_error('employee');?><?php endif; ?></label>
	<select name="employee" id="employee">
	    <option value=""></option>
        
	
        <?php  if(isset($users)): ?>
	
        <?php foreach($users as $row): ?>
            <option value="<?php echo $row->id; ?>" <?php echo set_select('employee', $row->id); ?>><?php echo $row->first_name . ' ' . $row->last_name; ?></option>
		
       		
            <?php endforeach; ?>
            <?php endif; ?>
        </select>   
        
    <label for="star">Add some content <?php if(validation_errors()): ?><?php echo form_error('employee');?><?php endif; ?></label>  
    <textarea name="star" id="star"><?php echo set_value('star'); ?></textarea>

    
    <label class="checkbox"><input type="checkbox" name="email" value="email" checked="checked" /> Send an email to the star recipient.</label>
    
    <button name="button" id="button" value="true" type="submit" class="btn btn-primary">Save</button>
    
<?php echo form_close(); ?>


<?php $this->load->view('footer'); ?>
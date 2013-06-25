<?php $this->load->view('header'); ?>

	<?php if(isset($message)): ?>
    	<div class="alert <?php echo $alert_type; ?>">
    	    <button type="button" class="close" data-dismiss="alert">&times;</button>
    	    <?php echo $message; ?>
    	</div>
	<?php endif; ?>
	
	<?php if(validation_errors()): ?>
    	<div class="alert alert-error">
    	    <button type="button" class="close" data-dismiss="alert">&times;</button>
    	    <?php echo validation_errors(); ?>
    	</div>
	<?php endif; ?>
	
	
	
	
	<h1>Create a Review</h1>
	
	
	<?php 
	$form_attributes = array('class' => 'create_review');
	echo form_open('review/create', $form_attributes); 
	?>
	
	<label for="employee">Employee</label>
	<select name="employee" id="employee">
	    <option value=""></option>
        
	
        <?php  if(isset($users)): ?>
	
        <?php foreach($users as $row): ?>
            <option value="<?php echo $row->id; ?>" <?php echo set_select('employee', $row->id); ?>><?php echo $row->first_name . ' ' . $row->last_name; ?></option>
		    <p></p>
       		
            <?php endforeach; ?>
            <?php endif; ?>
        </select>   
        
     
     <h2>Key Performance Areas (KPAs)</h2> 
     <p>KPAs are the core skills required of your job position and role within MarketSpace. The more successful you are within these performance areas, the more successful MarketSpace will be. These items can also be found in your job description. Improvement and excellence within these areas will increase your rating and pay raise, as well as provide you direction in your career path.</p>  
        
	<div class="label_group">
	    <label for="kpa1">KPA 1</label>
	    <div class="kpa_rate kpa_rate1">
    	    <label for="kpa1_rating_value">Rating:</label>
            
            <div id="1" class="slider"></div>
            <input type="hidden" class="kpa1_rating_value" name="kpa1_rating" value="<?php echo set_value('kpa1_rating', 0); ?>" />
            <span class="kpa1_rating_text rate_text"><?php echo set_value('kpa1_rating', 0); ?></span>
	    </div>
	</div>
	<textarea name="kpa1" id="kpa1"><?php echo set_value('kpa1'); ?></textarea>
	
	
	
	<div class="label_group">
	    <label for="kpa2">KPA 2</label>
	    <div class="kpa_rate kpa_rate2">
    	    <label for="kpa2_rating_value">Rating:</label>
            
            <div id="2" class="slider"></div>
            <input type="hidden" class="kpa2_rating_value" name="kpa2_rating" value="<?php echo set_value('kpa2_rating', 0); ?>" />
            <span class="kpa2_rating_text rate_text"><?php echo set_value('kpa2_rating', 0); ?></span>
	    </div>
	</div>
	<textarea name="kpa2" id="kpa2"><?php echo set_value('kpa2'); ?></textarea>
	
	
    <label>Would you like to publish this review or save it as a draft? You may come back and work on the review at any time, even after it is published.</label>
    <label><input type="radio" name="draft_pub" id="draft" value="0" /> Save Draft</label>
    <label><input type="radio" name="draft_pub" id="publish" value="1" /> Publish</label>
	
	<p><button name="button" id="button" value="true" type="submit" class="btn btn-primary">Save</button></p>
	
<?php $this->load->view('footer'); ?>

<?php $this->load->view('header'); ?>

	<?php if(isset($message)): ?>
	<div class="alert <?php echo $alert_type; ?>"><?php echo $message; ?></div>
	<?php endif; ?>
	
	<h1>Create a Review</h1>
	<?php echo validation_errors('<p>'); ?>
	
	<?php echo form_open('review/create'); ?>
	
	<h4>KPA 1</h4>
	
	<p>
  <label for="amount">Minimum number of bedrooms:</label>
  <input type="text" id="amount" style="border: 0; color: #f6931f; font-weight: bold;" />
</p>
<div id="slider-range-max"></div>
	
	<textarea name="kpa1" id="kpa1"></textarea>
	

	
	<p><button name="button" id="button" value="true" type="submit" class="btn btn-primary">Save</button></p>
	
<?php $this->load->view('footer'); ?>

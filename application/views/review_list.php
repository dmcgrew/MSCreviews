<?php $this->load->view('header'); ?>


	<h1>Your Reviews</h1>
	<?php  if(isset($records)): foreach($records as $row): ?>
        
        <?php $row->date_published = date("F j, Y"); ?>
		<p><?php echo anchor('review/view/'.$row->id, $row->date_published, 'class="review_link"');?></p>
       		
		<?php endforeach; ?>
		<?php else: ?>
		<h3>You do not have any reviews yet.</h3>
		<?php endif; ?>

<?php $this->load->view('footer'); ?>
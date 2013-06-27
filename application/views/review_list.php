<?php $this->load->view('header'); ?>


	<h1>Your Reviews</h1>
	<?php  if(isset($records)): foreach($records as $row): ?>
        
        <?php 
            $time = strtotime($row->date_published); 
            $date = date('F j, Y', $time);
            
        ?>
        
		<p><?php echo anchor('review/view/'.$row->id, $date, 'class="review_link"');?></p>
       		
		<?php endforeach; ?>
		<?php else: ?>
		<h3>There are no reviews available.</h3>
		<?php endif; ?>

<?php $this->load->view('footer'); ?>
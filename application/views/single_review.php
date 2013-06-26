<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
	<h1>Review page</h1>
	
	    <?php  if(isset($records)): foreach($records as $row): ?>

		<p>User ID: <?php echo $row->employee_id; ?></p>
        <p>KPA1:</p><?php echo $row->kpa1; ?>
        <p>Rating: <?php echo $row->kpa1_rating; ?></p>
		
		<?php endforeach; ?>
		<?php else: ?>
		<h3>No records were returned.</h3>
		<?php endif; ?>


	</body>
</html>

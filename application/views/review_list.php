<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
	<h1>Your Reviews</h1>
	<?php  if(isset($records)): foreach($records as $row): ?>

		<p><?php echo $row->date_published; ?></p>
       		
		<?php endforeach; ?>
		<?php else: ?>
		<h3>You do not have any reviews yet.</h3>
		<?php endif; ?>
	</body>
</html>

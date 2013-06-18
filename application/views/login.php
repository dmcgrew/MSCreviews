<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
	<h1>Login</h1>
	<?php echo form_open('login'); ?>
	<label>Username:</label> <?php echo form_input('username'); ?>
	<label>Password:</label> <?php echo form_input('password'); ?>
	<?php echo form_submit('submit', 'Login'); ?>
	<?php echo form_close(); ?>
	</body>
</html>

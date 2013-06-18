<!DOCTYPE html>
	<head>
<meta charset="utf-8" />
		<title>Create a Review</title>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
        tinymce.init({
            menubar:false,
            selector: "textarea",
            plugins: [
                "advlist lists link image charmap print preview anchor",
                "code",
                "insertdatetime media paste"
            ],
            toolbar: " undo redo | bold italic underline | bullist numlist outdent indent"
        });
        </script>
        
	</head>
	
	
	
	<body>
	<h1>Create a Review</h1>
	<?php echo form_open('review/create'); ?>
	
	<label for="kp1">KPA 1</label>
	<textarea name="kpa1" id="kpa1"></textarea>
	
	<label for="kp1">KPA 1 Rating</label>
	<input type="text" name="kpa1_rating" id="kpa1_rating"></input>	

	
	</body>
</html>

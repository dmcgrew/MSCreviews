<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <script type="text/javascript" src="<?php echo base_url(); ?>js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
        tinymce.init({
            menubar:false,
            selector: "textarea",
            plugins: [
                "advlist lists link image charmap print preview anchor",
                "code textcolor",
                "insertdatetime media paste"
            ],
            toolbar: "bold italic underline | bullist numlist outdent indent | forecolor backcolor emoticons | undo redo | code | preview"
        });
        </script>
        
        <link href="<?php echo base_url(); ?>css/redmond/jquery-ui-1.10.3.custom.css" rel="stylesheet" media="screen">                            
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" media="screen">
		
		
        
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
  
<?php $this->load->view('nav'); ?>
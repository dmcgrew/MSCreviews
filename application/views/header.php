<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script type="text/javascript">
      (function() {
        var config = {
          kitId: 'vah6mad',
          scriptTimeout: 3000
        };
        var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
      })();
    </script>


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
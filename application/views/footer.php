  </div>	
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.min.js"></script>
		
		<script>
			$(function() {
			    $( "#slider-range-max" ).slider({
			      range: "max",
			      min: 1,
			      max: 10,
			      value: 2,
			      slide: function( event, ui ) {
			        $( "#amount" ).val( ui.value );
			      }
			    });
			    $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
			  });
		</script>
  </body>
</html>
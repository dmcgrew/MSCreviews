  </div>	
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.min.js"></script>
		
		<script>
			$(function() {
			    $( "#slider-range-max" ).slider({
			      range: "max",
			      min: 0,
			      max: 5,
			      value: 0,
			      slide: function( event, ui ) {
			        $( "#kpa1_rating_value" ).val( ui.value );
			        $( "#kpa1_rating_text" ).text( ui.value );
			      }
			    });
			    $( "#kpa1_rating_value" ).val( $( "#slider-range-max" ).slider( "value" ) );
			    $( "#kpa1_rating_text" ).text( $( "#slider-range-max" ).slider( "value" ) );
			  });
		</script>
  </body>
</html>
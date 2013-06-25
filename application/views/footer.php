  </div>	
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    
    <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.3.custom.min.js"></script>
		
		<script>
			$(function() {
			    $( ".slider" ).slider({
			      range: "max",
			      min: 0,
			      max: 5,
			      create: function () {
                      $(this).slider( "option", "value", $(this).next().val() );
                  },
			      slide: function( event, ui ) {			        
			        //get the id of this slider
					var id = $(this).attr("id");
			        //select the input box that has the same id as the slider within it and set it's value to the current slider value. 
					$("span[class*=" + id + "]").text(ui.value);
					$("input[class*=" + id + "]").val(ui.value);
			      }
			    });
			  });
		</script>
  </body>
</html>
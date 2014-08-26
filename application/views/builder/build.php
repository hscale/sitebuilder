<style>
#builder-panel {
	width: 500px;
	height: 500px;
	border: 1px solid #333;
	margin: 20px;
	float: left;
}
#builder-component {
	width: 500px;
	height: 500px;
	border: 1px solid #333;
	margin: 20px;
	float: left;
}
</style>

<div id="builder-panel">

</div>

<div id="builder-component">
	<button class="draggable">Submit</button>
    <button class="draggable">Back</button>
    <form class="draggable droppable-form">
    	<fieldset>
        	<legend>Simple form</legend>
        </fieldset>
    </form>
    <input type="text" class="draggable">
</div>
<script>
$(function(e) {
	
	var dropAvailable = true;
	
	
    $( ".draggable" ).draggable({
		cancel: false,
		helper: "clone"
	});
	
	$( "#builder-panel" ).droppable({
		drop: function( event, ui ) {
			
			// Get the drag element
			var $element = ui.draggable.clone();
			
			// Control multi copy
			if(!$element.hasClass( "dragged" )) {
				$element.addClass( "dragged" );
				
				// Add Click Event
				$( $element ).mousedown(function(e) {
					$( $element ).parent( ".element-container" ).css({
						border: "1px solid #C03"
					});
				});
	
				// Set it to draggable
				$element.draggable({
					cancel: false,
					containment: $(this)
				})
				
				// Add a container
				var $elementContainer = $("<div>", { class: "element-container" });
				$elementContainer.css({
					
				});
				$elementContainer.append( $element );
				$( this ).append( $elementContainer );
				
				$element.css({
					left:		ui.position.left,
					top:		ui.position.top,
					position:	'absolute'
				});
			}
		}
	});
});

</script>
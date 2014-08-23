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
</div>
<script>
$(function(e) {
    $( ".draggable" ).draggable({
		cancel: false,
		helper: "clone"
	});
	
	$( "#builder-panel" ).droppable({
		drop: function( event, ui ) {
			var $component = ui.draggable.clone();
			
			if(!$component.hasClass( "dragged" )) {
				$component.addClass( "dragged" );
				$component.draggable({
					cancel: false,
					containment: $(this)
				})
				$(this).append($component);
				
				$component.css({
                    left: (ui.position.left),
                    top: (ui.position.top),
                    position: 'absolute'
                });
			}
		}
	});
});
</script>
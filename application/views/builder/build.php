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
    <button class="draggable" id="test">Back</button>
    <form class="draggable droppable-form">
    	<fieldset>
        	<legend>Simple form</legend>
        </fieldset>
    </form>
    <input type="text" class="draggable">
</div>
<script>
$(function(e) {
    
	var option = { width: 150, items: [
                { text: "Item One", icon: "sample-css/wi0126-16.gif", alias: "1-1", action: "" },
                { text: "Item Two", icon: "sample-css/ac0036-16.gif", alias: "1-2", action: "" },
                //this is normal menu item, menuAction will be called if this item is clicked on 
                { text: "Item Three", icon: "sample-css/ei0021-16.gif", alias: "1-3", action: "" },
                //this is a split line
                { type: "splitLine" },
                //this is a parent item, which has some sub-menu items
                { text: "Group One", icon: "sample-css/wi0009-16.gif", alias: "1-4", type: "group", width: 170, items: [
	                { text: "Group Three", icon: "sample-css/wi0054-16.gif", alias: "2-2", type: "group", width: 190, items: [
		                { text: "Group3 Item One", icon: "sample-css/wi0062-16.gif", alias: "3-1", action: "" },
		                { text: "Group3 Item Tow", icon: "sample-css/wi0063-16.gif", alias: "3-2", action: "" }
	                ]
	                },
	                { text: "Group Two Item1", icon: "sample-css/wi0096-16.gif", alias: "2-1", action: "" },
	                { text: "Group Two Item1", icon: "sample-css/wi0111-16.gif", alias: "2-3", action: "" },
	                { text: "Group Two Item1", icon: "sample-css/wi0122-16.gif", alias: "2-4", action: "" }
                ]
                },
                { type: "splitLine" },
                { text: "Item Four", icon: "sample-css/wi0124-16.gif", alias: "1-5", action: "" },
                { text: "Group Three", icon: "sample-css/wi0062-16.gif", alias: "1-6", type: "group", width: 180, items: [
	                { text: "Item One", icon: "sample-css/wi0096-16.gif", alias: "4-1", action: "" },
	                { text: "Item Two", icon: "sample-css/wi0122-16.gif", alias: "4-2", action: "" }
                ]
                }
                ]
        };
	
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

				});
				
				// Right Click Event
				$element.contextmenu(option);
				
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
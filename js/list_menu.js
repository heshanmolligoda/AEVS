
var lists = new Array();


lists['Central']    = new Array();
lists['Central'][0] = new Array('','Kandy','Matale','Nuwara Eliya');
lists['Central'][1] = new Array('','Kandy','Matale','Nuwara Eliya');


lists['Eastern']    = new Array();
lists['Eastern'][0] = new Array('','Ampara','Batticaloa','Trincomalee');
lists['Eastern'][1] = new Array('','Ampara','Batticaloa','Trincomalee');


lists['North Central']    = new Array();
lists['North Central'][0] = new Array('','Anuradhapura','Polonnaruwa');
lists['North Central'][1] = new Array('','Anuradhapura','Polonnaruwa');


lists['North Western']    = new Array();
lists['North Western'][0] = new Array('','Kurunegala','Puttalam');
lists['North Western'][1] = new Array('','Kurunegala','Puttalam');


lists['Northern']    = new Array();
lists['Northern'][0] = new Array('','Jaffna','Kilinochchi','Mannar','Mullaitivu','Vavuniya');
lists['Northern'][1] = new Array('','Jaffna','Kilinochchi','Mannar','Mullaitivu','Vavuniya');


lists['Sabaragamuwa']    = new Array();
lists['Sabaragamuwa'][0] = new Array('','Kegalle','Ratnapura');
lists['Sabaragamuwa'][1] = new Array('','Kegalle','Ratnapura');


lists['Southern']    = new Array();
lists['Southern'][0] = new Array('','Galle','Hambantota','Matara');
lists['Southern'][1] = new Array('','Galle','Hambantota','Matara');


lists['Uva']    = new Array();
lists['Uva'][0] = new Array('','Badulla','Monaragala');
lists['Uva'][1] = new Array('','Badulla','Monaragala');


lists['Western']    = new Array();
lists['Western'][0] = new Array('','Colombo','Gampaha','Kalutara');
lists['Western'][1] = new Array('','Colombo','Gampaha','Kalutara');


//--------------------------------------------------------------------------------------------------------------------------


// This function goes through the options for the given
// drop down box and removes them in preparation for
// a new set of values

function emptyList( box ) {
	// Set each option to null thus removing it
	while ( box.options.length ) box.options[0] = null;
}

// This function assigns new drop down options to the given
// drop down box from the list of lists specified

function fillList( box, arr ) {
	// arr[0] holds the display text
	// arr[1] are the values

	for ( i = 0; i < arr[0].length; i++ ) {

		// Create a new drop down option with the
		// display text and value from arr

		option = new Option( arr[0][i], arr[1][i] );

		// Add to the end of the existing options

		box.options[box.length] = option;
	}

	// Preselect option 0

	box.selectedIndex=0;
}

// This function performs a drop down list option change by first
// emptying the existing option list and then assigning a new set

function changeList( box ) {
	// Isolate the appropriate list by using the value
	// of the currently selected option

	list = lists[box.options[box.selectedIndex].value];

	// Next empty the slave list

	emptyList( box.form.district);

	// Then assign the new list values

	fillList( box.form.district, list );
}

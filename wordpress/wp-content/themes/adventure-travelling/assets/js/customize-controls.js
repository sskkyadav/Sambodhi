( function( api ) {

	// Extends our custom "adventure-travelling" section.
	api.sectionConstructor['adventure-travelling'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
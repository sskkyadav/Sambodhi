( function( api ) {

	// Extends our custom "elemento-it-solutions" section.
	api.sectionConstructor['elemento-it-solutions'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
( function( api ) {

	// Extends our custom "realestate-agent" section.
	api.sectionConstructor['realestate-agent'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
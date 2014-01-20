App.Models.Contact = Backbone.Model.extend({
	//validate
	validate: function(attrs){
		if(!attrs.first_name || !attrs.last_name){
			return 'First and Last Names are required';
		}

		if ( ! attrs.email_address){
			return 'Please enter a valid address.';
		}
	}
});
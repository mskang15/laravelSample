App.Collections.Contacts = Backbone.Collection.extend({
	model: App.Models.Contact,
	url: '/laravel/public/contacts'
});
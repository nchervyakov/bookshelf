/**
 * Created by Nikolay Chervyakov on 14.07.2014.
 */

App = Ember.Application.create({
});

App.HomeRoute = Routing.generate('home');
App.ApplicationAdapter = DS.RESTAdapter.extend({
    namespace: App.HomeRoute.substr(1, App.HomeRoute.length - 2)
});

App.Router.map(function() {
    // put your routes here
});

App.IndexRoute = Ember.Route.extend({
    model: function() {
        return this.store.find('library');
    }
});

App.IndexController = Ember.ArrayController.extend({});

Ember.Inflector.inflector.uncountable('library');
App.Library = DS.Model.extend({
    name: DS.attr('string')
});


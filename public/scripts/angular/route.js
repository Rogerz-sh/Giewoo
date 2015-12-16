/**
 * Created by roger on 15/11/2.
 */
(function (window, angular) {
    var app = window.RZ.app;

    app.config(['$routeProvider', function ($routeProvider) {
        $routeProvider
            .when('/', {
                templateUrl: 'views/home.html',
                controller: 'homeController'
            })
            .when('/job', {
                templateUrl: 'views/job.html',
                controller: 'jobController'
            });
    }]);
})(window, angular);
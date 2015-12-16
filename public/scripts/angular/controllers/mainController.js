/**
 * Created by roger on 15/10/31.
 */
(function (window, angular) {
    var app = window.RZ.app;

    app.controller('mainController', ['$scope', '$http', function ($scope, $http) {
        $scope.menuIndex = 0;
        $http.get('/enterprise/menu')
            .success(function (data) {
                console.log(data);
                $scope.menus = data;
            });
        $scope.setIndex = function (index) {
            $scope.menuIndex = index;
        }
    }]);
})(window, angular);
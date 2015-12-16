/**
 * Created by roger on 15/10/31.
 */
(function (window, angular) {
    window.RZ = window.RZ || {};
    window.RZ.app = angular.module('app', ['ngRoute']);

    window.addEventListener('DOMContentLoaded', function () {
        angular.bootstrap(document, ['app']);
    }, false);
})(window, angular);
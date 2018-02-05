var app = angular.module("sa_app", ['ngRoute']);
   .config(function ($routeProvider) {
       $routeProvider
           .when('/dashboard', {
               templateUrl: 'index.php',
               controller: 'dashboardController'
           })
           .otherwise({ redirectTo: '/dashboard'});
})
/* Criaremos um controller geral, e aqui adicionaremos algumas configurações*/
.controller('pageController', function ($scope) {
 
})

.controller('dashboardController', function ($scope) {
 
})
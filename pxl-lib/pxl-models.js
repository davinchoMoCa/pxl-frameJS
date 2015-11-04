
var pxlWeb = angular.module('pxlApp', ['ngResource','ngRoute','ngSanitize']);

pxlWeb.config(function($routeProvider,$locationProvider){
	 $routeProvider
	 .when('/init',{
		  templateUrl: 'pxl-views/initial.html',
		  controller: 'PxlCtrl'
	 })
	 .otherwise({
		  redirectTo:'/init'
	 });
});

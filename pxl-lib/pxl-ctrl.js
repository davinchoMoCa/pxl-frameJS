pxlWeb.controller('PxlCtrl', ['$scope','$http','$timeout','$window','$routeParams','$templateCache','$location', function($scope,$http,$timeout,$window,$routeParams,$templateCache,$location){

	function efecto(){
		var ani = ' animated';

		this.entrada 	= 'fadeInDown'+ ani;
		this.salida		= 'bounceInLeft'+ ani;
		this.brinca 	= 'rubberBand'+ ani;
		this.estira 	= 'jello'+ ani;
	}
	var efectos = new efecto();

	$scope.intro = efectos.entrada;

	$('.icon-isotipoPxl').hover(function(){
		$(this).removeClass(efectos.estira).addClass(efectos.brinca);
	}).mouseout(function(){
		$(this).removeClass(efectos.brinca).addClass(efectos.estira);
	});

}]);

"use strict";
angular.module('gdo6').
controller('GDOOpenHoursCtrl', function GDOOpenHoursCtrl($scope, $mdDialog) {
	$scope.data = { openHours: '' };
	
//	var HoursCtrl = this;
	
	$scope.initJSON = function(json) {
		console.log('GDOOpenHoursCtrl.initJSON()', json);
	};
	
	$scope.confirmHours = function() {
		console.log('GDOOpenHoursCtrl.confirmHours()');
		$mdDialog.cancel();

	};
	$scope.closeDialog = function() {
		console.log('GDOOpenHoursCtrl.closeDialog()');
		$mdDialog.cancel();
	};
	
	$scope.openHoursDialog = function($event) {
		console.log('GDOOpenHoursCtrl.openHoursDialog()')
		$mdDialog.show({
			templateUrl: 'GDO/OpenTimes/js/open-hours.html',
//			locals: {
//				initPosition: initPosition,
//				text: text,
//			},
			clickOutsideToClose: true,
			controller: GDOOpenHoursCtrl,
			parent: angular.element(window.document.body),
			targetEvent: $event,
			onComplete: function() {
			}
		});
	};
});
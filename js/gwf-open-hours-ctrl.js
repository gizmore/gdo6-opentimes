"use strict";
angular.module('gdo6').
controller('GDOOpenHoursCtrl', function GDOOpenHoursCtrl($scope, $mdDialog) {
	$scope.data = { openHours: '' };
	
//	var HoursCtrl = this;
	
	$scope.initJSON = function(json) {
		console.log('GDOOpenHoursCtrl.initJSON()', json);
		$scope.data.config = json;
		$scope.data.openHours = json.val;
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
			locals: {
				rules: $scope.data.openHours.split(';'),
				openHours: $scope.data.openHours,
			},
			clickOutsideToClose: true,
			controller: GDOOpenHoursCtrl,
			parent: angular.element(window.document.body),
			targetEvent: $event,
			onComplete: function() {
			}
		});
	};
});
angular.module("angDemo", [])
	.directive("linkAttr", function(){
		return function (scope, element, attrs) {
			var myLinks = element.find("a");
			for (var i=0; i<items.length; i++){
				myLinks.eq(i).append("success");
			}
		}
	})

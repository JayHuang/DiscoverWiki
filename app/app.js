'use strict';

angular.module('articleCtrl', []);

var app = angular.module("app", [
	'ngAnimate', 
	'articleCtrl'])
.directive('articleListing', function() {
  return {
    restrict: 'AE',
    templateUrl: 'app/articles/article-listing.tpl.php'
  }
}).directive('socialShare', function() {
  return {
  	restrict: 'AE',
    templateUrl: 'app/articles/social-share.tpl.php'
  }
});
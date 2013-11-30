var app = angular.module("app", ["ngAnimate"]);

function apiCtrl($scope, $timeout, $http) {
  $scope.wikiArticles = [];

  $scope.wikiAPI = (function(){
    return {
      getRandomArticle : function() {
        return $http.jsonp("http://en.wikipedia.org/w/api.php?action=query&generator=random&grnnamespace=0&prop=extracts|categories&explaintext&exintro=&format=json&callback=JSON_CALLBACK", function (data) {});
      },

      getURLforArticle : function(pageid) {
        return $.getJSON('http://en.wikipedia.org/w/api.php?action=query&prop=info&pageids='+pageid+'&inprop=url&format=json&callback=?jsonp_callback', function(url) {
        });
      }
    }
  })();

  $scope.serverAPI = (function() {
    return {
      storeArticle : function(data) {
        return $http.post("api/storeArticle", (data));
      }
    }
  })();

  $scope.fireAPICalls = function() {
    if($scope.wikiArticles.length < 10) {
      $scope.wikiAPI.getRandomArticle().success(function(data) {
        angular.forEach(data.query.pages, function(page, key) {
          $scope.wikiArticles.push(page);
          // console.log(page);
          // $scope.serverAPI.storeArticle(page);
        });
        $timeout($scope.fireAPICalls, 0);
      });
    }
  }

  $scope.shuffleArticles = function() {
    $scope.wikiArticles.reverse();
  }

  $scope.getVersion = function() {
    return $http.get("api/version").success(function(data){
      console.log(data);
    });
  }
}  

  // "use strict";
  // window.wikiData;
  // var wikiAPI = (function(){
  //   var self = this;
  //   return {
  //     getRandomArticle : function() {
  //         return $.getJSON("http://en.wikipedia.org/w/api.php?action=query&generator=random&grnnamespace=0&prop=extracts&exintro=&format=json&callback=?", function (data) {
  //       });
  //     }
  //   }
  // })();

  // var serverAPI = (function() {
  //   return {
  //     storeArticle : function(data) {
  //       return $.ajax({
  //         url: "api/storeArticle",
  //         type: "post",
  //         data: JSON.stringify(data),
  //         contentType: 'application/json; charset=utf-8',
  //         dataType: 'json'
  //       });
  //     }
  //   }
  // })();

  // function fireAPICalls() {
  //   wikiAPI.getRandomArticle().done(function(data) {
  //     for(var id in data.query.pages) {
  //       wikiAPI.data = data.query.pages[id];
  //     }
  //     window.data = wikiAPI.data;
  //     console.log(wikiAPI.data);
  //     serverAPI.storeArticle(wikiAPI.data).done(function(data){
  //     });
  //     // setTimeout(fireAPICalls, 0);
  //   });
  // }

  // function getVersion() {
  //   return $.ajax({
  //     url: "api/version",
  //     type: "get"
  //   }).done(function(data){
  //     console.log(data);
  //   });
  // }
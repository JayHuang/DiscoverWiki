angular.module('articleCtrl').controller('articleCtrl', function($scope, $timeout, $http) {
  $scope.wikiArticles = [];
  var maxArticles = 10;
  var isGrabbingArticles = false;

  $scope.wikiAPI = (function(){
    return {
      getRandomArticle : function() {
        return $http.jsonp("http://en.wikipedia.org/w/api.php?action=query&generator=random&grnnamespace=0&prop=extracts|categories&explaintext&exintro=&format=json&callback=JSON_CALLBACK", function (data) {});
      },

      getURLforArticle : function(pageid) {
        return $http.jsonp('http://en.wikipedia.org/w/api.php?action=query&prop=info&pageids='+pageid+'&inprop=url&format=json&callback=?JSON_CALLBACK', function(url) {});
      }
    }
  })();

  $scope.serverAPI = (function() {
    return {
      storeArticle : function(data) {
        return $http.post("api/storeArticle", (data));
      },

      getVersion : function() {
        $http.get("api/version").success(function(data){
          console.log(data);
        });
      }
    }
  })();

  $scope.articlesAPI = (function() {
    return {
      shuffleArticles : function() {
        $scope.wikiArticles.reverse();
      },
      removeArticle : function(index) {
        $scope.wikiArticles.splice(index, 1);
        $scope.fireAPICalls();
      },
      toggleShare : function(currArticle) {
        var previousState = currArticle.socialShare;
        angular.forEach($scope.wikiArticles, function(article) {
          article.socialShare = false;
        });
        currArticle.socialShare = previousState ? false : true;
      }
    }
  })();

  $scope.fireAPICalls = function() {
    if($scope.wikiArticles.length < maxArticles) {
      if(isGrabbingArticles)
        return;
      isGrabbingArticles = true;
      $scope.wikiAPI.getRandomArticle().success(function(data) {
        angular.forEach(data.query.pages, function(page, key) {
          $scope.wikiAPI.getURLforArticle(page.pageid).success(function(url){
            angular.forEach(url.query.pages, function(urlpage, urlkey){
              page.url = urlpage.fullurl;
              $scope.wikiArticles.push(page);
              isGrabbingArticles = false;
              // $scope.serverAPI.storeArticle(page);
              $timeout($scope.fireAPICalls, 0);
            });
          });
        });
      });
    }
  }
});
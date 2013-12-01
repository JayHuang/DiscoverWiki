<html>
<head>
  <title>Discover Wikipedia!</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="angular.js/build/angular.min.js"></script>
  <script src="angular.js/build/angular-resource.min.js"></script>
  <script src="angular.js/build/angular-animate.min.js"></script>
  <script src="js/apiCtrl.js"></script>
  <link rel="stylesheet" href="css/normalize-2.1.3.min.css">
  <link rel="stylesheet" href="css/pure-0.3.0-grids.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body ng-app="app" ng-controller="apiCtrl" ng-init="fireAPICalls();">
  <div id="articles-listing">
    <div id="base" class="pure-g-r">
      <input class="pure-u-4-5" type="text" id="article-filter" placeholder="Filter articles" ng-model="search">
      <span class="pure-u-1-5" id="article-count">{{filtered.length}} article(s)</span>
    </div>
    <div class="article-listing" ng-animate="'animate'" ng-repeat="article in filtered = (wikiArticles | filter:search)">
      <span class="article-title">{{article.title}}</span><a ng-click="articles.removeArticle($index)" class="delete-article" title="Remove article">&#10006;</a>
      <!-- <ul>
        <li ng-repeat="category in article.categories">{{category.title}}</li>
      </ul> -->
      <div class"article-extract">{{article.extract}}</div>
    </div>
  </div>
</body>
</html>
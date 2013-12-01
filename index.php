<html>
<head>
  <title>Discover Wikipedia!</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="angular.js/build/angular.min.js"></script>
  <script src="angular.js/build/angular-resource.min.js"></script>
  <script src="angular.js/build/angular-animate.min.js"></script>
  <script src="js/apiCtrl.js"></script>
  <link rel="stylesheet" href="css/main.css" type="text/css"/>
</head>
<body ng-app="app" ng-controller="apiCtrl" ng-init="fireAPICalls();">
  <div class="random-articles">
    <input type="text" placeholder="Look for matching content" ng-model="search">
    <span>{{filtered.length}} article(s)</span>
    <div class="article-listing" ng-animate="'animate'" ng-repeat="article in filtered = (wikiArticles | filter:search)">
      <span class="article-title">{{article.title}}</span><span ng-click="articles.removeArticle($index)" class="delete-article" title="Remove article">&#10006;</span>
      <!-- <ul>
        <li ng-repeat="category in article.categories">{{category.title}}</li>
      </ul> -->
      <div class"article-extract">{{article.extract}}</div>
    </div>
  </div>
</body>
</html>
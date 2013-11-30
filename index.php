<html ng-app="app">
<head>
  <title>Discover Wikipedia!</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="angular.js/build/angular.min.js"></script>
  <script src="angular.js/build/angular-resource.min.js"></script>
  <script src="angular.js/build/angular-animate.min.js"></script>
  <script src="js/apiCtrl.js"></script>
  <link rel="stylesheet" href="css/main.css" type="text/css"/>
</head>
<body ng-controller="apiCtrl" ng-init="fireAPICalls();">
  <div class="random-articles">
    <input type="text" placeholder="Look for matching content" ng-model="search">
    <button class="btn">Search</button>
    <span>{{wikiArticles.length}} article(s)</span>
    <div class="article-listing" ng-animate="'animate'" ng-repeat="article in wikiArticles | filter:search">
      <span>{{article.title}}</span>
      <ul>
        <li ng-repeat="category in article.categories">{{category.title}}</li>
      </ul>
      {{article.extract}}
    </div>
  </div>
</body>
</html>
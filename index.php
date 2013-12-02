<html>
<head>
  <title>Discover Wikipedia!</title>
  <link rel="shortcut icon" href="img/favicon.ico" />
  <?php include_once("analyticstracking.php") ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="angular.js/build/angular.min.js"></script>
  <script src="angular.js/build/angular-resource.min.js"></script>
  <script src="angular.js/build/angular-animate.min.js"></script>
  <script src="js/apiCtrl.js"></script>
  <link rel="stylesheet" href="css/normalize-2.1.3.min.css">
  <link rel="stylesheet" href="css/pure-0.3.0-grids.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529b989f77fb3475"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body ng-app="app" ng-controller="apiCtrl" ng-init="fireAPICalls();">
  <div id="article-listings">
    <div id="base" class="pure-g-r">
      <input class="pure-u-4-5" type="text" id="article-filter" placeholder="Filter articles" ng-model="search">
      <span class="pure-u-1-5" id="article-count">{{filtered.length}} article(s)</span>
    </div>
    <div article-listing class="article-listing" ng-animate="'animate'" ng-repeat="article in filtered = (wikiArticles | filter:search)">
      <!--article-listing template here-->
    </div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Discover Wikipedia!</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="app/vendor/normalize-2.1.3.min.css">
  <link rel="stylesheet" href="app/vendor/pure-0.3.0-grids.min.css">
  <link rel="stylesheet" href="app/css/main.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="app/vendor/angular.min.js"></script>
  <script src="app/vendor/angular-touch.min.js"></script>
  <script src="app/vendor/angular-resource.min.js"></script>
  <script src="app/vendor/angular-animate.min.js"></script>
  <script src="app/app.js"></script>
  <script src="app/articles/controllers/articleCtrl.js"></script>
  <script type="text/javascript">var addthis_config = { "data_track_clickback": false, "data_track_addressbar":false };</script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529b989f77fb3475#async=1"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once("app/analyticstracking.php") ?>
</head>
<body ng-app="app" ng-controller="articleCtrl" ng-init="fireAPICalls();">
  <div class="wrapper">
    <div id="article-listings">
      <div id="base" class="pure-g-r">
        <input class="pure-u-4-5" type="text" id="article-filter" placeholder="Filter articles" ng-model="search">
        <span class="pure-u-1-5" id="article-count">{{filtered.length}} article(s)</span>
      </div>
      <div article-listing class="article-listing" ng-animate="'animate'" ng-repeat="article in filtered = (wikiArticles | filter:search)">
        <!--article-listing template here-->
      </div>
    </div><!-- end #article-listings -->
    <div class="push"></div>
  </div><!--end .wrapper -->
  <footer>A weeknight project.</footer>
</body>
</html>
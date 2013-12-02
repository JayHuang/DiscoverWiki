<span class="article-title">
  <a href="{{article.url}}">{{article.title}}</a>
</span>
<div class="click-items">
  <a ng-click="articles.removeArticle($index)" class="delete-article clickable" title="Remove article">
    <span>&#10006;</span>
  </a>
  <a ng-click="articles.toggleShare(article)" class="share-article clickable">
    <span class="plus-sign" title="Share">&#10006;</span>
    <div social-share ng-show="article.socialShare" class="social-share arrow-down">
      <!--social-share template here-->
    </div>
  </a>
</div>
<!--
<ul>
  <li ng-repeat="category in article.categories">{{category.title}}</li>
</ul>
-->
<div class"article-extract">{{article.extract}}</div>
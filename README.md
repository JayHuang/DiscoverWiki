#DiscoverWiki

Site to help bring the wealth of information on Wikipedia to users by abstracting small snippets, making it easier to identify and share interesting content.

To ensure there is a diverse selection of articles, 10 snippets are presented to the user at anytime, with new ones appearing when old ones are deleted.

The search bar searches through the current selection of snippets and displays only the ones that match.

DiscoverWiki works on both desktop and mobile via media queries.

**Desktop:**

![Desktop](/screenshots/desktop.png)

**Mobile:**

![Desktop](/screenshots/mobile.png)

###Setup notes

Be sure to modify the [Google Analytics tracking code](https://github.com/JayHuang/DiscoverWiki/blob/master/app/analyticstracking.php) with your own.

Fork, pull, and build into angular.js folder:
[angular.js build instructions](http://docs.angularjs.org/#building-and-testing-angularjs_installing-dependencies)

The angular.js files reside under `angular.js/build/` or simply copy existing angular files into that folder.

The `api` folder currently contains a PHP driver for RethinkDB, with a SlimPHP backend. The integration with the server is currently removed, so deleting the folder is fine. Everything is happening client-side.

HelveticaNeue-Light is not available in the repository as this is a licensed font. Please obtain your own license if you wish to use it.

###Future plans

Display popular (most shared) articles, add about page.

###Contribution

Feel free to extend the project/submit pull requests.

###Copyright and license

Copyright 2013 Jay Huang under the MIT license.

  "use strict";
  var wikiAPI = (function(){
      var self = this;
      return {
        getRandomArticle : function() {
            return $.getJSON("http://en.wikipedia.org/w/api.php?action=query&generator=random&grnnamespace=0&prop=extracts&exintro=&format=json&callback=?", function (data) {
          });
        }
      }
    })();

  var serverAPI = (function() {
    return {
      storeArticle : function(data) {
        return $.ajax({
          url: "api/storeArticle",
          type: "post",
          data: JSON.stringify(data),
          contentType: 'application/json; charset=utf-8',
          dataType: 'json'
        });
      }
    }
  })();

  function fireAPICalls() {
    wikiAPI.getRandomArticle().done(function(data) {
      for(var id in data.query.pages) {
        wikiAPI.data = data.query.pages[id];
      }
      window.data = wikiAPI.data;
      console.log(wikiAPI.data);
      serverAPI.storeArticle(wikiAPI.data).done(function(data){
      });
      // setTimeout(fireAPICalls, 0);
    });
  }

  function getVersion() {
    return $.ajax({
      url: "api/version",
      type: "get"
    }).done(function(data){
      console.log(data);
    });
  }
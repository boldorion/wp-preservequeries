jQuery('a').each(function() {
    var href = jQuery(this).attr('href');
    var querystring =
    window.location.href.slice(window.location.href.indexOf('?') + 1);
        if(href && querystring){
           if(querystring.indexOf('=') >= 0)
              {
                  jQuery(this).attr('href', href+'?'+querystring);
              }
        }
   });

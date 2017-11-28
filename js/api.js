(function ($) {
	
      $.ajax({
      method: 'get',
      url: api_vars.root_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1',

   }).done( function(data) {
    
     // Arrange Api content
     var quote = data[0].content.rendered;
     var author = data[0].title.rendered;
     var source = data[0]._qod_quote_source;
    
    if(source.length) {
       author += ',';
     }
     console.log(author);
      
     $('#quote').html(quote);
     $('#author').html(author);
     $('#source').html('<a href="' + source + '">' + source + '</a>');
 
   });

$('#new-quote-button').on('click', function(event) {
   event.preventDefault();
   
   $.ajax({
      method: 'get',
      url: api_vars.root_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1',

   }).done( function(data) {
     
     var quote = data[0].content.rendered;
     var author = data[0].title.rendered;
     var source = data[0]._qod_quote_source;

     if(source.length) {
       author += ',';
     }

      // populate slug for address bar
     var slug = data[0].slug;
     var sluggedurl = api_vars.home_url + '/' + slug + '/';
   
      history.pushState(null, null, sluggedurl);

     $('#quote').html(quote);
     $('#author').html(author);
     $('#source').html('<a href="' + source + '">' + source + '</a>');
 
   });
});

    $('#submit').on('click', function(event) {
      event.preventDefault();
      
     var quote = $('#quote-content').val();
     var author = $('#quote-author').val();
     var source = $('#quote-source').val();
     var source_url = $('#quote-source-url').val();

      $.ajax({
         method: 'post',
         url: api_vars.root_url + 'wp/v2/posts/',
         data: {
            title: author,
            content: quote,
            _qod_quote_source: source,
            _qod_quote_source_url: source_url,
            status: 'publish'
         },
        beforeSend: function(xhr) {
         xhr.setRequestHeader( 'X-WP-Nonce', api_vars.nonce );
      }

      }).done( function() {
         alert('Success! Thank you for this post.');
      
         $("#quote-content, textarea").val("");
         $("#quote-author, textarea").val("");
         $("#quote-source, textarea").val("");
         $("#quote-source-url, textarea").val("");
      
      
      });
   });


})(jQuery);



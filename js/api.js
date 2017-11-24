(function ($) {
	

$('#new-quote-button').on('click', function(event) {
   event.preventDefault();
    $('article').empty();
    $('#quote').empty();
    $('#author').empty();  
    $('#source').empty();
    $('#link').empty();

   $.ajax({
      method: 'get',
      url: api_vars.root_url + 'wp/v2/posts/?filter[orderby]=rand&filter[posts_per_page]=1',

   }).done( function(data) {
     
     var slug = data[0].slug;
     var quote = data[0].content.rendered;
     var author = data[0].title.rendered;
     var source = data[0]._qod_quote_source;
     var link = data[0]._qod_quote_source_url;
  
     var d1 = document.getElementById('quote');
     d1.insertAdjacentHTML('beforeend', quote );
     var d2 = document.getElementById('author');
     d2.insertAdjacentHTML('beforeend',  author );
     var d3 = document.getElementById('source');
     d3.insertAdjacentHTML('beforeend',  '<a href="' + source + '">' + source + '</a>' );
     var d4 = document.getElementById('link');
     d4.insertAdjacentHTML('beforeend',  '<a href="' + link + '">' + link + '</a>' );
     
     $('#quote').append(history.pushState(null, null, slug));

     $(window).on('load', function(){
    $('#quote').empty(history.pushState(null, null, slug));
    });

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



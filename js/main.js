$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
    
        
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: false
      });

      /*
        To have multiple slideshows on the same page
        they just need to have separate IDs
      */
      $('#slides2').slidesjs({
        width: 940,
        height: 528,
        navigation: false,
        start: 3,
        play: {
          auto: true
        }
      });

      $('#slides3').slidesjs({
        width: 940,
        height: 528,
        navigation: false
      });
    });

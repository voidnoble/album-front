/**
 * @brief site default app javascript
 * @author Created by yjkwak
 * @date 2016. 2. 11.
 * @description
 */
$(document).ready(function() {
    $('html').removeClass('fullscreen');

    // if Detail page
    if ((/\/\d+/).test(location.pathname)) {
        // Carousel
        if (imgs.length > 0) {
            // 1. Initialize fotorama manually.
            var $fotoramaDiv = $('.fotorama:first').fotorama();
            // 2. Get the API object.
            var fotorama = $fotoramaDiv.data('fotorama');
            // Dynamic loading
            fotorama.load(imgs);
        } else {
            $('.fotorama:first').html('<h5 style="margin:2em 0; text-align: center">데이터가 없습니다.</h5>');
        }

        /*// 관련기사 등록하지 않은 경우, 공통 관련기사 로딩
         if ($('aside .list-group li').length == 0) {
         $('aside .list-group').load("http://"+ location.host +"/data/albums/relnews.html");
         }*/
    }
});

// Google Analytics
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-43825484-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');

ga('create', 'UA-71884324-1','auto',{'name' : 'motorgraphTracker'});
ga('require', 'displayfeatures');
ga('motorgraphTracker.send', 'pageview');

var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-43825484-1']);_gaq.push(['_trackPageview']);
(function(d){var ga=d.createElement('script');ga.async=true;ga.src=('https:'==d.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';
    var s=d.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);
})(document);
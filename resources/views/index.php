<!DOCTYPE html>
<!--[if lt IE 8]><html prefix="og: http://ogp.me/ns#" lang="ko" class="no-js ie7 oldie"><![endif]-->
<!--[if IE 8]><html prefix="og: http://ogp.me/ns#" lang="ko" class="no-js ie8 oldie"><![endif]-->
<!--[if IE 9]><html prefix="og: http://ogp.me/ns#" lang="ko" class="no-js ie9"><![endif]-->
<!--[if gt IE 9]><!--> <html prefix="og: http://ogp.me/ns#" lang="ko" class="no-js"> <!--<![endif]-->
<head>
    <title>모터그래프 화보</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="모터그래프 화보">
    <meta name="keywords" content="모터그래프,화보,앨범,갤러리,motorgraph,album,photo,gallery">
    <link rel="canonical" href="http://albums.motorgraph.com">
    <!-- SNS -->
    <meta property="fb:app_id" content="851526674895192">
    <meta property="og:type" content="site">
    <meta property="og:url" content="http://albums.motorgraph.com">
    <meta property="og:title" content="모터그래프 화보">
    <meta property="og:description" content="모터그래프 화보">
    <meta property="og:image" content="http://www.motorgraph.com/image2006/motorgraph_img2.jpg">
    <meta name="twitter:image:src" content="http://www.motorgraph.com/image2006/motorgraph_img2.jpg">
    <link rel="image_src" href="http://www.motorgraph.com/image2006/motorgraph_img2.jpg">
    <meta name="twitter:card" content="photo">
    <meta name="twitter:site" content="@motorgraph_com">
    <meta name="twitter:title" content="모터그래프 화보">
    <!-- /SNS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black translucent">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon-precomposed" href="http://static.motorgraph.com/static/img/logo.svg">
    <link rel="icon" href="http://static.motorgraph.com/static/img/logo.svg" sizes="32x32">
    <!--[if IE]><link rel="shortcut icon" href="http://static.motorgraph.com/static/img/logo.svg"><![endif]-->
    <meta name="msapplication-TileColor" content="#65a244">
    <meta name="msapplication-TileImage" content="http://static.motorgraph.com/static/img/logo.svg">
    <!--<link rel="alternate" href="album.rss" type="application/rss+xml">-->
    <meta name="robots" content="index,follow">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://static.motorgraph.<?=((env("APP_ENV") == "local")? "local" : "com/static")?>/album/res/common-v3.css">
    <link rel="stylesheet" href="assets/css/all.min.css?v=2016021502">
    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--[if lt IE 8]><p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> to better experience this site.</p><![endif]-->

<header class="page-header">
    <hgroup class="container">
        <a href="http://www.motorgraph.com" class="logo" title="모터그래프 홈페이지로 이동">
            <img src="http://static.motorgraph.<?php echo((env("APP_ENV") == "local")? "local" : "com/static"); ?>/album/res/logo.png" alt="모터그래프">
        </a>
        <a href="http://albums.motorgraph.<?php echo((env("APP_ENV") == "local")? "local" : "com"); ?>" title="모터그래프 화보로 이동">화보</a>
    </hgroup>
</header>

<div class="banner__header container">
    <script type="text/javascript" src="http://cas.criteo.com/delivery/ajs.php?zoneid=254978&amp;nodis=1&amp;cb=77016183640&amp;exclude=undefined&amp;charset=UTF-8&amp;loc=http%3A//m.motorgraph.com/"></script>
</div>

<article class="container">
    <div class="row center-block">
        <!-- <h3 class="page-title">화보</h3> -->
        <?php if (count($albums) > 0): ?>
        <div class="row thumbnails">
            <?php foreach($albums as $album): ?>
            <div class="item col-xs-4 col-sm-3 col-md-3 col-lg-3">
                <a href="/<?=$album->id?>" class="thumbnail">
                    <img alt="<?=$album->name?>" src="/data/albums/<?=substr($album->cover_image, 0, 4)?>/<?=substr($album->cover_image, 4, 2)?>/<?=substr($album->cover_image, 6, 2)?>/thumb/<?=$album->cover_image?>">
                    <div class="caption">
                        <h4><?=$album->name?></h4>
                        <!--
                        <p><?=$album->description?></p>
                        <p><?=count($album->Photos)?> 건</p>
                        <p><?=date("Y-m-d h:i", strtotime($album->created_at))?></p>
                        -->
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="row">
            <button class="fetch-more btn btn-block" data-page="1">더보기</button>
        </div>
    </div>
</article>

<div class="banner__middle container">
    <div class="row center-block">
        <script type="text/javascript" src="http://cas.criteo.com/delivery/ajs.php?zoneid=140082&amp;nodis=1&amp;cb=40237543102&amp;exclude=undefined&amp;charset=UTF-8&amp;loc=http%3A//m.motorgraph.com/"></script>
    </div>
</div>

<footer class="container">
    <p>Copyright &copy; Motorgraph All rights reserved.</p>
</footer>

<!-- 광고 -->
<div class="banner__right-wing">
    <script type="text/javascript">
        document.MAX_ct0 ='';
        var m3_u = (location.protocol=='https:'?'https://cas.criteo.com/delivery/ajs.php?':'http://cas.criteo.com/delivery/ajs.php?');
        var m3_r = Math.floor(Math.random()*99999999999);
        document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
        document.write ("zoneid=140074");document.write("&amp;nodis=1");
        document.write ('&amp;cb=' + m3_r);
        if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
        document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
        document.write ("&amp;loc=" + escape(window.location));
        if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
        if (document.context) document.write ("&context=" + escape(document.context));
        if ((typeof(document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0,4) == 'http')) {
            document.write ("&amp;ct0=" + escape(document.MAX_ct0));
        }
        if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
        document.write ("'></scr"+"ipt>");
    </script>
</div>
<div class="banner__left-wing">
    <script type="text/javascript">
        document.MAX_ct0 ='';
        var m3_u = (location.protocol=='https:'?'https://cas.criteo.com/delivery/ajs.php?':'http://cas.criteo.com/delivery/ajs.php?');
        var m3_r = Math.floor(Math.random()*99999999999);
        document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
        document.write ("zoneid=140074");document.write("&amp;nodis=1");
        document.write ('&amp;cb=' + m3_r);
        if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
        document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
        document.write ("&amp;loc=" + escape(window.location));
        if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
        if (document.context) document.write ("&context=" + escape(document.context));
        if ((typeof(document.MAX_ct0) != 'undefined') && (document.MAX_ct0.substring(0,4) == 'http')) {
            document.write ("&amp;ct0=" + escape(document.MAX_ct0));
        }
        if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
        document.write ("'></scr"+"ipt>");
    </script>
</div>

<script src="http://static.motorgraph.com/static/album/res/modernizr-2.6.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
<script>
    var imgs = [],
        img = null;
    <?php if(count($album->files) > 0): ?>
        <?php foreach($album->files as $file): ?>
            img = {
                'img': "<?=$album->url?>/data/albums/<?=substr($file->image, 0, 4)?>/<?=substr($file->image, 4, 2)?>/<?=substr($file->image, 6, 2)?>/<?=$file['image']?>",
                'thumb': "<?=$album->url?>/data/albums/<?=substr($file->image, 0, 4)?>/<?=substr($file->image, 4, 2)?>/<?=substr($file->image, 6, 2)?>/thumb/<?=$file['image']?>"
            };

            imgs.push(img);
        <?php endforeach; ?>
    <?php endif; ?>

    $(function() {
        var page = '<?=$albums->currentPage()?>';
        if (!page) page = 1;
        page = parseInt(page);

        $('.fetch-more').on('click', function (evt) {
            $(this).blur();

            var url = '/?page='+ ++page;

            $.get(url, function (response) {
                $('.thumbnails').append(response);
            });
        });
    });
</script>
<script src="assets/js/all.min.js?v=2016021502"></script>
</body>
</html>
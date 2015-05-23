<?php
    //get the simplepie library
    require_once('php/autoloader.php');
    //grab the feeds
    $feed = new SimplePie();
    //our list of RSS
$feed->set_feed_url(array(
    'http://dailymail.co.uk',
    
    ));
    //enable caching
    $feed->enable_cache(true);
    //complete path for caching system
    $feed->set_cache_location('cache');
    //set the amount of seconds you want to cache the feed
    $feed->set_cache_duration(1500);
    //init the process
    $feed->init();
    //let simplepie handle the content type (atom, RSS...)
    $feed->handle_content_type();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tech News | A free Aggregator Template | made in PV.M Garage</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

        function adPostWidth() {

                var ovWid = $('#header').width(); /*We use the header width that has a min-width of 700px in the style*/
                var postN = Math.floor(ovWid / 50%);
                var widFix = Math.floor(ovWid / postN);

                $(".post_cont").css({ 'width' : widFix});

        }

  function WidthHead() {

                var ovWid = $('#header').width();
                var widFixHead = Math.floor(ovWid / 3);

                $(".head_info").css({ 'width' : widFixHead - 2});

        }

        adPostWidth();
  WidthHead();  

        $(window).resize(function () {
                adPostWidth();
    WidthHead();
        }); 

});

</script>
</head>
<body>

<div id="header">
<!--here header content-->
</div>

<div id="down_head">
<!--here down-header content-->
</div>

<div id="news_container">
<div id="news_container" class="clearfix">

<?php foreach ($feed->get_items(0, 10) as $item): ?>

<div class="post_cont">
      <div class="content">
      <h2><?php echo $item->get_date('j M Y'); ?> | <?php echo $item->get_date('g:i a'); ?></h2>
      <h2><img src="<?php $feed = $item->get_feed();  ?>"  /><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
      <span class="visit_link"><a href="<?php echo $item->get_permalink(); ?>">direct link to article</a></span>
      </div>
</div>

<?php endforeach; ?>

</div>
</div>

<div id="footer">
<!--here footer content-->
</div>

</body>
</html>
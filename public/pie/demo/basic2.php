<?php
 
// Make sure SimplePie is included. You may need to change this to match the location of autoloader.php
// For 1.0-1.2:
#require_once('../simplepie.inc');
// For 1.3+:
require_once('../autoloader.php');
 

 $url = 'http://bbc.co.uk';
 $url = 'http://dailymail.co.uk';
// We'll process this feed with all of the default options.
$feed = new SimplePie();
 
// Set the feed to process.
$feed->set_feed_url($url);
 
// Run SimplePie.
$feed->init();
 
// This makes sure that the content is sent to the browser as text/html and the UTF-8 character set (since we didn't change it).
$feed->handle_content_type();
 
// Let's begin our XHTML webpage code.  The DOCTYPE is supposed to be the very first thing, so we'll keep it on the same line as the closing-PHP tag.
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
 
 
<html xmlns="
<head>
	<title>Sample SimplePie Page</title>
 
 
	<style type="text/css">
	body {
		font:12px/1.4em Verdana, sans-serif;
		color:#333;
		background-color:#fff;
		width:700px;
		margin:50px auto;
		padding:0;
	}
 
	a {
		color:#326EA1;
		text-decoration:underline;
		padding:0 1px;
	}
 
	a:hover {
		background-color:#333;
		color:#fff;
		text-decoration:none;
	}
 
	div.header {
		border-bottom:1px solid #999;
	}
 
	div.item {
		padding:5px 0;
		border-bottom:1px solid #999;
	}
	</style>
 
</head>
<body>
 
	<div class="header">
		<h1><a href="<?php echo $feed->get_permalink(); ?>"><?php echo $feed->get_title(); ?></a></h1>
		<p><?php echo $feed->get_description(); ?></p>
	</div>
 
	<?php
	/*
	Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
	*/
	foreach ($feed->get_items() as $item):
	?>
 
		<div class="item">
			<h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
			<p><?php echo $item->get_description(); ?></p>
			<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
		</div>
 
	<?php endforeach; ?>
 
</body>
</html>

       <?php if ($feed->error): ?>
		  <p><?php echo $feed->error; ?></p>
		<?php endif; ?>
  
		<?php foreach ($feed->get_items() as $item): ?>
 
 <?php if ($enclosure = $item->get_enclosure())
	{
		// Display the thumbnail as an image and link it back to the YouTube page, and adding the video's title as a tooltip for the link.
		echo '<a href="' . $item->get_permalink() . '" title="' . $item->get_title() . '"><img class="u-full-width-alt" src="' . $enclosure->get_thumbnail() . '" /></a>';
	}
	?>
    		<div class="chunk">
    			<h6 style="background:url(<?php $feed = $item->get_feed(); ?>)"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>
    			<p class="footnote">Source: <a href="<?php $feed = $item->get_feed(); echo $feed->get_permalink(); ?>">
    			<?php $feed = $item->get_feed(); echo $feed->get_title(); ?></a> |<?php echo $item->get_description(); ?> <?php echo $item->get_date('j M Y | g:i a T'); ?></p>
    		</div>
 
		<?php endforeach; ?>
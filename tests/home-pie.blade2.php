<?php


    //get the simplepie library
    require_once('php/autoloader.php');

    // Extend the SimplePie class and override the existing sort_items() function with our own.
class SimplePie_Random_Sort extends SimplePie
{
    public static function sort_items($a, $b)
    {
        return rand(-1, 1);
    }
}
    
    //grab the feed
    $feed = new SimplePie_random_sort();
    
    $feed->set_feed_url(array(
    	'http://dailymail.co.uk',
    	'',
    ));

    
    $feed->set_item_limit(3);
    //enable caching
    $feed->enable_cache(true);
    
    //provide the caching folder
    $feed->set_cache_location('cache');
    
    //set the amount of seconds you want to cache the feed
    $feed->set_cache_duration(1800);
    
    //init the process
    $feed->init();
    
    //let simplepie handle the content type (atom, RSS...)
    $feed->handle_content_type();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>FeedSmusher</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<div class="container">
	<div class="nine columns">
      	<?php foreach ($feed->get_items() as $item): ?>
 			<div class="four columns">
 				<div class="pie-wrap">
					 <?php if ($enclosure = $item->get_enclosure())
						{
						// Display the thumbnail as an image and link it back to the YouTube page, and adding the video's title as a tooltip for the link.
						echo '<a href="' . $item->get_permalink() . '" title="' . $item->get_title() . '"><img class="u-full-width-alt" src="' . $enclosure->get_thumbnail() . '" /></a>';
						}
						?>
    		
    					<h6 style="background:url(<?php $feed = $item->get_feed(); ?>)"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h6>
    					<p class="footnote">Source: <a href="<?php $feed = $item->get_feed(); echo $feed->get_permalink(); ?>">
    					<?php $feed = $item->get_feed(); echo $feed->get_title(); ?></a> |<?php echo $item->get_description(); ?> <?php echo $item->get_date('j M Y | g:i a T'); ?></p>
    		
    			</div>
 			</div>
		<?php endforeach; ?>
	</div>
	<div class="three columns"> Three columns</div>
</div>

</body>

</html>
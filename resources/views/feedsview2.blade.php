<?php
 
// Make sure SimplePie is included. You may need to change this to match the location of autoloader.php
// For 1.0-1.2:
#require_once('../simplepie.inc');
// For 1.3+:
require_once('php/autoloader.php');
 
// We'll process this feed with all of the default options.
$url = 'dailymail.co.uk';
 
$feed = new SimplePie();
$feed->set_feed_url($url);
$feed->init();
 
// default starting item
$start = 0;
 
// default number of items to display. 0 = all
$length = 10; 
 
// if single item, set start to item number and length to 1
if(isset($_GET['item']))
{
        $start = $_GET['item'];
        $length = 1;
}
 
// set item link to script uri
$link = $_SERVER['REQUEST_URI'];
 
// loop through items
foreach($feed->get_items($start,$length) as $key=>$item)
{
 
        // set query string to item number
        $queryString = '?item=' . $key;
 
        // if we're displaying a single item, set item link to itself and set query string to nothing
        if(isset($_GET['item']))
        {
                $link = $item->get_link();
                $queryString = '';        
        }
 
        // display item title and date    
        echo '<a href="' . $link . $queryString . '">' . $item->get_title() . '</a>';
        echo ' <small>'.$item->get_date().'</small><br>';
 
        // if single item, display content
        if(isset($_GET['item']))
        {
                echo ' <small>'.$item->get_content().'</small><br>';
        }
        echo '<br>';
}
 
?>
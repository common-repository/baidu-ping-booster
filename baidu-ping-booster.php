<?php
/*
Plugin Name: Baidu Ping Booster
Plugin URI: http://www.samee.us
Donate link: http://www.seoleaders.club
Description: Boost your website or blog on Baidu Search Engine. Keep update search engine with your blog. Contact its Developer, <a href="http://www.samee.us">SEO Expert</a> Samee Ullah Feroz
Version: 0.1
Author: Samee Ullah Feroz
Author URI: http://www.samee.us
*/

add_action('simple_edit_form', 'ping_pps');
function ping_pps()  {
	$ping_url = "http://ping.baidu.com/ping/RPC2";	//replace 'Ping URL' Don't Change It
	
	echo '<script>document.post.trackback_url.defaultValue="' . $ping_url . '";</script>';
}

?>
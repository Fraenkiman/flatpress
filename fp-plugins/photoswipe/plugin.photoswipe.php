<?php

/**
 * Plugin Name: PhotoSwipe
 * Version: 2.0.3
 * Plugin URI: https://www.flatpress.org
 * Description: Displays images and galleries with <a href="http://photoswipe.com">PhotoSwipe</a>.<br>Part of the standard distribution.&nbsp;Needs the BBCode plugin to be activated.
 * Author: FlatPress
 * Author URI: https://www.flatpress.org
 */

/**
 * --------
 * About
 * --------
 *
 * This plugin displays single images and whole image galleries with the JavaScript library
 * PhotoSwipe (photoswipe.com). Since it uses FlatPress default functionality for building
 * the image HTML, you may use the documented parameters of the [img] tag such as "alt",
 * "title", "height", "width" or "float" (see FlatPress BBCode documentation for details).
 *
 *
 * --------
 * Usage
 * --------
 *
 * For a single image: [img="images/image.jpg"]
 * Floating image with given width: [img="images/image.jpg" width="200" float="right"]
 *
 * For an image gallery: [gallery="images/GalleryName"]
 * Gallery width given image height: [gallery="images/GalleryName" height="100"]
 *
 *
 * --------
 * HTML+CSS
 * --------
 *
 * The HTML code of the images is generated by the FlatPress standard function
 * do_bbcode_img() (see fp-plugins/bbcode/plugin.bbcode.php). Therefore, standard image
 * attributes (such as "width", "height", etc.) can be used. Floating images will get a
 * corresponding CSS class (e.g. "floatright").
 * The plugin will wrap that HTML in a <figure> element with the same CSS class as the
 * image (e.g. "floatright"). The <figure> also contains a <figcaption> displaying the
 * title of the image.
 * The <figure> element itself is surrounded by a <div class="photoswipe">.
 *
 * Galleries are displayed as a series of images as described above, encapsulated by a
 * <div class="img-gallery GalleryName">.
 *
 *
 * --------
 * Captions
 * --------
 *
 * Captions of the gallery images are read from a text file "captions.conf" within the
 * gallery directory. You may edit them with the Gallery captions plugin.
 */

// Check if the current request is not an RSS feed
if (!is_rss_feed()) {
	// Include the plugin's PHP files
	include_once dirname(__FILE__) . '/photoswipefunctions.class.php';

	// Initialize the BBCode tags of the plugin
	add_filter('init', 'PhotoSwipeFunctions::initializePluginTags');

	// Inject necessary JavaScript into the <head> section
	add_action('wp_head', 'PhotoSwipeFunctions::echoScriptTags', 2);
} else {
	// Optional debugging log entry
	// error_log('PhotoSwipe plugin has been deactivated for the RSS feed.');
}

// Function to detect if the current request is for an RSS or Atom feed
function is_rss_feed() {
	// Check if 'feed' parameter is set and matches valid feed types
	if (isset($_GET ['feed']) && in_array(strtolower($_GET ['feed']), ['rss2', 'atom'])) {
		return true;
	}

	// Check if 'x' parameter starts with 'feed:'
	if (isset($_GET ['x']) && strpos(strtolower($_GET ['x']), 'feed:') === 0) {
		return true;
	}

	// Fallback for REQUEST_URI if it's not available
	$request_uri = strtolower($_SERVER ['REQUEST_URI'] ?? ($_SERVER ['SCRIPT_NAME'] . ($_SERVER ['QUERY_STRING'] ?? '')));

	// Check if the request URI explicitly matches a feed endpoint
	if (preg_match('#/(feed/rss2|feed/atom)(/|$)#', $request_uri)) {
		return true;
	}

	// Optional: Check if the content type matches RSS/Atom types
	if (!empty($_SERVER ['HTTP_ACCEPT'])) {
		if (strpos($_SERVER ['HTTP_ACCEPT'], 'application/rss+xml') !== false) {
			return true;
		}
		if (strpos($_SERVER ['HTTP_ACCEPT'], 'application/atom+xml') !== false) {
			return true;
		}
	}

	// If none of the conditions match, it's not a feed request
	return false;
}
?>

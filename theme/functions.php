<?php 
/**
 * Theme related functions.
 *
 */
 
/**
 * Get title fot the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function get_title($title) {
	global $sunray;
 	return $title . (isset($sunray['title_append']) ? $sunray['title_append'] : null);
}
 
 
 /**
  * Create navigation / menu for the site.
  *
  * @param string $menu for navigation bar.
  * @return string as html for the navigation bar.
  */
function get_navbar($menu) {
 	$html = "<nav>\n<ul class='{$menu['class']}'>\n";
 	foreach ($menu['items'] as $item) {
 		$selected = $menu['callback_selected']($item['url']) ? " class='selected' " : null;
 		$html .= "<li{$selected}><a href='{$item['url']}' title='{$item['title']}'>{$item['text']}</a></li>\n";
 	}
 	$html .= "</ul>\n</nav>\n";
 	return $html;
}
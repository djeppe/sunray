<?php 
/**
 * Config-file for sunray.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);	// Report all type of errors
ini_set('display_errors', 1);
ini_set('output_buffering', 0);


/**
 * Define sunray paths.
 *
 */
define('SUNRAY_INSTALL_PATH', __DIR__ . '/..');
define('SUNRAY_THEME_PATH', SUNRAY_INSTALL_PATH . '/theme/render.php');
define('SUNRAY_IMAGE_PATH', SUNRAY_INSTALL_PATH . '/webroot/img/');

/**
 * Include bootstrapping functions.
 *
 */
include(SUNRAY_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\/-_]/', '', __DIR__));
session_start();


/**
 * Create the sunray variable.
 *
 */
$sunray = array();


/**
 * Site wide settings.
 *
 */
$sunray['lang'] = 'sv';
$sunray['title_append'] = ' | sunray';

$sunray['header'] = <<<EOD
<header>
<div class="container">
	<div class="logo_left">
		<img class="sitelogo" src="img/logo.png" alt="sunray Logo" />
		<span class="sitetitle">SunRay WebbTEMPlate</span>
		<span class="siteslogan">Re-useable modules for webdevelopment with PHP</span>
	</div>
</div>
</header>
EOD;




$sunray['footer'] = <<<EOD
<footer>
<div class="container">
<aside class="footer-left">
        <h2>Contact</h2>
        	<div class="footer_box">
        		<ul>
        			
        			<li>
        				<a href='https://www.facebook.com' target="_blank">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-facebook"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>        			
        			
        			<li>
        				<a href='https://plus.google.com' target="_blank">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-google-plus-3"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        			
        			<li>
        				<a href='mailto:@gmail.con?Subject=Hello%20again' target="_top">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-mail"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        		</ul>
        	</div>
    </aside>

    <aside class="footer-right">
        <h2>Validation</h2>
        	<div class="footer_box">
        		<ul>
        			<li>
        				<a href='http://validator.w3.org/check/referer' target="_blank">        				
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-html5"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        
        			<li>
        				<a href='http://jigsaw.w3.org/css-validator/check/referer' target="_blank">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-css3"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        			
        			<li>
        				<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance' target="_blank">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-twitter"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        		</ul>
        	</div>
    </aside>

    <aside class="footer-center">
        <h2>Links</h2>
       		<div class="footer_box">
        		<ul>
        			<li>
        				<a href='https://www.dropbox.com' target="_blank">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-dropbox"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        	
        			<li>
        				<a href='http://open.spotify.com/' target="_blank">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-spotify"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        			
        			<li>
        				<a href='http://instagram.com' target="_blank">
        					<span class="glyph_style">
        					<span aria-hidden="true" class="icon-instagram"></span>
        					&nbsp;
        					</span>
        				</a>
        			</li>
        		</ul>
        	</div>
    </aside>
    
</div>
</footer>
    
EOD;
/**
<footer>
<div class="container">
<table>
	<tr>
		<td>
			<h2>About</h2>
		
		</td>
		
		<td>
			<h2>Contact</h2>
			<div>
				<ul>
					<a href='https://www.facebook.com' target="_blank">
						<li>
						<span class="glyph_style">
							<span aria-hidden="true" class="icon-facebook"></span>
							&nbsp;
						</span>
						</li>
					</a>
		
					<a href='https://plus.google.com' target="_blank">
						<li>
						<span class="glyph_style">
							<span aria-hidden="true" class="icon-google-plus-3"></span>
							&nbsp;
						</span>
						</li>
					</a>
			
					<a href='http://instagram.com' target="_blank">
						<li>
						<span class="glyph_style">
							<span aria-hidden="true" class="icon-skype"></span>
							&nbsp;
						</span>
						</li>
					</a>
				</ul>
			</div>
		</td>
		
		<td>
			<h2>Validation</h2>

		</td>
		
		<td>
			<h2>Links</h2>
			
		</td>
	</tr>
</table>
</div>
</footer>
EOD;

*/
/**
<footer>
<div class="container">
	<div id="half_left" class="half">
	
	<div class="half">
	<h2 class="h2">About</h2>
		<div class="info">
		<img src="" alt="no image"></img>
		<p>My name is Jesper and I'm the creator of the SunRay webtemplate.</p>
		</div>
	</div>

	<div class="half">
	<h2>Contact</h2>
		<ul>
			<a href='https://www.facebook.com' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-facebook"></span>
					&nbsp;
				</span>
				</li>
			</a>

			<a href='https://plus.google.com' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-google-plus-3"></span>
					&nbsp;
				</span>
				</li>
			</a>
	
			<a href='http://instagram.com' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-skype"></span>
					&nbsp;
				</span>
				</li>
			</a>
		</ul>
	</div>
	</div>

	<div id="half_right" class="half">
	
	<div class="half">
	<h2>Validation</h2>
		<ul>
			<a href='http://validator.w3.org/check/referer' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-html5"></span>
					&nbsp;
				</span>
				</li>
			</a>

			<a href='http://jigsaw.w3.org/css-validator/check/referer' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-css3"></span>
					&nbsp;
				</span>
				</li>
			</a>
	
			<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-twitter"></span>
					&nbsp;
				</span>
				</li>
			</a>
		</ul>
	</div>
		
	
	<div class="half">
	<h2>Links</h2>
		<ul>
			<a href='https://www.dropbox.com' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-dropbox"></span>
					&nbsp;
				</span>
				</li>
			</a>
	
			<a href='http://open.spotify.com' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-spotify"></span>
					&nbsp;
				</span>
				</li>
			</a>
			
			<a href='http://instagram.com' target="_blank">
				<li>
				<span class="glyph_style">
					<span aria-hidden="true" class="icon-instagram"></span>
					&nbsp;
				</span>
				</li>
			</a>
		</ul>
	</div>
	</div>
	<span class='copyright'>&copy; 2013 Jesper Norrman</span>
</div>

</footer>



<script>
document.getElementById("glyphs").addEventListener("click", function(e) {
	var target = e.target;
	if (target.tagName === "INPUT") {
		target.select();
	}
});
</script>

EOD;
*/

/**
 * Theme related settings.
 *
 */
 
// Menu as Array 
$sunray['navbar'] = array(
	'class' => 'nb-styled',
	'items' => array (
		'home' => array('text'=>'&lt; Home &gt;', 'url'=>'page01.php', 'title'=>'Home (Presentation)'),
		'report' => array('text'=>'&lt; Page02 &gt;', 'url'=>'page02.php', 'title'=>'Page02'),
		'sourcecode' => array('text'=>'&lt; Sourcecode &gt;', 'url'=>'source.php', 'title'=>'Sourcecode'),
	),

	'callback_selected' => function($url) {
		if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
			return true;
		}
	}
);

$sunray['navbar_entypo'] = <<<EOD

<nav>
		<ul>
			<li>
				<a href='https://www.facebook.com' target="_blank">
					<span class="glyph_style">
					<span aria-hidden="true" class="icon-facebook"></span>
					&nbsp;
					</span>
				</a>
			</li>

			<li>
				<a href='https://plus.google.com' taget="_blank">
					<span class="glyph_style">
					<span aria-hidden="true" class="icon-google-plus"></span>
					&nbsp;
					</span>
				</a>
			</li>
	
			<li>
				<a href='http://instagram.com' target="_blank">
					<span class="glyph_style">
					<span aria-hidden="true" class="icon-twitter"></span>
					&nbsp;
					</span>
				</a>
			</li>
		</ul>
</nav>

EOD;


//$sunray['stylesheet'] 	= 'css/style.css';
$sunray['stylesheets'] 	= array('css/style.css');
$sunray['favicon']		= 'favicon.ico';


/**
 * Settings for JavaScript
 *
 */
$sunray['modernizr'] 	= 'js/modernizr.js';
$sunray['jquery']		= '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$overlod['jquery']	= null; // To disable jQuery
$sunray['javascript_include'] = array();
// $sunray['javascript_include'][] = array('js/main.js'); // To add extra javascript files.


/**
 * Google analytics.
 *
 */
$sunray['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics.
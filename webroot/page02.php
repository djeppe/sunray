<?php 
/**
 * This is sunray pagecontroller
 *
 */ 
// Include the essential config-file which also creates the $sunray variable with
include(__DIR__.'/config.php');
 
// Do it and store it all in variables in the Batman container.
$sunray['title'] = "Page02";
 
$sunray['header'];

$sunray['main'] = <<<EOD
<h1>Page02</h1>
<h2>Why do we use it?</h2>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
EOD;

$sunray['footer'];


// Finally, leave it all to the rendering phase of sunray.
// Here the HTML is generated
include(SUNRAY_THEME_PATH);
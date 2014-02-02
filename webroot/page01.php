<?php 
/**
 * This is sunray pagecontroller
 *
 */ 
// Include the essential config-file which also creates the $sunray variable with
include(__DIR__.'/config.php');
 
// Do it and store it all in variables in the Batman container.
$sunray['title'] = "Page01";
 
$sunray['header'];

$sunray['main'] = <<<EOD
<h1>Page01</h2>
<h2>What is Lorem Ipsum?</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
EOD;

$sunray['footer'];


// Finally, leave it all to the rendering phase of sunray.
// Here the HTML is generated
include(SUNRAY_THEME_PATH);
 
?>
<?php 
/**
 *
 *
 */
// Include the essential config-file which also creates the $sunray variable with its defaults.
include(__DIR__ . '/config.php');

// Do it and store it all in variables in the sunray container.
$sunray['title'] = "404";
$sunray['header'] = "";
$sunray['main'] = "This is a sunray 404. Document is not here.";
$sunray['footer'] = "";

// Send the 404 header
header("HTTP/1.0 404 Not found");

// Finally, leave it all to the rendering phase of sunray.
include(SUNRAY_THEME_PATH);
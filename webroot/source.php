<?php 
/**
 * This is a SunRay pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$sunray['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..', 'add_ignore' => array('.htaccess')));


// Do it and store it all in variables in the Anax container.
$sunray['title'] = "Visa källkod";

$sunray['main'] = "<h1>Visa källkod</h1>" . $source->View();


// Finally, leave it all to the rendering phase of Anax.
include(SUNRAY_THEME_PATH);
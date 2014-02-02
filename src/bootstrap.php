<?php 
/**
 * Bootstrapping functions, essential and needed for Overlord to work
 * together with some common helpers.
 *
 */

/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
	echo "sunray: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
} 
set_exception_handler('myExceptionHandler');

 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
 	$path = SUNRAY_INSTALL_PATH . "/src/{$class}/{$class}.php";
 	if(is_file($path)) {
 		include($path);
 	} else {
 		throw new exception("Classfile '{$class}' does not exist.");
 	}
}
spl_autoload_register('myAutoloader');

function dump($array) {
  echo "<hr /><pre>" . htmlentities(print_r($array, 1)) . "</pre><hr />";
}
<?php

// Load App
require_once 'autoloader.php';

// Start Controller : NAMESPACE\CLASSNAME
$controller = new Controllers\LoginController();

// Call Controller method
$controller->index();
// END SCRIPT

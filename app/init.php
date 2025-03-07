<?php
session_start();

require_once 'core/App.php';
require_once 'core/Controller.php';

spl_autoload_register(function($class) {
    require_once 'models/' . $class . '.php';
});
?>
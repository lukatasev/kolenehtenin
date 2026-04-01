<?php
require __DIR__ . "/Polyfill.php";

require __DIR__ . "/Blade.php";
$public  = dirname(__DIR__) . "/Public";
$compile = dirname(__DIR__) . "/Compiled";
$blade   = new BladeOne($public, $compile);

require __DIR__ . "/Helper.php";
require __DIR__ . "/Http.php";
$arg    = new Arg();
$header = new Header($_SERVER);
$get    = new Get($_GET);

require __DIR__ . "/Route.php";
$route = new Route();

define("INDLUCE_CHECK", true);
?>
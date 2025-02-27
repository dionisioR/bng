<?php
session_start();

use bgn\System\Router;

require_once __DIR__ . "/../vendor/autoload.php";

Router::dispatch();


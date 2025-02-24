<?php

namespace bng\Controllers;

abstract class BaseController
{
    public function view(){
        // require_once ("../app/views/layouts/html_header.php");
        // require_once ("../app/views/layouts/html_footer.php");
        require_once(__DIR__ . "/../views/layouts/html_header.php");
        echo "<h1>Base Controller</h1>";
        require_once(__DIR__ . "/../views/layouts/html_footer.php");

    }
}
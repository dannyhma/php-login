<?php

namespace Himaone\PhpLogin\Controller;

use Himaone\PhpLogin\App\View;

class HomeController
{

    function index()
    {
        View::render('Home/index', [
            "title" => "PHP Login Management",
        ]);
    }
}
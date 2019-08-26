<?php

namespace App\Http\Controllers;

class IndexController
{
    public function index()
    {
        return array(
            "welcome" => "how are u"
        );
    }

    public function welcome()
    {
        return "This is welcome method :) ";
    }
}
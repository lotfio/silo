<?php namespace App\Http\Controllers;


class ApiController
{
    public function index()
    {
        return array(
            "welcome" => "from API controller"
        );
    }
}
<?php namespace App\Http\Controllers;

/**
 * @author    <contact@lotfio.net>
 * @package   Silo PHP framework
 * @version   1.0.0
 * @license   MIT
 * @category  Framework
 * @copyright 2019 Lotfio Lakehal
 * 
 */

class ApiController
{
    public function index()
    {
        return array(
            "welcome" => "from API controller"
        );
    }
}
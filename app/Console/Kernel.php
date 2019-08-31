<?php namespace App\Console;

use Ouch\Ouch;
use OoFile\Conf;
use Aven\Facades\Aven;

class Kernel
{
    /**
     * use ouch for better  cli on development
     *
     * @return void
     */
    public function enableErrorHandler()
    {
        $ouch = new Ouch;
        $ouch->enableErrorHandler();
    }

    /**
     * load config files
     *
     * @return void
     */
    public function loadConfig()
    {
        return Conf::add(dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'conf/');
    }

    /**
     * needed for aven cli
     * 
     * @return void
     */
    public function loadWebRoutes()
    {
        aven::config(array(
            "namespace" => Conf::app("namespace"),
            "cache"     => Conf::app("cache")
        ));

        require Conf::app("routes") . "web.php"; // load routes

        Aven::init();
    }
}
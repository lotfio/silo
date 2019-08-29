<?php namespace App\Kernel;

use OoFile\Conf;
use Ouch\Ouch;
use Aven\Facades\Aven;

class Http
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function enableErrorHandler()
    {
        $ouch = new Ouch;
        $ouch->enableErrorHandler();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function loadConfig()
    {
        return Conf::add(dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'conf/');
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function loadWebRoutes()
    {
        aven::config(array(
            "namespace" => conf("namespace"),
            "cache"     => conf("cache")
        ));

        require conf("routes") . "web.php"; // load routes

        Aven::init();
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function loadApiRoutes()
    {

    }
}
<?php namespace App\Http;

use OoFile\Conf;
use Ouch\Ouch;
use Aven\Facades\Aven;

class Kernel
{
    /**
     * enable ouch error handler method
     *
     * @return void
     */
    public function enableErrorHandler()
    {
        $ouch = new Ouch;
        $ouch->enableErrorHandler(env('APP_ENV'));
    }

    /**
     * load OoFile Config
     *
     * @return void
     */
    public function loadConfig()
    {
        return Conf::add(dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'conf/');
    }

    /**
     * load web routes method
     *
     * @return void
     */
    public function loadWebRoutes()
    {
        aven::config(array(
            "namespace" => Conf::app("namespace"),
            "cache"     => Conf::app("cache")
        ));

        return require Conf::app("routes") . "web.php"; // load routes
    }

    /**
     * load api routes method
     *
     * @return void
     */
    public function loadApiRoutes()
    {
        return require Conf::app("routes") . "api.php"; // load routes
    }

    /**
     * bind aven router
     */
    public function bind()
    {
        return Aven::init();
    }
}
<?php namespace App\Http;

/**
 * @author    <contact@lotfio.net>
 * @package   Silo PHP framework
 * @version   1.0.0
 * @license   MIT
 * @category  Framework
 * @copyright 2019 Lotfio Lakehal
 *
 */

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
        $ouch->enableErrorHandler(env('APP_ENV', 'pro'));
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
            "cache"     => Conf::path("cache") . 'routes'
        ));

        return require Conf::path("routes") . "web.php"; // load routes
    }

    /**
     * load api routes method
     *
     * @return void
     */
    public function loadApiRoutes()
    {
        return require Conf::path("routes") . "api.php"; // load routes
    }

    /**
     * bind aven router
     */
    public function bind()
    {
        return Aven::init();
    }
}
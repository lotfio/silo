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
    public function bindOuchHandler()
    {
        $ouch = new Ouch;
        $ouch->enableErrorHandler(env('APP_ENV', 'pro'));
        return $this;
    }

    /**
     * load OoFile Config
     *
     * @return void
     */
    public function loadConfig()
    {
        Conf::add(dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'conf/');
        return $this;
    }

    /**
     * load web routes method
     *
     * @return void
     */
    public function loadWebRoutes()
    {
        aven::config(array(
            "namespace" => Conf::namespace("controllers"),
            "cache"     => Conf::path("cache") . 'routes'
        ));

        require Conf::path("routes") . "web.php"; // load routes
        return $this;
    }

    /**
     * load api routes method
     *
     * @return void
     */
    public function loadApiRoutes()
    {
        require Conf::path("routes") . "api.php"; // load routes
        return $this;
    }

    /**
     * caprice templating engine bind
     *
     * @return void
     */
    public function bindCaprice()
    {
        return $this;
    }

    /**
     * bind aven router
     */
    public function bind()
    {
        $this->bindOuchHandler()
             ->loadConfig()
             ->loadWebRoutes()
             ->loadApiRoutes()
             ->bindCaprice();
        return Aven::init();
    }
}
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

class Kernel
{
    /**
     * router instance
     *
     * @var Aven\Router
     */
    protected $silo;

    /**
     * set up http router
     */
    public function __construct()
    {
        $this->silo =  new \Aven\Router($_SERVER['REQUEST_URI'] ?? '/');
    }

    /**
     * enable ouch error handler method
     *
     * @return void
     */
    public function setErrorHandler() : self
    {
        (new Ouch)->enableErrorHandler(_env('APP_ENV', 'pro'));
        return $this;
    }

    /**
     * load OoFile Config
     *
     * @return void
     */
    public function loadConfig() : self
    {
        Conf::loadDir(dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'conf/');
        return $this;
    }

    /**
     * load web routes method
     *
     * @return void
     */
    public function loadWebRoutes() : self
    {
        $silo  = $this->silo;
        require_once Conf::path("routes") . "web.php"; // load routes
        return $this;
    }

    /**
     * load api routes method
     *
     * @return void
     */
    public function loadApiRoutes() : self
    {
        $silo  = $this->silo;
        require_once Conf::path("routes") . "api.php"; // load routes
        return $this;
    }

    /**
     * bind aven router
     */
    public function boot()
    {
        $this->setErrorHandler()->loadConfig()
             ->loadWebRoutes()->loadApiRoutes();
        $this->silo->init();
    }
}
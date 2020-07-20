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


    public function __construct()
    {
        $this->silo =  new \Aven\Router($_SERVER['REQUEST_URI'] ?? '/');
    }
    /**
     * enable ouch error handler method
     *
     * @return void
     */
    public function setErrorHandler()
    {
        (new Ouch)->enableErrorHandler(_env('APP_ENV', 'pro'));
        return $this;
    }

    /**
     * load OoFile Config
     *
     * @return void
     */
    public function loadConfig()
    {
        Conf::loadDir(dirname(__DIR__,2) . DIRECTORY_SEPARATOR . 'conf/');
        return $this;
    }

    /**
     * load web routes method
     *
     * @return void
     */
    public function loadWebRoutes()
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
    public function loadApiRoutes()
    {
        $silo  = $this->silo;
        require_once Conf::path("routes") . "api.php"; // load routes
        return $this;
    }

    /**
     * bind aven router
     */
    public function bind()
    {
        $this->setErrorHandler()->loadConfig()->loadWebRoutes();
        return $this->silo->init();
    }
}
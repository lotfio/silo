<?php namespace App\Console;

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
     * load console commands
     *
     * @return self
     */
    public function loadConsoleCommands() : self
    {

        return $this;
    }

    /**
     * bind aven router
     */
    public function bind()
    {
        return $this->setErrorHandler()->loadConfig();
    }
}
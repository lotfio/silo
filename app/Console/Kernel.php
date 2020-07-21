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
use Conso\{
    Conso,Input,Output
};

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
        $silo = $conso = new Conso(new Input, new Output);

        $silo->setSignature(file_get_contents(Conf::conso('signature')));
        $silo->setCommandsPath('app/Console/Commands');
        $silo->setCommandsNamespace("App\\Console\\Commands");
        $silo->setName("Silo");
        $silo->setVersion(_env('APP_VERSION', ''));

        // load commands
        foreach(Conf::conso('commands') as $command)
            require_once $command;

        $silo->run();

        return $this;
    }

    /**
     * bind aven router
     */
    public function boot()
    {
        $this->setErrorHandler()->loadConfig()->loadConsoleCommands();
    }
}
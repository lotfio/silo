<?php

namespace App\Console\Commands;

/**
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   0.2.0
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 *
 * @time      Generated at 30-08-2019 by conso
 */

use OoFile\DotEnv;
use Conso\Command;
use Conso\Contracts\CommandInterface;
use Conso\Exceptions\{OptionNotFoundException, FlagNotFoundException};

class Env extends Command implements CommandInterface
{
    /**
     * command flags
     *
     * @var array
     */
    protected $flags = [];

    /**
     * command description method
     *
     * @return string
     */
    protected $description = "Env command description.";

    /**
     * command execute method
     *
     * @param  string $sub
     * @param  array  $options
     * @param  array  $flags
     * @return void
     */
    public function execute(string $sub, array $options, array $flags)
    {
        switch($sub)
        {
            case 'init' : $this->initEnv(); break;
            case 'dev'  : $this->setDevelopmentMode(); break;
            case 'pro'  : $this->setProductionMode(); break;
            default     : $this->output->writeLn("\n Your application environment is set to " . env("APP_ENV") . "\n"); break;
        }
    }

    private function initEnv()
    {
        $dotEnv = new DotEnv;
        $dotEnv->init(array(
            "APP_KEY" => SHA1(SHA1(uniqid()))
        ));

        return $this->output->writeLn("\n Silo envirenment has been initialized \n");
    }

    /**
     * setting development mode
     *
     * @return void
     */
    private function setDevelopmentMode()
    {

    }

    /**
     * setting production mode
     *
     * @return void
     */
    private function setProductionMode()
    {

    }

    /**
     * command help method
     *
     * @return string
     */
    public function help() { return "Env command help.";}
}
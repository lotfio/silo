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
     * environment values
     *
     * @var array
     */
    private $env = array(

    );

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
            case 'init' : $this->generateAppKey(); $this->init(); break;
            case 'dev'  : $this->setDevelopmentMode(); break;
            case 'pro'  : $this->setProductionMode(); break;
            default     : $this->output->writeLn("\n Your application environment is set to ");
                        env('APP_ENV') == 'dev' ?
                            $this->output->writeLn("Development\n", 'green')
                        :   $this->output->writeLn("Production\n", 'green');
            break;
        }
    }

    /**
     * env init method
     *
     * @return void
     */
    private function init()
    {
        $dotEnv = new DotEnv;
        $dotEnv->init($this->env);
        return $this->output->writeLn("\n Silo environment has been initialized \n");
    }

    /**
     * generate app key method
     *
     * @return void
     */
    private function generateAppKey()
    {
        $this->env["APP_KEY"] = 'base64-' . base64_encode(md5(time()));
    }

    /**
     * setting development mode
     *
     * @return void
     */
    private function setDevelopmentMode()
    {
        $this->env["APP_ENV"] = 'dev';
        $this->env["APP_KEY"] = env("APP_KEY"); // don't change app key when switching env
        return     $this->init();
    }

    /**
     * setting production mode
     *
     * @return void
     */
    private function setProductionMode()
    {
        $this->env["APP_ENV"] = 'pro';
        $this->env["APP_KEY"] = env("APP_KEY"); // don't change app key when switching env
        $this->init();
    }

    /**
     * command help method
     *
     * @return string
     */
    public function help() { return "Env command help.";}
}
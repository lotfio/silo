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
use Conso\Exceptions\{OptionNotFoundException, FlagNotFoundException, RunTimeException};

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
        if(!empty($sub))
        {
            switch($sub)
            {
                case 'init' : $this->generateAppKey(); $this->init();
                    $this->output->writeLn("\n Silo environment has been initialized\n");
                    exit;
                break;
                case 'dev'  : $this->setDevelopmentMode();  exit; break;
                case 'pro'  : $this->setProductionMode();   exit;  break;
                default     : throw new RunTimeException("Error sub command $sub not recognized"); break; break;
            }
        }

        $this->output->writeLn("\n Your application is on ");
        env('APP_ENV') == 'dev' ?
            $this->output->writeLn("development mode\n", 'green')
        :   $this->output->writeLn("production mode\n", 'green');
    }

    /**
     * env init method
     *
     * @return void
     */
    private function init()
    {
        $dotEnv = new DotEnv;
        return $dotEnv->init($this->env);
    }

    /**
     * generate app key method
     *
     * @return void
     */
    private function generateAppKey()
    {
        return $this->env["APP_KEY"] = 'base64-' . base64_encode(md5(time()));
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
        $this->init();
        return $this->output->writeLn("\n Silo environment has been set to Development \n");
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
        return $this->output->writeLn("\n Silo environment has been set to Production \n");
    }

    /**
     * command help method
     *
     * @return string
     */
    public function help() { return "Env command help.";}
}
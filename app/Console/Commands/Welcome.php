<?php namespace App\Console\Commands;

/**
 *
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   1.0.1
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 */

use Conso\{Conso, Command};
use Conso\Contracts\{CommandInterface,InputInterface,OutputInterface};

class Welcome extends Command implements CommandInterface
{
    /**
     * sub commands
     *
     * @var array
     */
    protected $sub = array(
    );

    /**
     * flags
     *
     * @var array
     */
    protected $flags = array(
    );

    /**
     * command help
     *
     * @var string
     */
    protected $help  = array(
    );

    /**
     * command description
     *
     * @var string
     */
    protected $description = 'This is Welcome command description.';

    /**
     * execute method
     *
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output) : void
    {
        $this->displayCommandHelp($input, $output);
    }
}
<?php namespace App\Console\Commands;

/**
 *
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   1.0.0
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 */

use Conso\Conso;
use Conso\Command as BaseCommand;
use Conso\Exceptions\InputException;
use Conso\Contracts\{CommandInterface,InputInterface,OutputInterface};

class Hello extends BaseCommand implements CommandInterface
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
    protected $description = 'This is Hello command description.';

    /**
     * execute method
     *
     * @param  InputInterface  $input
     * @param  OutputInterface $output
     * @return void
     */
    public function execute(InputInterface $input, OutputInterface $output, Conso $app) : void
    {
        $this->displayCommandHelp($input, $output, $app);
    }
}
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
 * @time      Generated at 13-09-2019 by conso
 */

use Conso\Command;
use Conso\Contracts\CommandInterface;
use Conso\Exceptions\{OptionNotFoundException, FlagNotFoundException};

class Hello extends Command implements CommandInterface
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
    protected $description = "Silo command description.";

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
        return $this->output->writeLn("\n\n  Hello there ! Welcome to Silo command. \n\n", "yellow");
    }

    /**
     * command help method
     * 	
     * @return string
     */
    public function help() { return "Silo command help.";}
}
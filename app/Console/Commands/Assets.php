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
 * @time      Generated at 12-09-2019 by conso
 */

use Conso\Command;
use OoFile\Conf;
use Conso\Contracts\CommandInterface;
use Conso\Exceptions\{OptionNotFoundException, FlagNotFoundException, RunTimeException};

class Assets extends Command implements CommandInterface
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
    protected $description = "Assets command description.";

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
                case 'publish'  : $this->publishAssets();  exit; break;
                default         : throw new RunTimeException("Error sub command $sub not recognized"); break;
            }
        }

        $this->output->writeLn("\n".$this->help()."\n");
    }

    /**
     * publish assets
     *
     * @return void
     */
    private function publishAssets()
    {
        $assets = Conf::path('assets');
        $pub    = Conf::path('pub');

        if(!is_writable($pub))
            throw new RunTimeException("$pub Directory is not writable ");

        chdir($pub); // switch to public folder

        if(is_link('assets')) rmdir('assets');

        if(symlink($assets, "assets"))
            return $this->output->writeLn("\n assets has been published to the public folder.\n", "green");

        throw new RunTimeException("\nerror publishing assets to public folder.\n", "red");
    }

    /**
     * command help method
     *
     * @return string
     */
    public function help() { return "Assets command help.";}
}
<?php

namespace App\Console\Commands;

/**
 * @author    <contact@lotfio.net>
 * @package   Conso PHP Console Creator
 * @version   0.1.0
 * @license   MIT
 * @category  CLI
 * @copyright 2019 Lotfio Lakehal
 *
 * @time      Generated at 28-08-2019 by conso
 */

use Conso\Command;
use Conso\Contracts\CommandInterface;
use Conso\Exceptions\{OptionNotFoundException, FlagNotFoundException};
use OoFile\Conf;

class Serve extends Command implements CommandInterface
{
    /**
     * command flags
     *
     * @var array
     */
    protected $flags = [];

    /**
     * server ip address
     *
     * @var string
     */
    protected $host = "127.0.0.1";

    /**
     * server port
     *
     * @var string
     */
    protected $port = "8080";

    /**
     * command description method
     *
     * @return string
     */
    protected $description = "Serve command to start the build in php server.";

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
        /**
         * check for available port
         */
        $this->checkAvailablePort();

        $command = "php -S " . $this->host . ":" . $this->port . " -t " . Conf::path('pub');

        $this->output->writeLn("\n Starting development server : \n", "yellow");
        $this->output->writeLn(" You can now visit <http://$this->host:$this->port> \n\n", "yellow");

        return  passthru($command);
    }

    /**
     * check if port is available
     *
     * @param string $range
     * @return void
     */
    public function checkAvailablePort()
    {
        try{ // skip fsock warning since we are using exception handler
            //  it will throw a warning exception and catch it
            $con      = fsockopen($this->host, $this->port);
            if($con)
            {
                ++$this->port;
                $con = fsockopen($this->host, $this->port);
            }
            fclose($con);
            return $this->port;

        }catch(\Exception $e){}
    }

    /**
     * command help method.
     *
     * @return string
     */
    public function help()
    {
        $this->output->writeLn("\n [ serve ] \n\n", 'yellow');
        $this->output->writeLn("   serve command to start the build in php server.\n\n");
        $this->output->writeLn("  sub commands : \n\n", 'yellow');
        $this->output->writeLn("    no sub comands for this command.\n\n");
        $this->output->writeLn("  options : \n\n", 'yellow');
        $this->output->writeLn("    no options for this command.\n\n");

        return '';
    }
}
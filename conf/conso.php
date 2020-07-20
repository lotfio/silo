<?php

/**
 * @author    <contact@lotfio.net>
 * @package   Silo PHP framework
 * @version   1.0.0
 * @license   MIT
 * @category  Framework
 * @copyright 2019 Lotfio Lakehal
 *
 */
//TODO this can be moved to service suppliers
$dir        = dirname(__DIR__) . '/';
$vndr       = 'vendor/lotfio/';

return array(

    /**
    * + ----------------------------------
    * | conso commands routes
    * + ----------------------------------
    **/
    'commands' => array(

        "conso" => $dir . $vndr  . 'conso/commands.php',
        "silo"  => $dir          . '/res/routes/commands.php'
    )
);
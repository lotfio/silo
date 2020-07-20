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
$vndr       = $dir . 'vendor/lotfio/';

return array(

    /**
    * + ----------------------------------
    * | signature
    * + ----------------------------------
    **/
    "signature" => $vndr . 'omniscient/src/Console/stub/logo',

    /**
    * + ----------------------------------
    * | commands
    * + ----------------------------------
    **/
    'commands' => array(

        /**
        * + ----------------------------------
        * | default conso commands
        * + ----------------------------------
        **/
        "conso"         => $vndr  . 'conso/commands.php',

        /**
        * + ----------------------------------
        * | core commands
        * + ----------------------------------
        **/
        "omniscient"    => $vndr  . 'omniscient/src/Console/commands.php',

        /**
        * + ----------------------------------
        * | user defined commands
        * + ----------------------------------
        **/
        "silo"          => $dir   . 'res/routes/commands.php',
    )
);
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
$dir        = dirname(__DIR__);
$conso      = $dir . '/vendor/lotfio/conso/src/Conso/';
$aven       = $dir . '/vendor/lotfio/aven/src/Aven/';
$omniscient = $dir . '/vendor/lotfio/omniscient/src/';
$silo       = $dir . '/app/';

return array(

    /**
    * + ----------------------------------
    * | Cli application name
    * + ----------------------------------
    **/
    "APP_NAME"          => env('APP_NAME'),

    /**
    * + ----------------------------------
    * | Cli application name
    * + ----------------------------------
    **/
    "APP_VERSION"       => env('APP_VERSION'),

    /**
    * + ----------------------------------
    * | Cli application name
    * + ----------------------------------
    **/
    "APP_LOGO_FILE"     => $omniscient . 'Console/stub/logo',

    /**
    * + ----------------------------------
    * | Cli application name
    * + ----------------------------------
    **/
    "APP_RELEASE_DATE"  => "9-11-2019 by lotfio lakehal",

    /**
    * + ----------------------------------
    * | Cli application name
    * + ----------------------------------
    **/
    "DEFAULT_COMMAND"   => "Info",

    /**
    * + ----------------------------------
    * | commands paths
    * | order matters on how commands are
    * | shown in the console
    * + ----------------------------------
    **/
    'COMMANDS' => array(
        $conso      . 'Commands/',
        $aven       . 'Console/Commands/',
        $omniscient . 'Console/Commands',
        $silo       . 'Console/Commands/',
    ),

    /**
    * + ----------------------------------
    * | commands namespaces
    * | must follow commands paths order
    * + ----------------------------------
    **/
    'NAMESPACE' => array(
        'Conso\\Commands',
        'Aven\\Console\\Commands',
        'Omniscient\\Console\\Commands',
        'App\\Console\\Commands'
    )
);
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
$omniscient = $dir . '/vendor/lotfio/omniscient/src/';
$silo       = $dir . '/app/';

return array(

    /**
    * + ----------------------------------
    * | app name
    * + ----------------------------------
    **/
    "APP_NAME"          => _env('APP_NAME'),

    /**
    * + ----------------------------------
    * | app version
    * + ----------------------------------
    **/
    "APP_VERSION"       => _env('APP_VERSION'),

    /**
    * + ----------------------------------
    * | console app logo
    * + ----------------------------------
    **/
    "APP_LOGO_FILE"     => $omniscient . 'Console/stub/logo',

    /**
    * + ----------------------------------
    * | app release date
    * + ----------------------------------
    **/
    "APP_RELEASE_DATE"  => "9-11-2019 by lotfio lakehal",

    /**
    * + ----------------------------------
    * | console app default command
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
        'Omniscient\\Console\\Commands',
        'App\\Console\\Commands'
    )
);
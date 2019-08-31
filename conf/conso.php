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
    "APP_LOGO_FILE"     => dirname(__DIR__) . '/app/Console/stub/logo',

    /**
    * + ----------------------------------
    * | Cli application name
    * + ----------------------------------
    **/
    "APP_RELEASE_DATE"  => "00/00/0000 by lotfio  lakehal",

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
        dirname(__DIR__) . '/vendor/lotfio/conso/src/Conso/Commands/',
        dirname(__DIR__) . '/vendor/lotfio/aven/src/Aven/Console/Commands/',
        dirname(__DIR__) . '/app/Console/Commands/', 
    ),

    /**
    * + ----------------------------------
    * | commands namespaces 
    * | must follow commands paths order
    * + ----------------------------------
    **/
    'NAMESPACE' => array(
        'Conso\\Commands\\',
        'Aven\\Console\\Commands\\',
        'App\\Console\\Commands\\'
    )
);
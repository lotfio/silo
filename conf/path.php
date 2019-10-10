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

$root = dirname(__DIR__);

return array(

    /**
    * + ----------------------------------
    * | base path
    * + ----------------------------------
    **/
    "root"      => $root .'/',

    /**
    * + ----------------------------------
    * | base path
    * + ----------------------------------
    **/
    "app"      => $root . '/app/',

    /**
    * + ----------------------------------
    * | base path
    * + ----------------------------------
    **/
    "pub"      => $root . '/pub/',

    /**
    * + ----------------------------------
    * | routes path
    * + ----------------------------------
    **/
    "routes"    => $root . "/app/extras/routes/",

    /**
    * + ----------------------------------
    * | views path
    * + ----------------------------------
    **/
    "views"    => $root . "/app/extras/views/",

    /**
    * + ----------------------------------
    * | dump path
    * + ----------------------------------
    **/
    "dump"     => $root . "/dump/",

    /**
    * + ----------------------------------
    * | assets path
    * + ----------------------------------
    **/
    "assets"   => $root . "/dump/app/assets/",

    /**
    * + ----------------------------------
    * | cache path
    * + ----------------------------------
    **/
    "cache"    => $root . '/dump/cache/',

    /**
    * + ----------------------------------
    * | controllers  path
    * + ----------------------------------
    **/
    "controllers"  => $root . '/app/Http/Controllers/',

    /**
    * + ----------------------------------
    * | commands  path
    * + ----------------------------------
    **/
    "commands"     => $root . '/app/Console/Commands/'
);
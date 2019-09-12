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
    * | base path
    * + ----------------------------------
    **/
    "root"      => dirname(__DIR__) .'/',

    /**
    * + ----------------------------------
    * | base path
    * + ----------------------------------
    **/
    "app"      => dirname(__DIR__) . '/app/',

    /**
    * + ----------------------------------
    * | base path
    * + ----------------------------------
    **/
    "pub"      => dirname(__DIR__) . '/pub/',

    /**
    * + ----------------------------------
    * | routes path
    * + ----------------------------------
    **/
    "routes"    => dirname(__DIR__) . "/app/extras/routes/",

    /**
    * + ----------------------------------
    * | views path
    * + ----------------------------------
    **/
    "views"    => dirname(__DIR__) . "/app/extras/views/",

    /**
    * + ----------------------------------
    * | dump path
    * + ----------------------------------
    **/
    "dump"    => dirname(__DIR__) . "/dump/",

    /**
    * + ----------------------------------
    * | assets path
    * + ----------------------------------
    **/
    "assets"    => dirname(__DIR__) . "/dump/app/assets/",

    /**
    * + ----------------------------------
    * | routes cache path
    * + ----------------------------------
    **/
    "cache"     => dirname(__DIR__) . '/dump/cache/'
);
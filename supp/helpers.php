<?php 

use OoFile\Conf;


if(!function_exists('url'))
{
    /**
     * url helper function
     *
     * @param string $additional
     * @return void
     */
    function url(string $additional = NULL)
    {
        return Conf::link('url') . ltrim($additional, '/');
    }
}
<?php namespace App\Http\Controllers;

use OoFile\Conf;

/**
 * @author    <contact@lotfio.net>
 * @package   Silo PHP framework
 * @version   1.0.0
 * @license   MIT
 * @category  Framework
 * @copyright 2019 Lotfio Lakehal
 * 
 */

class IndexController
{
    public function index()
    {
        return require \OoFile\Conf::app('views') . 'index.view.php';
    }
}
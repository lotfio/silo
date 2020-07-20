<?php

use OoFile\Upload;

/**
 * @author    <contact@lotfio.net>
 * @package   Silo PHP framework
 * @version   1.0.0
 * @license   MIT
 * @category  Framework
 * @copyright 2019 Lotfio Lakehal
 */

$silo->namespace('App\Http\Controllers', function($silo){
    $silo->crud('/algeria', 'Algeria');
});

$silo->form('/upload', function(){

    echo '<form action="" method="POST" enctype="multipart/form-data">
         <input name="image[]" type="file" multiple>
         <button type="submit">upload</button>
         </form>';


    if(($_FILES))
    {
        $up = new Upload('image', __DIR__);
        if($up->isValid()) $up->proceed();
    }
});
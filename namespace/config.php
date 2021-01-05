<?php 

spl_autoload_register(function($nameClass){

    $dirClass = "class";
    // $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
    echo $filename;

    if (file_exists($filename))
    {
        require_once($filename);
    }

});

?>
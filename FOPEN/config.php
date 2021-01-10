<?php 

spl_autoload_register(function($className)
{
    $filename = "class". DIRECTORY_SEPARATOR .$className.".php";
    // echo $filename;

    if (file_exists($filename))
    {
        require_once($filename);
        // echo "<pre>"; print_r($filename); echo "</pre>"; exit;
    }
});

?>
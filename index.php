
<?php
//include_once 'helper/request.php';
$path = "helper/*.php";
array_map(fn($filename)=>include_once($filename),glob($path));
spl_autoload_register(function($cls)
{
    $path = "app/libs/$cls.php";
    if(file_exists($path)){
        include_once $path;
    }
});
$obj = new Autoload();
?>
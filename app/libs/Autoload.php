<?php
class Autoload{
    public function __construct()
        {
            Session::init();
            $robj = request();
            $controller = $robj->controller;
            $method = $robj->method;
            $para = $robj->para;
            $path = "app/controllers/$controller.php";
            if(file_exists($path)){
                include_once $path;
                $cobj = new $controller();
                if(method_exists($cobj,$method)){
                    $res = $cobj->$method($para);
                    echo "<pre>";
                    print_r($res);
                    echo "</pre>";
                    // if($req){
                    //     $controller = $req->controller;
                    //     $method = $req->method;
                    //     $para = $req->para;
                    //     include_once "app/controllers/$controller.php";
                    //     $reqObj = new $controller;
                    //     $reqObj->$method($para);
                    // }
                }else{
                    header('location:'.ROOT."home/page404");
                }
            }else{
                header('location:'.ROOT."home/page404");

            }
        }
}

?>
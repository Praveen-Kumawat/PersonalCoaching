<?php
class RequestController extends Controller{
    public function getingRequest(){
        $str = $_POST['controller']."/".$_POST['function'];
        $obj =  request(null,str);
        return $obj;
        
    }
}
?>
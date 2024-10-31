<?php
function request($key=null,$str=""){
    $robj = (object) ['controller'=>'HomeController','method'=>'index','para'=>'',];
    if(isset($_GET['url'])&& $_GET['url']){
    $url = explode('/',rtrim($_GET['url'],'/'));
    $robj->controller = ucfirst($url[0]).'Controller';
    $robj->method = $url[1]??strtolower($robj->method);
    $robj->para = $url[2]??null;
    }
    if($str)
    {
        $url = explode('/',rtrim($str,'/'));
        // print_r($url);
        $robj->controller = ucfirst($url[0]).'Controller';
        $robj->method = $url[1]??strtolower($robj->method);
        $robj->para = $url[2]??null;
        return $robj;
    }
    if($key){
        if(array_key_exists($key,$_POST)){
            return $_POST[$key];
        }
        if(array_key_exists($key,$_GET)){
            return $_GET[$key];
        }
        return null;
    }
    return $robj;
}

function fileupload($file,$to=""){
    if($_FILES[$file]['name'] && isset($_FILES[$file]['name'])){
        $createNewName = rand(1000,200000)."_".time()."_".$_FILES[$file]['name'];
       $to = "public/".$to."/".$createNewName;
       $from = $_FILES[$file]['tmp_name'];
        if(request('oldImageName'))
            {
                $oldFileName = request('oldImageName');
                if($oldFileName!="noimage.png"){
                    @unlink("public/images/courses/$oldFileName");
                }
            }

       move_uploaded_file($from,$to);
        return $createNewName;
    }else{
        if(request('oldImageName')){
            return request('oldImageName');
        }else{
            return "noimage.png";
        }
    }
}
?>
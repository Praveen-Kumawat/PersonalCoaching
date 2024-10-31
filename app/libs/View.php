<?php
class View {
    public function view($viewname="",$data=[],$hf=true){
    
        $path = "app/view/$viewname.php";
        extract($data);
        // echo $path;
        if(file_exists($path)){
            include_once "app/view/emmet/top.php";
            if($hf)
            include_once "app/view/header/header.php";
            include_once $path;
            if($hf)
            include_once "app/view/footer/footer.php";
            include_once "app/view/emmet/bottom.php";

        }
    }
}
?>
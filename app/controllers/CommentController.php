<?php 
class CommentController extends Controller {
    static $count=0;
    public $comments;
    public function __construct()
    {
        parent::__construct();
        $this->comments = $this->loadModel('comments','cmt_id');
        $this->courses = $this->loadModel('courses');

    }
    public function comment()
    {
        
    }
    public function delete()
    {

        // echo $_POST['id'];
       
       if($this->comments->delete($_POST['id'])){
        $comments = $this->courses->comments();
        $str="";
        echo request('para');
        exit;  
        foreach($comments as $cmt){
            if($cmt['course_id']==$course_data['cid']){
         $str .= "
        <div class='row'>
            <div class='col-md-12 col-lg-6'>
                <b><i class='fa fa-user-circle p-2' aria-hidden='true'></i>$cmt[users]</b>
            </div>
            <div class='col-md-12 col-lg-6 ' style='text-align:right; color:#808080; font-size:11px'>
                <b>$cmt[created_at]</b>
            </div>
        </div>
        <div class='comment bg-light p-2 d-flex' style='padding-left:20px;align-content:center; justify-content:space-between'>
            <p>$cmt[comments]</p>";
            
            if(@$_SESSION['user_info']['id']==$cmt['user_id']){
               $str.=" <button value='$cmt[cmt_id]' class='delete_cmt' type='button' style='border:none; background:none;'><i class='fa fa-trash' aria-hidden='true'></i></button></div>";
                
           }
       $str.="
    </div>";
    
        }
        echo $str;}
       }
        
        // echo "hello";
    }
}

?>
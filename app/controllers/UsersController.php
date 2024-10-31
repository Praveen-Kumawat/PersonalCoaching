<?php
class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->users = $this->loadModel('users');
        $this->comment = $this->loadModel('comments');
        $this->courses = $this->loadModel('courses');
        $this->videos = $this->loadModel('videolacture');
    }

    public function login()
    {
        $users_info = ['loginid'=>request('username'),'password'=>request('password')];
        if($users_info['loginid'])
        {
            if($users_info['password'])
            {
                // statement here
                $auth = $this->users->authUser($users_info)[0]??null;
                if($auth){
                    if(($auth['email']==$users_info['loginid']) || ($auth['mobile']==$users_info['loginid'])){
                        if($auth['password']==$users_info['password']){
                            Session::set('user_info',$auth);
                            echo "Logged In Successfully!";
                        }else{
                            echo "Incorrect Password";
                        }
                    }
                }else{
                    echo "Please Enter Correct Email Or Phone";
                }
            }else{
                echo "Please Enter Password!";
            }
        }else{
            echo "Please Enter Email or Phone";
        }
        // echo "<pre>";
        // print_r($users_info);
        // echo "</pre>";
    }
    public function logout()
    {
        Session::destroy();
        redirect('register/login');
    }
    public function comment()
    {
      $cmt = [
            'comments'=>request('comment'),
            'video_id'=>(request('video_id')!="")?request('video_id'):'0',
            'course_id'=>request('course_id'),
            'user_id'=>request('user_id')
        ];
        // return $curr_id = $_POST['curr_id'];
        // $curr_id = explode('/',rtrim($curr_id,'/'));

        if($this->comment->save($cmt)){
        }

            
            $comments_videos = $this->videos->comments();
            $comments_courses = $this->courses->comments();
            echo $comments_videos[0]['video_id'];
            if($comments_videos[0]['video_id']){
            $str="";
            echo "<pre>";
            print_r($comments_videos);
            echo "</pre>";
            
        //     foreach($comments_videos as $cmt){
                
        //         if($cmt['video_id']==$curr_id[2]){
        //      $str .= "
        //     <div class='row'>
        //         <div class='col-md-12 col-lg-6'>
        //             <b><i class='fa fa-user-circle p-2' aria-hidden='true'></i>$cmt[users]</b>
        //         </div>
        //         <div class='col-md-12 col-lg-6 ' style='text-align:right; color:#808080; font-size:11px'>
        //             <b>$cmt[created_at]</b>
        //         </div>
        //     </div>
        //     <div class='comment bg-light p-2 d-flex' style='padding-left:20px;align-content:center; justify-content:space-between'>
        //         <p>$cmt[comments]</p>";
                
        //         if(@$_SESSION['user_info']['id']==$cmt['user_id']){
        //            $str.=" <button value='$cmt[cmt_id]' class='delete_cmt' type='button' style='border:none; background:none;'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                    
        //         }
        //     $str.="</div>
        // </div>";
        
        //     }
        //     echo $str;
        // }
            // echo 'Commented Successfully'";
}else if($comments_courses[0]['course_id']){
    $str="";
    echo "<pre>";
            print_r($comments_videos);
            echo "</pre>";
//     foreach($comments_courses as $cmt){
       
//         if($cmt['video_id']==$curr_id[2]){
//      $str .= "
//     <div class='row'>
//         <div class='col-md-12 col-lg-6'>
//             <b><i class='fa fa-user-circle p-2' aria-hidden='true'></i>$cmt[users]</b>
//         </div>
//         <div class='col-md-12 col-lg-6 ' style='text-align:right; color:#808080; font-size:11px'>
//             <b>$cmt[created_at]</b>
//         </div>
//     </div>
//     <div class='comment bg-light p-2 d-flex' style='padding-left:20px;align-content:center; justify-content:space-between'>
//         <p>$cmt[comments]</p>";
        
//         if(@$_SESSION['user_info']['id']==$cmt['user_id']){
//            $str.=" <button value='$cmt[cmt_id]' class='delete_cmt' type='button' style='border:none; background:none;'><i class='fa fa-trash' aria-hidden='true'></i></button>";
            
//         }
//     $str.="</div>
// </div>";

//     }
//     echo $str;
// }
}
}
}
?>
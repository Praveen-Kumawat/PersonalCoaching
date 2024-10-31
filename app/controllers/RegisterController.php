<?php
class RegisterController extends Controller{
    protected $register,$users;
    public function __construct()
    {
        parent::__construct();
        $this->register = $this->loadModel('register');
        $this->users = $this->loadModel('users');
        // $this->states = $this->loadModel('states');
        // $this->cities = $this->loadModel('cities');
    }
    public function index()
    {
        // echo "<pre>";
        // print_r($_SESSION);
        // exit;   
        $data = $this->register->hasOne('states');
        $this->load->view('register/index',compact('data'),true);
    }
    public function login()
    {
        if(@!$_SESSION['user_info'])
            $this->load->view('register/login');
        else
            redirect('home');

    }
    public function findCities()
    {
        // echo "<pre>";
        $cities = $this->register->hasOne('cities',$_POST['id'],'state_id');
        // print_r($cities);
        foreach($cities as $info)
        {
            $str.="<option value='$info[id]'>{$info['city']}</option>";
        }
        echo $str;
        
    }
    public function save()
    {
        echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        if($this->users->save($_POST)){
            $lastId = $this->users->save($_POST);
           $user_info =  $this->users->find($lastId)[0];
           print_r($user_info);
            Session::set('user_info',$user_info);
            // redirect('home');
        }else{
            echo "Something Went Wrong!";
        }


    }
}
?>
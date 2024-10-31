<?php
class HomeController extends Controller{
    protected $course_category;
    public function __construct()
    {
        parent::__construct();
        $this->course_category = $this->loadModel('category');
    }
    public function index()
    {
        $course_category_data = $this->course_category->all();
        $course_category_data = array_chunk($course_category_data,4);
        
        //exit;
        // echo "<pre>";
        // print_r($course_category_data);
        // echo "</pre>";
        // exit;
        // $count_course = ($this->course_category->countData());
        // foreach($count_course as $info){
        //     // if($info['cat_id']==$info['id'])
        //     print_r($info);
        // }
        // exit;
        $this->load->view('Home',compact('course_category_data'));
    }
    public function about()
    {
        $this->load->view('about');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function courses()
    {
        $this->load->view('courses');
    }
    public function page404()
    {
        $this->load->view('page404');
    }
}

?>
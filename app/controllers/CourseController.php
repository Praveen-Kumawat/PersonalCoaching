<?php
class CourseController extends Controller
{
    protected $courses;
    public function __construct()
    {
        parent::__construct();
        $this->course_category = $this->loadModel('category');
        $this->courses = $this->loadModel('courses');
    }

    public function index()
    {
        // echo "<pre>";
        $courses_cat_data = $this->course_category->all();
        
       $this->load->view('courses', compact('courses_cat_data'));
    }
    public function readmore($id)
    {
        // comments loading code
        $comments = $this->courses->comments();
        
    //    echo "<pre>";
    //    print_r($comments);
    //    exit;
       $course_data = ($this->courses->find($id)[0]);
       $this->load->view('courses/showcourse',compact('course_data','comments'));
       


    }
    public function showCourses($id)
    {

        // echo $id;
        // exit;
        if($id??""){
        $courses_data = $this->courses->findCourse($id);
        // echo "<pre>";
        // print_r($courses_data);
        // exit;
        $this->load->view('courses/course',compact('courses_data'));
        }else{

         // echo $_POST['id'];
       $courses_data =  $this->courses->findCourse($_POST['id']);
       //    echo "<pre>";
       //    print_r($courses_data);
           // $this->load->view('courses');
           $root = ROOT;
            $str="<div class="."'container-xxl py-5'".">
            <div class="."'container'".">
            <div class="."'text-center wow fadeInUp'"." data-wow-delay="."'0.1s'".">
            <h6 class="."'section-title bg-white text-center text-primary px-3'".">Courses</h6>
            <h1 class="."'mb-5'".">Popular Courses</h1>
            <a class='nav-link btn btn-light w-50 m-auto p-4' href='$root' >Back to Categories </a>
        </div>
        <div id="."'courses_01'"." class="."'row g-4 justify-content-center'".">";
           foreach($courses_data as $info)
           {

            $start_date = strtotime($info['start_date']);
            $end_date = strtotime($info['end_date']);
            $diff = abs($start_date - $end_date);
            $years = floor($diff / (365*60*60*24)); 
            $months = floor(($diff - $years * 365*60*60*24)
                 / (30*60*60*24)); 



               $str.="
              <div class="."'col-lg-4 col-md-6 wow fadeInUp'"." data-wow-delay="."'0.1s'".">
                       <div class="."'course-item bg-light'".">
                           <div class="."'position-relative overflow-hidden'".">
                               <img width='500px' height='500px' class="."'img-fluid'"." src='".AdminROOT."public/images/courses/$info[course_image]'". "alt=".">
                               <div class="."'w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4'".">
                                   <a href='' "."class="."'flex-shrink-0 btn btn-sm btn-primary px-3 border-end'"." style="."'border-radius: 30px 0 0 30px;'".">Read More</a>"
                                   ."<a href='#' class="."'flex-shrink-0 btn btn-sm btn-primary px-3'"." style="."'border-radius: 0 30px 30px 0;'".">Join Now</a>
                               ."."</div>
                           </div>
                           <div class="."'text-center p-4 pb-0'".">
                               <h3 class="."'mb-0'".">"."&#8377; $info[selling_price]"."</h3>"."
                               <div class="."'mb-3'".">
                                   <small class="."'fa fa-star text-primary'"."></small>
                                   <small class="."'fa fa-star text-primary'"."></small>
                                   <small class="."'fa fa-star text-primary'"."></small>
                                   <small class="."'fa fa-star text-primary'"."></small>
                                   <small class="."'fa fa-star text-primary'"."></small>
                                   <small>(123)</small>
                               </div>
                               <h5 class="."'mb-4'>"."$info[course]</h5>
                           </div>
                           <div class="."'d-flex border-top'".">
                               <small class="."'flex-fill text-center border-end py-2'".">M.R.P. <i class="."'fa fa-rupee text-primary me-2'"."></i>$info[mrp]</small>
                               <small class="."'flex-fill text-center border-end py-2'"."><i class="."'fa fa-clock text-primary me-2'"."></i>$months Months</small>
                               <small class="."'flex-fill text-center py-2'"."><i class="."'fa fa-discount text-primary me-2'"."></i>30 Students</small>
                           </div>
                       </div>
                   </div>
                     
";
           }

           echo $str.="</div>
            </div>
        </div>";
    }
}
}

?>
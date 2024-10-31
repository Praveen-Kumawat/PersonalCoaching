<?php
class VideosController extends Controller{
    protected $folders;
    public function __construct()
    {
        parent::__construct();
        $this->folders =  $this->loadModel('folders');
        $this->videolacture =  $this->loadModel('videolacture');

    }
    public function index(){
        echo "hello";
        
    }
    public function commented()
    {
        
    }
    public function folderView()
    {
        $folder_data = $this->folders->all();
        $this->load->view('videos/folderview',compact('folder_data'));
    }
    public function newFolder(){
        $folder_info = ['folder_name'=>request('folder_name')];

        if($this->folders->save($folder_info)){
            echo "Folder Created Successfully!";
        }

        // echo "<pre>";
        // print_r($folder_info);
        // exit;
    }
    public function getVideosWhereYouSaved($id)
    {
       
        $folder_videos = $this->folders->hasMany($id);
        // echo "<pre>";
        // print_r($folder_videos);
        // exit;
        $this->load->view('videos/loadFolder',compact('folder_videos'));
    }
    public function player($id)
    {
        $comments = $this->videolacture->comments();
        $video_info = $this->videolacture->find($id)[0];
        $this->load->view('videos/playvideo',compact('video_info','comments'));
        // echo "<pre>";
        // print_r($video_info);
        // exit;
    }
}
?>
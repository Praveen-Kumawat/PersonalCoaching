<?php
class OptionsController extends Controller{
    protected $quicklinks;
    public function __construct()
    {
        parent::__construct();
        $this->quicklinks = $this->loadModel('quicklinks');
    }
    public function quickLinks()
    {
        $quicklinks_data = $this->quicklinks->all();
        // echo "<pre>";
        // print_r($quicklinks_data);
        // exit;
        $this->load->view('options/quicklinks',compact('quicklinks_data'));
    }
}
?>
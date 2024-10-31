<?php
class DocsController extends Controller{
    protected $timetable;
    public function __construct()
    {
        parent::__construct();
        $this->timetable = $this->loadModel('timetable');
    }
    public function timetable()
    {
        $timetable_data = $this->timetable->all();
        // echo "<pre>";
        // print_r($timetable_data);
        // exit;
        $this->load->view('docs/timetable',compact('timetable_data'));
    }
    public function loadPdf()
    {
        $loadpdf = $this->timetable->find( request('id'))[0];
       
        echo $loadpdf['file'];
    }
}
?>
<style>
#pdfviewmodel {
    box-shadow: 5px 5px 52px black;
    width: fit-content;
    display: none;
    z-index: 1100;
    position: absolute;
    top: 15%;
    left: 25%
}

@media (max-width:660px) {
    #pdfviewmodel {
        box-shadow: 5px 5px 52px black;
        width: fit-content;
        display: none;
        z-index: 1100;
        position: absolute;
        top: 15%;
        left: 0%
    }
}
</style>
<div id="pdfviewmodel" class="border bg-white">
    <div class="button">
        <button onclick="objectModel('pdfviewmodel')" class="btn btn-danger">Close</button>
    </div>
    <object id="pdfobject" style="width: 100%;
        aspect-ratio: 4 / 3;" data="" width="630" height="500">
    </object>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Docs</h6>
            <h1 class="mb-5">Time Table</h1>
        </div>
        <div class="row g-4 justify-content-left">
            <?php foreach($timetable_data as $info){ 
                
                if($info['status']==1)
                {                
                ?>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid p-1" style="width:revert-layer"
                            src="<?=AdminROOT?>public/images/icon/pdf.png" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                 style="border-radius: 30px 0 0 30px;">Read More</a>
                             <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                 style="border-radius: 0 30px 30px 0;">Join Now</a> -->
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <!-- <h3 class="mb-0">&#8377;</h3>
                         <div class="mb-3">
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small class="fa fa-star text-primary"></small>
                             <small>(123)</small>
                         </div> -->
                        <h5 class="mb-4"><?=$info['title']?></h5>
                        <p><b>Published by :</b> mYcoaching Center</p>
                    </div>
                    <div class="d-flex border-top">
                        <!-- <small class="flex-fill text-center border-end py-2"><i
                                 class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                         <small class="flex-fill text-center border-end py-2"><i
                                 class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                         <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                             Students</small> -->
                        <button onclick="objectModel('pdfviewmodel',<?=$info['id']?>,'docs/loadPdf')"
                            class="btn btn-info w-50 m-1">View</button>
                        <a class="btn btn-success w-50 m-1"
                            href="<?=AdminROOT?>public/docs/timetable/<?=$info['file']?>" download="">Download</a>
                    </div>
                </div>
            </div>
            <?php }
            }
            ?>
        </div>
    </div>
</div>
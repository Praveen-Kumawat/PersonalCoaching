
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Options</h6>
            <h1 class="mb-5">Quick Links</h1>
        </div>
        <div class="row g-4 justify-content-left">
            <?php foreach($quicklinks_data as $info){ 
                
                // if($info['status']==1)
                // {                
                ?>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light" style="border-radius:5px;">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid p-1" style="width:revert-layer;border-radius:6px;"
                            src="<?=AdminROOT?>public/images/thumbnails/quicklinks/<?=$info['thumbnail']?>" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h5 class="mb-4"><?=$info['title']?></h5>
                        <p><b>Published by :</b> Admin</p>
                    </div>
                    <div class="d-flex border-top">
                        <a href="<?=$info['link']?>" class="btn btn-info w-100">Visit Link</a>
                    </div>
                </div>
            </div>
            <?php }
            //}
            ?>
        </div>
    </div>
</div>
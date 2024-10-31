<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    
    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Courses Category</h1>
            </div>
            <div  class="row g-4 justify-content-left">
                <?php foreach($courses_cat_data as $info) { ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden" style="height:150px">
                            <a href="<?=ROOT?>course/showCourses/<?=$info['id']?>">
                            <img style="width:450px; height:150px" class="img-fluid" src="<?=AdminROOT?>public/images/thumbnails/<?=$info['thumbnail']?>" alt="">
                </a>
                            </form>
                            <!-- <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Join Now</a>
                            </div> -->
                        </div>
                        <div class="text-center p-4 pb-0">
                            <!-- <h3 class="mb-0">$149.00</h3> -->
                            <h5 class="mb-4"><?=$info['category']?></h5>
                            <div class="w-100" style="overflow:hidden;height:30px">

                                <p class="mb-4"><b>Description : </b><?=$info['description']?></p>
                            </div>
                            <span style="color:blue;cursor:pointer" class="seemore">See More</span>
                            <div class="mb-3 pb-4">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <!-- <p><b>Category:</b></p> -->
                        </div>
                        <!-- <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div> -->
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Courses End -->
     
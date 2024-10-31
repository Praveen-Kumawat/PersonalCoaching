<style>
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555;
}
.msg-pop-up{
    width:300px;
    height:50px;
    background-color:green;
    border-radius:5px;
    display:none;
    align-content:center;
    text-align:center;
    color:#fff;
    box-shadow:1px 1px 12px #000;
    position: fixed;
    top:100px;
    z-index:1200;
}
.confirm_popup_container{
        display:none;
    }
.confirm_popup{
    width: 30vw;
    height:30vh;
    background-color:white;
    background:none;
    margin:auto;
    text-align:center;
    position: fixed;
    top:20vh;
    left:36.5%;
    z-index: 200;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    display:flex;
    justify-content:center;
    align-items:center;
   
}
.confirm_popup .contnet{
    background-color:white;
}
.confirm_popup .btns{
    justify-content:center;
}

@media (max-width:660px){
    .confirm_popup_container{
        display:none;
        width: 90%;
    }
    .confirm_popup{
    width: 100%;
    height:30vh;
    background-color:white;
    margin:auto;
    text-align:center;
    position: fixed;
    top:20vh;
    left:0;
    z-index: 200;
    box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    display:flex;
    justify-content:center;
    align-items:center;
   
}
.confirm_popup .btns{
    justify-content:center;
}
}
</style>
<?php
require_once "app/view/confirm_popup.html";
?>
<div class="container d-flex justify-content-center p-2">
    <div id="comment_pop-up" class="msg-pop-up">
        <b><i class="fa fa-check-square m-2"></i>Commented Successfully</b>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h1 class="mb-5"><?=$course_data['category']?></h1>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
                $start_date = strtotime($course_data['start_date']);
                $end_date = strtotime($course_data['end_date']);
                $diff = abs($start_date - $end_date);
                $years = floor($diff / (365*60*60*24)); 
                $months = floor(($diff - $years * 365*60*60*24)
                     / (30*60*60*24)); 
            ?>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100"
                            src="<?=AdminROOT?>public/images/courses/<?=$course_data['course_image']?>" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                style="border-radius: 30px 0 0 30px;">Read More</a> -->
                            <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                style="border-radius: 30 30px 30px 30;">Join Now</a>
                        </div>
                    </div>
                    <div class="row p-4 pb-0">
                        <div class="col-md-12 col-lg-6">
                            <h3 class="mb-0">&#8377; <?= $course_data['selling_price']  ?></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4"><?=$course_data['course']?></h5>
                            <h6 class="mb-4"><b>Category : </b><?=$course_data['category']?></h6>
                            <h6 class="mb-4"><b>Starting Date : </b><?=$course_data['start_date']?></h6>
                            <h6 class="mb-4"><b>End Date : </b><?=$course_data['end_date']?></h6>
                            <h6 class="mb-4"><b>Durations : </b><?=$months?> Months</h6>
                        </div>

                        <div class="col-md-12 col-lg-6 p-2">
                            <span><b>Description :</b></span>
                            <div style="text-align:justify; height:auto; max-height:400px; overflow:scroll;">
                                <p>

                                <ol>
                                    <li>This tutorial covers every version of JavaScript:

                                        The Original JavaScript ES1 ES2 ES3 (1997-1999)
                                        The First Main Revision ES5 (2009)
                                        The Second Revision ES6 (2015)
                                        The Yearly Additions (2016, 2017 ... 2021, 2022)</li>
                                    <li>Commonly Asked Questions
                                        How do I get JavaScript?
                                        Where can I download JavaScript?
                                        Is JavaScript Free?
                                        You don't have to get or download JavaScript.

                                        JavaScript is already running in your browser on your computer, on your tablet,
                                        and on your smart-phone.

                                        JavaScript is free to use for everyone.</li>
                                </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30
                            Students</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Comments Section -->
<?php if(isset($_SESSION['user_info'])&&$_SESSION['user_info'] ){ ?>
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <h5 class="bg-dark text-white p-2 text-center">What's People Say?</h5>
    <form id="comment-form" action="" method="POST">
        <div class="cmt-input fadeInUp" >
            <input type="hidden" name="user_id" value="<?=$_SESSION['user_info']['id']?>">
            <input type="hidden" name="course_id" value="<?=$course_data['cid']?>">
            <input type="hidden" name="course_curr_id" value="<?=$_GET['url']?>">
            <input id="comment_input" style="border:none;background-color: #eeeeee; border-radius:25px;" type="text" class="form-control mb-2" name="comment"
                placeholder="Comment as <?=$_SESSION['user_info']['users']?>">
                <button id="comment_post_btn" type="button" onclick="comments('comment-form','users/comment','msg-pop-up')" class="btn btn-dark" style="">Post Comment</button>
        </div>
    </form>
    <?php } ?>
    <div class="container " style="height:500px; overflow:scroll;">
        <hr>
        <label class="py-2" for="cmt"><i class="fa fa-comments p-2" aria-hidden="true"></i>
        <b>Comments :-</b></label>
        <hr>
        <div id="loadComments" class="p-2">
        <?php foreach($comments as $cmt){
            if($cmt['course_id']==$course_data['cid']){
            ?>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <b><i class="fa fa-user-circle p-2" aria-hidden="true"></i><?=$cmt['users']?></b>
                </div>
                <div class="col-md-12 col-lg-6 " style="text-align:right; color:#808080; font-size:11px">
                    <b><?=$cmt['created_at']?></b>
                </div>
            </div>
            <div class="comment bg-light p-2 d-flex" style="padding-left:20px;align-content:center; justify-content:space-between">
                <p><?=$cmt['comments']?></p>
                     <?php if(@$_SESSION['user_info']['id']==$cmt['user_id']){ ?>
                    <button value="<?=$cmt['cmt_id']?>" class="delete_cmt" type="button" style="border:none; background:none;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    <?php } ?>
                
            </div>
            <?php }} ?>
        </div>
    </div>
</div>

<!-- Comments Section End -->
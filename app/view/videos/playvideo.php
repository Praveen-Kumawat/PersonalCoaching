<style>
#my-video {
    width: 100%;
    height: 60vh;

}

.video-container {
    height: 660px overflow: hidden;
}

.big-text {
    overflow: hidden;
    height: 100px;
    border: none;

}

.description {
    overflow: hidden;
    background-color: rgb(250, 250, 250);
    border-radius: 5px;
}

.video-title {
    height: auto;
    background-color: rgb(250, 250, 250);
    border-radius: 5px;

}

@media(max-width:660px) {
    #my-video {
        width: 100%;
        height: 50vh;

    }
}
</style>

<div class="video-container container-fluid mt-5">
<div id="comment_pop-up" class="msg-pop-up">
        <b><i class="fa fa-check-square m-2"></i>Commented Successfully</b>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
            <video id="my-video" class="video-js" controls preload="auto"
                poster="<?=AdminROOT?>public/images/thumbnails/<?=$video_info['thumbnail']?>" data-setup="{}">
                <source src="<?=AdminROOT?>public/videos/<?=$video_info['file']?>" type="video/mp4" />
                <source src="<?=AdminROOT?>public/videos/<?=$video_info['file']?>" type="video/webm" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
            <div class="alert video-title  mt-1">
                <b><?=strtoupper($video_info['title'])?></b>
            </div>
            <!-- <div class="p-4">
                <a class="p-2"><i class="fa fa-heart fa-2x"></i></a>
                <label class="p-2" for="comment"><i class="fa fa-comment fa-2x"></i></label>
            </div> -->

            <div class="alert description">
                <b>Description:</b><br>
                <div class="big-text ">
                    ex
                    dolore maiores harum veniam qui reiciendis deserunt temporibus animi dolorem sapiente. Dolorum rem,
                    ducimus et nostrum doloremque fugit perferendis ullam voluptatum vel labore, assumenda fugiat
                    officia.
                    Labore animi perspiciatis itaque, corrupti ipsam ea velit vel error. Deleniti vel pariatur enim
                    magni,
                    laborum ipsa similique mollitia neque illo dolores inventore molestias aut amet eum explicabo,
                    voluptatem nostrum veniam consectetur odit accusantium atque itaque modi optio! Delectus quibusdam
                    fugiat quae, totam nobis quasi nulla ullam distinctio unde commodi minus excepturi aperiam illo
                    necessitatibus cumque saepe alias fugit voluptatibus earum voluptates labore, illum sapiente. Quos
                    est,
                    obcaecati consequuntur error eos maxime mollitia cupiditate magnam iusto modi ex aspernatur vero
                    illum!
                    Animi illo distinctio minus velit, corporis, harum accusantium corrupti, vero et doloremque aut
                    excepturi provident dolorum.
                </div>
                <a class="seemore">See More</a>
            </div>
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5 border">
            <div class="alert comments">
                <b>Comments:-</b>
                <form id="videoCommentForm" method="POST">
                    <input type="hidden" name="video_id" value="<?=$video_info['id']?>">
                    <input type="hidden" name="user_id" value="<?=$_SESSION['user_info']['id']??0?>">
                    <input type="hidden" name="video_curr_id" value="<?=$_GET['url']?>">
                    <input class="form-control" type="text" id="comment" name="comment" placeholder="Add a comment...">
                    <button type="button" class="btn btn-primary" onclick="comments('videoCommentForm','users/comment','msg-pop-up','1')">POST COMMENT</button>
                </form>

                <div id="loadComments1">

                </div>
            </div>
        </div>
    </div>


</div>
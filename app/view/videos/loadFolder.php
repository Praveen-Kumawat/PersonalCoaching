<div class="container-xxl p-4">
    <div class="d-flex" style="justify-content:space-between">
        <h3>Folder's Videos</h3>
        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class="fa fa-folder m-1"></i>New +</button>
    </div>
    <hr>
    <div class="row">
        <?php foreach($folder_videos as $info){ ?>

        <div class="col-md-4 col-sm-4 col-lg-2 folder">
            <div class="folder_icon d-flex justify-content-center mt-2" width="100px">
                <a href="<?=ROOT?>videos/player/<?=$info['vid']?>"><img src="<?=ROOT?>public/img/icon/video.png"
                        width="100" alt=""></a>
            </div>
            <div class="folder_name d-flex justify-content-center text-center mt-4" width="100px">
                <h5><?=strtoupper($info['title'])?></h5>
            </div>
        </div>

        <?php
        }
        ?>

    </div>
</div>
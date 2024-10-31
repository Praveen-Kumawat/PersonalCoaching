<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?=ROOT?>videos/newFolder" method="post">
            <div class="modal-body">
                    <!-- <label for="folder">Folder Name:</label> -->
                    <input type="text" class="form-control" name="folder_name" placeholder="Enter Folder Name">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Create</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="container-xxl p-4">
    <div class="d-flex" style="justify-content:space-between">
        <h3>All Folders</h3>
        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                class="fa fa-folder m-1"></i>New +</button>
    </div>
    <hr>
    <div class="row">
        <?php foreach($folder_data as $info){ ?>
            
        <div class="col-md-4 col-sm-4 col-lg-2 folder">
            <div class="folder_icon d-flex justify-content-center" width="100px">
                <a href="<?=ROOT?>videos/getVideosWhereYouSaved/<?=$info['id']?>"><img src="<?=ROOT?>public/img/icon/folder.png" width="100" alt=""></a>
            </div>
            <div class="folder_name d-flex justify-content-center text-center " width="100px">
                <h5><?=$info['folder_name']?></h5>
            </div>
        </div>
        
        <?php
       }
        ?>
       
    </div>
</div>
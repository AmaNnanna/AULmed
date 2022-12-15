<!--Sidebar start-->
<?php
include_once 'sidebar.php';
?>
<!--Sidebar end-->

<div class="content-body">
    <div class="container-fluid">

        <?php include_once 'new-event.php'; ?>


        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="comment-reply-title text-primary mb-3" id="reply-title">Upload a video link you want to use in this slide</h5>
                    <form class="comment-form" id="commentform" action="/new_slide" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="doctor_id" class="text-black font-w600">Please select your name from the Doctors list<span class="required" style="color: red;">*</span></label>
                                    <select class="form-control" name="doctor_id">
                                        <?php $doctors = mysqli_query($Core->dbCon, "SELECT * FROM `doctors`");
                                        while ($doctor = mysqli_fetch_object($doctors)) : ?>
                                            <option class="form-control" value="<?= $doctor->id ?>"><?= $doctor->name ?></option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="slideTitle" class="text-black font-w600">Set a title for this video</label>
                                    <input type="text" class="form-control" name="Title">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="videoImage" class="text-black font-w600">Upload a picture thumbnail for this video</label>
                                    <input type="file" class="form-control" name="videoImage">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="videoLink" class="text-black font-w600">Paste the full link to the video source here</label>
                                    <input type="text" class="form-control" name="videoLink">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="submit" value="Submit this Dairy" class="submit btn btn-primary"> 
                                    <span class="pull-right"><a href="/admin/pages/new-personal-diary">Go Back</a></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
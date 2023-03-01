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
                    <div class="comment-respond" id="respond">
                        <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Create New Video Tutorial</h4>
                        <form class="comment-form" id="commentform" action="/new_video_tutorial" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="title" class="text-black font-w600">Enter a Title for this Tutorial<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="title" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="image_thumbnail" class="text-black font-w600">Upload a Video thumbnail for the Tutorial</label>
                                        <input type="file" class="form-control" name="image_thumbnail">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="doctor_id" class="text-black font-w600">Select your name from the Creators' list<span class="required" style="color: red;">*</span></label>
                                        <select class="form-control" name="doctor_id" aria-required="required">
                                            <?php $doctors = mysqli_query($Core->dbCon, "SELECT * FROM `doctors`");
                                            while ($doctor = mysqli_fetch_object($doctors)) : ?>
                                                <option class="form-control" value="<?= $doctor->id ?>"><?= $doctor->name ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="creator_name" class="text-black font-w600">Please confirm your name from the Creators' list<span class="required" style="color: red;">*</span></label>
                                        <select class="form-control" name="creator_name" aria-required="required">
                                            <?php $doctors = mysqli_query($Core->dbCon, "SELECT * FROM `doctors`");
                                            while ($doctor = mysqli_fetch_object($doctors)) : ?>
                                                <option class="form-control" value="<?= $doctor->name ?>"><?= $doctor->name ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="creator_designation" class="text-black font-w600">What is Your Designation (Eg. Doctor, Nurse, Health Instructor etc.)?</label>
                                        <input type="text" class="form-control" name="creator_designation">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="video_source" class="text-black font-w600">Where is this Video Playing from (Eg. YouTube, Venmo)?</label>
                                        <input type="text" class="form-control" name="video_source">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="video_duration" class="text-black font-w600">How Long is this Video (In Munites or Hours)?</label>
                                        <input type="text" class="form-control" name="video_duration">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="video_link" class="text-black font-w600">Copy the Complete Video Link and Paste Here</label>
                                        <input type="text" class="form-control" name="video_link">
                                    </div>
                                </div>

                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="description" class="text-black font-w600">Write a Brief Description for this Campaign <span class="text-danger">(200 characters max.)</span></label>
                                        <input type="text" class="form-control" name="description" maxlength="200">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Post this Video Tutorial" class="submit btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Add upto 5 Slider Images and Content</h4>
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
                                    <label for="slideTitle" class="text-black font-w600">Set a title for this slider set</label>
                                    <input type="text" class="form-control" name="Title">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="slideImageA" class="text-black font-w600">Upload first slider image</label>
                                    <input type="file" class="form-control" name="slideImageA">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="slideDescriptionA" class="text-black font-w600">Write a Brief Description for this first slider (200 characters max.)</label>
                                    <input type="text" class="form-control" name="slideDescriptionA" maxlength="200">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="slideImageB" class="text-black font-w600">Upload second slider image</label>
                                    <input type="file" class="form-control" name="slideImageB">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="slideDescriptionB" class="text-black font-w600">Write a Brief Description for this second slider (200 characters max.)</label>
                                    <input type="text" class="form-control" name="slideDescriptionB" maxlength="200">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="slideImageC" class="text-black font-w600">Upload third slider image</label>
                                    <input type="file" class="form-control" name="slideImageC">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="slideDescriptionC" class="text-black font-w600">Write a Brief Description for this third slider (200 characters max.)</label>
                                    <input type="text" class="form-control" name="slideDescriptionC" maxlength="200">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="slideImageD" class="text-black font-w600">Upload fourth slider image</label>
                                    <input type="file" class="form-control" name="slideImageD">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="slideDescriptionD" class="text-black font-w600">Write a Brief Description for this fourth slider (200 characters max.)</label>
                                    <input type="text" class="form-control" name="slideDescriptionD" maxlength="200">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="slideImageE" class="text-black font-w600">Upload fifth slider image</label>
                                    <input type="file" class="form-control" name="slideImageE">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="slideDescriptionE" class="text-black font-w600">Write a Brief Description for this fifth slider (200 characters max.)</label>
                                    <input type="text" class="form-control" name="slideDescriptionE" maxlength="200">
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
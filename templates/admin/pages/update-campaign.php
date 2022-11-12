<!--**********************************
            Sidebar start
        ***********************************-->
<!--**********************************
  Sidebar start
***********************************-->
<?php
include_once 'sidebar.php';
?>
<!--**********************************
  Sidebar end
***********************************-->
<!--**********************************
            Sidebar end
        ***********************************-->

<div class="content-body">
    <div class="container-fluid">

        <div class="modal fade" id="addOrderModalside">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Event</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Event Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Event Date</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Description</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="comment-respond" id="respond">
                        <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Update this Campaign</h4>


                        <div class="input-group col-lg-12 my-5">

                            <label for="campaignImage" class="text-black font-w600 pr-4">Change Campaign Image?</label>
                            <input type="file" class="form-control" name="campaignImage">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#addOrderModalside_<?= $newUpdate->id ?>">Change Image</button>

                                <!-- Change Campaign Image -->
                                <div class="modal fade" id="addOrderModalside_<?= $newUpdate->id ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Cancel</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form class="comment-form" id="commentform" action="/update_campaign/<?= $newUpdate->id ?>/image" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="text-black font-w500">Replace Exiting Image?</label>
                                                        <p>Doing this will remove the current image!</p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Change Image</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5><?= $SELF->Toast(); ?></h5>

                        <form class="comment-form" id="commentform" action="/update_campaign/<?= $newUpdate->id ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="campaignTopic" class="text-black font-w600">Change this Campaign Topic<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="campaignTopic" value="<?= $newUpdate->campaignTopic ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="startDate" class="text-black font-w600">Change When this Campaign Will Start?</label>
                                        <input type="text" class="form-control" name="startDate" id="min-date-start" value="<?= $newUpdate->startDate ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="endDate" class="text-black font-w600">Change When this Campaign Will End?</label>
                                        <input type="text" class="form-control" name="endDate" id="min-date-end" value="<?= $newUpdate->endDate ?>">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="campaignDescription" class="text-black font-w600">Write a Different Brief Description for this Campaign</label>
                                        <textarea class="form-control" name="campaignDescription"><?= $newUpdate->campaignDescription ?></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="campaignDetails" class="text-black font-w600">Write a New Full Description for this Campaign</label>
                                        <textarea id="firstContentArea" class="form-control" name="campaignDetails"><?= $newUpdate->campaignDetails ?></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Update this Campaign" class="submit btn btn-primary">
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
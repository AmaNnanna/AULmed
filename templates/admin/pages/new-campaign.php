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
                        <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Create New Campaign</h4>
                        <form class="comment-form" id="commentform" action="/new_campaign" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="campaignTopic" class="text-black font-w600">Enter a Title for this Campaign<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="campaignTopic">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="campaignImage" class="text-black font-w600">Upload an Image for this Campaign</label>
                                        <input type="file" class="form-control" name="campaignImage">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="startDate" class="text-black font-w600">When will this Campaign Start?</label>
                                        <input type="text" class="form-control" name="startDate" id="min-date-start">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="endDate" class="text-black font-w600">When will this Campaign End?</label>
                                        <input type="text" class="form-control" name="endDate" id="min-date-end">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="campaignDescription" class="text-black font-w600">Write a Brief Description for this Campaign (200 characters max.)</label>
                                        <input type="text" class="form-control" name="campaignDescription" maxlength="200">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="campaignDetails" class="text-black font-w600">Write a Full Description for this Campaign</label>
                                        <textarea id="firstContentArea" class="form-control" name="campaignDetails"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Post this Campaign" class="submit btn btn-primary">
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
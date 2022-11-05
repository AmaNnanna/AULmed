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
                                        <label for="campaignDescription" class="text-black font-w600">Write a Brief Description for this Campaign</label>
                                        <textarea class="form-control" name="campaignDescription"></textarea>
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
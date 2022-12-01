<!--Sidebar start-->
<?php
include_once 'sidebar.php';
?>
<!--Sidebar end-->

<div class="content-body">
    <div class="container-fluid">

        <?php include_once 'new-event.php'; ?>


        <div class="container">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <div class="comment-respond" id="respond">
                        <h4 class="comment-reply-title text-primary" id="reply-title">Add a Doctor to Create Diaries</h4>
                        <form class="comment-form" id="commentform" action="/new_doctor" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="campaignTopic" class="text-black font-w600">Enter Doctor's Name<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Add Doctor to List" class="submit btn btn-primary">
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
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
                        <h4 class="comment-reply-title text-primary" id="reply-title">Create New Health Topic Category</h4>
                        <form class="comment-form" id="commentform" action="/new_health_topic_category" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="category" class="text-black font-w600">Enter Category Name<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="category">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Create Category" class="submit btn btn-primary">
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
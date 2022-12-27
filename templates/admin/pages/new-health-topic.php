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
                        <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Create New Health Topic</h4>
                        <form class="comment-form" id="commentform" action="/new_health_topic" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="healthTitle" class="text-black font-w600">Enter a Title<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="healthTitle">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category_id" class="text-black font-w600">Please select a category for this Health Topic<span class="required" style="color: red;">*</span></label>
                                        <select class="form-control" name="category_id">
                                            <?php $HealthTopics = mysqli_query($Core->dbCon, "SELECT * FROM `heath_topic_groups`");
                                            while ($HealthTopic = mysqli_fetch_object($HealthTopics)) : ?>
                                                <option class="form-control" value="<?= $HealthTopic->id ?>"><?= $HealthTopic->category ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="healthImage" class="text-black font-w600">Upload a main Image</label>
                                        <input type="file" class="form-control" name="healthImage">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="imageTitle" class="text-black font-w600">Give this Image a Title</label>
                                        <input type="text" class="form-control" name="imageTitle">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="firstContent" class="text-black font-w600">Enter half of the Health Topic content</label>
                                        <textarea id="firstContentArea" class="form-control" name="firstContent"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="videoImage" class="text-black font-w600">Upload an Image For Video</label>
                                        <input type="file" class="form-control" name="videoImage">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="videoTitle" class="text-black font-w600">Enter a Title for the Video</label>
                                        <input type="text" class="form-control" name="videoTitle">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="healthVideo" class="text-black font-w600">Copy and Paste Video Link Here</label>
                                        <input type="text" class="form-control" name="healthVideo">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="quoteAuthor" class="text-black font-w600">Who Authored this Quote</label>
                                        <input type="text" class="form-control" name="quoteAuthor">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="healthQuote" class="text-black font-w600">Enter a Blockquote Here if any</label>
                                        <textarea class="form-control" name="healthQuote"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="lastContent" class="text-black font-w600">Enter second half of Health Topic Content here</label>
                                        <textarea id="secondContentArea" class="form-control" name="lastContent"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Create Health Topic" class="submit btn btn-primary">
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
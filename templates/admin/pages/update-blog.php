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
                        <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Update this Blog</h4>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#addOrderModalside_<?= $newBlogUpdate->id ?>">Change Main Blog Image?</button>

                                <!-- Change Campaign Image -->
                                <div class="modal fade" id="addOrderModalside_<?= $newBlogUpdate->id ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Cancel</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form class="comment-form" id="commentform" action="/update_blog/<?= $newBlogUpdate->id ?>/first_image" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="text-black font-w500">Replace Exiting Image?</label>
                                                        <input type="file" class="form-control" name="firstImage">
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

                        <div class="col-lg-6">
                            <div class="form-group">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#addOrderModalside_<?= $newBlogUpdate->id ?>">Change Image For Video?</button>

                                <!-- Change Campaign Image -->
                                <div class="modal fade" id="addOrderModalside_<?= $newBlogUpdate->id ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Cancel</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form class="comment-form" id="commentform" action="/update_blog/<?= $newBlogUpdate->id ?>/second_image" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="text-black font-w500">Replace Exiting Image?</label>
                                                        <input type="file" class="form-control" name="secondImage">
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

                        <div class="col-lg-6">
                            <div class="form-group">
                                <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#addOrderModalside_<?= $newBlogUpdate->id ?>">Change Last Image?</button>

                                <!-- Change Campaign Image -->
                                <div class="modal fade" id="addOrderModalside_<?= $newBlogUpdate->id ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Cancel</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form class="comment-form" id="commentform" action="/update_blog/<?= $newBlogUpdate->id ?>/third_image" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="text-black font-w500">Replace Exiting Image?</label>
                                                        <input type="file" class="form-control" name="secondImage">
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


                        <form class="comment-form" id="commentform" action="/new_blog" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="heading" class="text-black font-w600">Change Blogpost Heading?<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="heading" value="<?= $newBlogUpdate->heading ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="postCreator" class="text-black font-w600">Change Who Created this Blog?</label>
                                        <input type="text" class="form-control" name="postCreator" value="<?= $newBlogUpdate->postCreator ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="shortDescription" class="text-black font-w600">Change this Blog Description? (200 characters max.)</label>
                                        <input type="text" class="form-control" name="shortDescription" maxlength="200" value="<?= $newBlogUpdate->shortDescription ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="firstContent" class="text-black font-w600">Update this Section?</label>
                                        <textarea id="firstContentArea" class="form-control" name="firstContent"><?= $newBlogUpdate->firstContent ?></textarea>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="secondImageHeading" class="text-black font-w600">Change Video Title Here</label>
                                        <input type="text" class="form-control" name="secondImageHeading" value="<?= $newBlogUpdate->secondImageHeading ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="videoLink" class="text-black font-w600">Paste New Video Link Here</label>
                                        <input type="text" class="form-control" name="videoLink" value="<?= $newBlogUpdate->videoLink ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="quoteAuthor" class="text-black font-w600">Who Authored the New Quote?</label>
                                        <input type="text" class="form-control" name="quoteAuthor" value="<?= $newBlogUpdate->quoteAuthor ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="blockQuote" class="text-black font-w600">Change Blockquote?</label>
                                        <textarea class="form-control" name="blockQuote"><?= $newBlogUpdate->blockQuote ?></textarea>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="secondContent" class="text-black font-w600">Update this Section</label>
                                        <textarea id="secondContentArea" class="form-control" name="secondContent"><?= $newBlogUpdate->secondContent ?></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="thirdImage" class="text-black font-w600">Upload Third Image</label>
                                        <input type="file" class="form-control" name="thirdImage">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="thirdImageHeading" class="text-black font-w600">Change Image Title?</label>
                                        <input type="text" class="form-control" name="thirdImageHeading" value="<?= $newBlogUpdate->thirdImageHeading ?>">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="thirdContent" class="text-black font-w600">Update This Section?</label>
                                        <textarea class="form-control" name="thirdContent" id="thirdContentArea"><?= $newBlogUpdate->thirdContent ?></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Update Blog" class="submit btn btn-primary">
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
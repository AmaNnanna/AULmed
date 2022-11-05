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
                        <h4 class="comment-reply-title text-primary mb-3" id="reply-title">Create New Blog</h4>
                        <form class="comment-form" id="commentform" action="/new_blog" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="heading" class="text-black font-w600">Enter a Blogpost Heading<span class="required" style="color: red;">*</span></label>
                                        <input type="text" class="form-control" name="heading">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="postCreator" class="text-black font-w600">Who Created this Blog</label>
                                        <input type="text" class="form-control" name="postCreator">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="firstImage" class="text-black font-w600">Upload Main Blog Image</label>
                                        <input type="file" class="form-control" name="firstImage">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="shortDescription" class="text-black font-w600">Write a Short Description for this Blog</label>
                                        <input type="text" class="form-control" name="shortDescription">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="firstContent" class="text-black font-w600">Enter First Part of Blog Content</label>
                                        <textarea id="firstContentArea" class="form-control" name="firstContent"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="secondImage" class="text-black font-w600">Upload an Image For Video</label>
                                        <input type="file" class="form-control" name="secondImage">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="secondImageHeading" class="text-black font-w600">Enter a Title for Video</label>
                                        <input type="text" class="form-control" name="secondImageHeading">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="videoLink" class="text-black font-w600">Copy and Paste Video Link Here</label>
                                        <input type="text" class="form-control" name="videoLink">
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
                                        <label for="blockQuote" class="text-black font-w600">Enter a Blockquote Here</label>
                                        <textarea class="form-control" name="blockQuote"></textarea>
                                    </div>
                                </div>

                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="secondContent" class="text-black font-w600">Enter Second Part of Blog Content</label>
                                        <textarea id="secondContentArea" class="form-control" name="secondContent"></textarea>
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
                                        <label for="thirdImageHeading" class="text-black font-w600">Enter an Image Title</label>
                                        <input type="text" class="form-control" name="thirdImageHeading">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="thirdContent" class="text-black font-w600">Enter Third Part of Blog Content</label>
                                        <textarea class="form-control" name="thirdContent" id="thirdContentArea"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" value="Post Blog" class="submit btn btn-primary">
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
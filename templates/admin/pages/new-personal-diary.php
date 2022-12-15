<?php
include_once 'sidebar.php';
?>


<!--Content body start-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">

        <!-- Add Event -->
        <?php include_once 'new-event.php'; ?>

        <div class="page-titles">
            <ul>
                <li>
                    <h5><?= $SELF->Toast(); ?></h5>
                </li>
                <li>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">AULmed</li>
                        <li class="breadcrumb-item active"><a href="/admin/pages/admin-home">Admin Page</a></li>
                    </ol>
                </li>
            </ul>
        </div>


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Create an Image Slider Dairy</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">If you prefer to add an image slider content in your Dairy, please use this link.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <a href="/admin/pages/post-slide" class="btn btn-primary">Add Your New Dairy</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Create a Blog Type Dairy</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">If you prefer to add a blog type content in your Dairy, please use this link.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <a href="/admin/pages/post-blog" class="btn btn-primary">Add Your New Dairy</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Create a Video Content</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">If you prefer to add a video link in your Dairy, please use this link.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <a href="/admin/pages/post-video" class="btn btn-primary">Add Your New Diary</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
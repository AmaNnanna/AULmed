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
                        <h5 class="card-title">Add a New Video Creator</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Add a New Professional Who Can Create Video Tutorials.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="/admin/pages/all-doctors" class="card-text text-dark d-inline">View All Doctors & Creators</a>
                        </div>

                        <a href="/admin/pages/new-doctor" class="btn btn-primary">Add a New Creator</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add a New Tutorial</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Add to Your Own Video Tutorial.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            
                        </div>

                        <a href="/admin/pages/new-video-tutorial" class="btn btn-primary">Add New Video Tutorial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once 'sidebar.php';
?>


<!--Content body start-->
<div class="content-body">
    <!--Row-->
    <div class="container-fluid">

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
                        <h5 class="card-title">Create a New Blog</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Create a New Blog Post for visitors of AULmed.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="/admin/pages/all-blogs" class="card-text text-dark d-inline">View All Blogs</a>
                        </div>

                        <a href="/admin/pages/new-blog" class="btn btn-primary">Create a New Blog</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add a New Campaign</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Add an Ongoing, or Upcoming Campaign.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="/admin/pages/all-campaigns" class="card-text text-dark d-inline">View All Campaigns</a>
                        </div>

                        <a href="/admin/pages/new-campaign" class="btn btn-primary">Create a New Campaign</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Doctor's Diary</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Add your diary & Manage other Doctors.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="/admin/pages/all-diaries" class="card-text text-dark d-inline">View & Manage Diaries</a>
                        </div>

                        <a href="/admin/pages/new-diary" class="btn btn-primary">Create a New Diary</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Create a New Event</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Add an Ongoing, or Upcoming Campaign.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="/admin/pages/all-campaigns" class="card-text text-dark d-inline">View & Manage Events</a>
                        </div>

                        <div>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="addOrderModalside1">Add New Event</a>
                            
                            <?php include_once 'new-event.php'; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
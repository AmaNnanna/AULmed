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
                        <h5 class="card-title">Add a New Doctor</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Create a New Doctor to Create Diaries.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="/admin/pages/all-doctors" class="card-text text-dark d-inline">View All Doctors</a>
                        </div>

                        <a href="/admin/pages/new-doctor" class="btn btn-primary">Add a New Doctor</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add a New Dairy</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Add to Your Own Personal Diary.</p>
                    </div>
                    <div class="card-footer d-sm-flex justify-content-between align-items-center">
                        <div class="card-footer-link mb-4 mb-sm-0">
                            <a href="/admin/pages/all-diaries" class="card-text text-dark d-inline">View All Doctors' Diaries</a>
                        </div>

                        <a href="/admin/pages/new-personal-diary" class="btn btn-primary">Add Your New Diary</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
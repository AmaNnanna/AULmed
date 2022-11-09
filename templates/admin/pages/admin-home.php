<?php
    include_once 'sidebar.php';
?>


<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <!-- row -->

    <div class="container-fluid">
        <!-- Add Order -->
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
        </div>
    </div>
</div>
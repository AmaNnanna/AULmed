        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

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



        <!--Content body start-->
        <div class="content-body">
            <!-- row -->
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
                                <li class="breadcrumb-item active"><a href="">Admin Page</a></li>
                            </ol>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="table-responsive">
                            <table id="example2" class="table card-table display dataTablesCard">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Picture</th>
                                        <th>Full Name</th>
                                        <th>Job Description</th>
                                        <th>Review</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($Review = mysqli_fetch_object($Reviews)) : ?>
                                        <tr>
                                            <td><?= $Review->id ?></td>
                                            <td><img style="height: 70px; width:auto" src="<?= $Review->picture ?>" alt="img"></td>
                                            <td><?= "<b>$Review->fullName</b>" ?></td>
                                            <td><?= $Review->jobDescription ?></td>
                                            <td><?= $Review->review ?></td>
                                            <td>
                                                <?php if ($Review->approved == 0) : ?>
                                                    <a href="/pages/admin/<?= $Review->id ?>/approved" class="btn btn-primary">Approve</a>;
                                                <?php else : ?>
                                                    <button class="btn btn-success" aria-disabled>Approved</button>
                                                <?php endif; ?>
                                            </td>

                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Content body end-->
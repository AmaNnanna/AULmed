<!--Sidebar start-->
<?php
include_once 'sidebar.php';
?>
<!--Sidebar end-->


<!--Content body start-->
<div class="content-body">
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
                                    <td>
                                        <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#addOrderModalside_<?= $Review->id ?>">Delete</a>

                                        <!-- Add Order -->
                                        <div class="modal fade" id="addOrderModalside_<?= $Review->id ?>">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Cancel</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <form action="/delete-review/<?= $Review->id ?>" method="POST">
                                                            <div class="form-group">
                                                                <label class="text-black font-w500">Delete this review?</label>
                                                                <p>This cannot be undone!</p>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Confirm</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>

                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <div><a href="/admin/pages/admin-home" class="btn btn-primary">Go Back To Admin-Page</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Content body end-->
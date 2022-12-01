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
                        <li class="breadcrumb-item active"><a href="/admin/pages/admin-home">Admin Page</a></li>
                    </ol>
                </li>
            </ul>
        </div>

        <h5><?= $SELF->Toast(); ?></h5>

        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table id="example2" class="table card-table display dataTablesCard">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Campaign Topic</th>
                                <th>About this Campaign</th>
                                <th>Duration</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($Campaign = mysqli_fetch_object($Campaigns)) : ?>
                                <tr>
                                    <td><?= $Campaign->id ?></td>
                                    <td><?= $Campaign->campaignTopic ?></td>
                                    <td><?= $Campaign->campaignDescription ?></td>
                                    <td><?= date("j F, Y. g:ia", strtotime($Campaign->startDate . " " . "To" . " " . $Campaign->endDate)) ?></td>
                                    <td>
                                        <a href="" class="btn btn-secondary" data-toggle="modal" data-target="#addOrderModalside_<?= $Campaign->id ?>">Delete</a>

                                        <!-- Add Order -->
                                        <div class="modal fade" id="addOrderModalside_<?= $Campaign->id ?>">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Cancel</h5>
                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <form action="/delete-campaign/<?= $Campaign->id ?>" method="POST">
                                                            <div class="form-group">
                                                                <label class="text-black font-w500">Delete this campaign?</label>
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
                                    <td>
                                        <a href="/admin/pages/<?= $Campaign->id ?>/update-campaign" class="btn btn-success">Update</a>
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
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-success" role="alert"></div>'); ?>
            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" class="btn btn-primary" 
            data-toggle="modal" data-target="#Addnewrole">Add New Role</a>
            <!-- tabel-->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope=row><?= $i; ?></th>
                        <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/'). $r['id'] ?>" class="badge badge-warning btn-sm">Access</a>
                                <a href="#"  class="btn btn-success" data-toggle="modal" 
                                data-popupt="tooltip" data-placement="top" title="edit" 
                                data-target="#roleedit<?= $r['id']; ?>">Edit</a>
                                <button onclick="hapusRole('<?=base_url('admin/hapusrole/'). $r['id']?>')"
                                class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>                                                                                                                                 
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- TAMBAH ROLE BARU -->
<div class="modal fade" id="addNewRole" tabindex="-1" aria-labelledby="addNewRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewRoleModalLabel">Add New Role</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- EDIT ROLE -->
<?php foreach ($role as $r) : ?>
    <div class="modal fade" id="roleedit<?= $r['id'] ?>" tabindex="-1" aria-labelledby="addNewRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewRoleModalLabel">Edit Role</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/editrole'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $r['id'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role" value="<?= $r['role'] ?>" placeholder="Role Name" value="">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Done</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
<?php endforeach; ?>     
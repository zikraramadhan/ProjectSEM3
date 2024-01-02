<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex align-items-center mb-3">
                            <a href="<?= base_url() ?>Admin/psikolog" class="btn btn-blue btn-sm ms-2">
                                <i class="mdi mdi-autorenew"></i>
                            </a>
                        </form>
                    </div>
                    <h4 class="page-title">Psikolog</h4>
                    <a href="<?= base_url()?>admin/psikolog/tambah" class="btn btn-primary mb-2">Tambah Psikolog</a> 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Spesialis</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($psikolog as $p) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $p['nama']; ?>
                                        </td>
                                        <td>
                                            <?= $p['spesialis']; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url() ?>admin/psikolog/edit/<?= $p['id_psikolog']; ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="<?= base_url() ?>admin/psikolog/delete/<?= $p['id_psikolog']; ?>"
                                                class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->
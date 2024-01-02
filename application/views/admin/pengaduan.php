<div class="content">
    <!-- Start Content-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex align-items-center mb-3">
                            <a href="<?= base_url() ?>Admin/pengaduan" class="btn btn-blue btn-sm ms-2">
                                <i class="mdi mdi-autorenew"></i>
                            </a>
                        </form>
                    </div>
                    <h4 class="page-title">Pengaduan</h4>
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
                                    <th>Judul Laporan</th>
                                    <th>No HP</th>
                                    <th>Lokasi</th>
                                    <th>Tanggal Kejadian</th>
                                    <th>Detail</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($pengaduan as $p) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $p['nama']; ?>
                                        </td>
                                        <td>
                                            <?= $p['judul_laporan']; ?>
                                        </td>
                                        <td>
                                            <?= $p['no_hp']; ?>
                                        </td>
                                        <td>
                                            <?= $p['lokasi']; ?>
                                        </td>
                                        <td>
                                            <?= $p['tanggal_kejadian']; ?>
                                        </td>
                                        <td>
                                            <?= $p['detail']; ?>
                                        </td>
                                        <td>
                                            <?= $p['status']; ?>
                                        </td>
                                        <td>
                                            <?php if ($p['status'] == null) { ?>
                                                <a href="<?= base_url() ?>admin/pengaduan/proses/<?= $p['id_laporan']; ?>"
                                                    class="btn btn-warning btn-sm">Proses</a>
                                                <?php
                                            }else if ($p['status'] == 'Diproses') {
                                            ?>
                                            <a href="<?= base_url() ?>admin/pengaduan/terima/<?= $p['id_laporan']; ?>"
                                                class="btn btn-success btn-sm">Terima</a>
                                                <?php
                                }
                                ?>
                                            <a href="<?= base_url() ?>admin/pengaduan/delete/<?= $p['id_laporan']; ?>"
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
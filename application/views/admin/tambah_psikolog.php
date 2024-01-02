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
                    <h4 class="page-title">Tambah Psikolog</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" action="" method="POST" novalidate>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="validationCustom01" name="nama" placeholder="Masukkan Nama" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom02" class="form-label">Spesialis</label>
                                <input type="text" class="form-control" id="validationCustom02" name="spesialis" placeholder="Masukkan Spesialis" required />
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->
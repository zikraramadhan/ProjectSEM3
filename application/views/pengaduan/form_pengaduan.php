<style>
    .row .card-body {

        border: 1px solid #000;
        background-color: #DC84F3;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0);
    }
    .col-md-6 {
        margin-top: 20px;
    }
    form button {
        margin-top: 15px;
    }
</style>

<br>
<div class="container">]
    <div class=" text-center mt-5 ">
        <h1>Form Pengaduan</h1>
        <p style="color: red;">Pastikan data diisi dengan benar dan sesuai kenyataan yang ada!
            Apabila ada kesalahan pada pelaporan maka tidak dapat diperbaiki</p>
    </div>
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form action="<?= base_url('pengaduan/buat_pengaduan'); ?>" id="contact-form" role="form" method="POST">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Nama Pelapor</label>
                                            <input value="<?= set_value('nama'); ?>" id="form_name" type="text"
                                                name="nama" class="form-control" placeholder="Masukkan nama anda *"
                                                required="required" data-error="Isi data ini terlebih dahulu!">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Judul Laporan</label>
                                            <input value="<?= set_value('judul_laporan'); ?>" id="judul" type="text"
                                                name="judul_laporan" class="form-control"
                                                placeholder="Sesuaikan dengan jenis kasus yang dialami *"
                                                required="required" data-error="Laporan harus diisi.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">No HP</label>
                                            <input value="<?= set_value('no_hp'); ?>" id="form_lastname" type="text"
                                                name="no_hp" class="form-control" placeholder="Masukkan Nomor HP *"
                                                required="required" data-error="No hp harus diisi.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Lokasi Kejadian</label>
                                            <input value="<?= set_value('lokasi'); ?>" id="form_lastname" type="text"
                                                name="lokasi" class="form-control"
                                                placeholder="Nama kota dan kecamatan*" required="required"
                                                data-error="lokasi kejadian harus diisi.">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_event_date">Tanggal Kejadian</label>
                                            <div class="input-group">
                                                <input value="<?= set_value('tanggal_kejadian'); ?>"
                                                    id="form_event_date" type="date" name="tanggal_kejadian"
                                                    class="form-control" placeholder="Pilih tanggal kejadian *"
                                                    required="required" data-error="Tanggal kejadian diperlukan.">
                                                <div class="input-group-append">
                                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_message">Detail Kejadian</label>
                                                <textarea value="<?= set_value('detail'); ?>" id="form_message"
                                                    name="detail" class="form-control"
                                                    placeholder="Ceritakan secara ringkas kejadian yang dialami"
                                                    rows="4" required="required"
                                                    data-error="Please, leave us a message."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Kirim Laporan</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.8 -->
        </div>
        <!-- /.row-->
    </div>
</div>
<br>
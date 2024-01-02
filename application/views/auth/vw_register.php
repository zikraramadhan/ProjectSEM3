
<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?= base_url('assets/') ?>images/register.png" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-4">
              <h3>Buat Akun!</h3>
              <p class="mb-4">Buat akun untuk pengaduan ^^</p>
            </div>
            <form class ="user" method="POST" action="<?= base_url('Auth/registrasi'); ?>">
              <div class="form-group first">
                <label for="nama">Nama lengkap</label>
                <input name="nama_lengkap" type="text" class="form-control" id="nama_lengkap">
                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group first">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input name="tanggal_lahir" type="text" class="form-control styled-input" id="tanggal_lahir" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'">
                <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group first">
                <label for="gender">gender</label>
                <select name="gender" class="form-control" id="gender" style="background-color: #EDF2F5;">
                  <option value=""></option>
                  <option value="laki-laki">Laki-laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
              </div>

              <div class="form-group first">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email">
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input name="password1" type="password" class="form-control" id="password">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              
              <div class="form-group last mb-4">
                <label for="password">Retype Password</label>
                <input name="password2" type="password" class="form-control" id="password">
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked" />
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div>

              <input type="submit" value="Buat Akun" class="btn btn-block btn-primary">
              <br>
              <p style="text-align: center;">Sudah punya akun? <a
                  href="<?= base_url('Auth') ?>">Login</a></p>
            </form>
            <script>
            </script>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
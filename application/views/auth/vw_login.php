<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="<?= base_url('assets/') ?>images/login.png" alt="Image" class="img-fluid">
			</div>
			<div class="col-md-6 contents">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="mb-4">
							<h3>Login</h3>
							<p class="mb-4">Masuk untuk dapat membuat pengaduan</p>
						</div>

						<?= $this->session->flashdata('message'); ?>
						<form action="<?= base_url('auth'); ?>" method="POST">
							<div class="form-group first">
								<label>Email</label>
								<input name="email" type="text" value="<?= set_value('email'); ?>" class="form-control">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

							</div>
							<div class="form-group last mb-4">
								<label>Password</label>
								<input name="password" value="<?= set_value('password'); ?>" type="password" class="form-control">
								<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
							</div>
							<button type="submit" class="btn btn-block btn-primary">Login </button>
							<p style="text-align: center;">Belum punya akun? <a href="<?= base_url('Auth/registrasi') ?>">Buat akun</a>
						</form>
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

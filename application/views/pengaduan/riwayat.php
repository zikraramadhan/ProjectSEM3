<br><br><br>
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">
		<br>
		Riwayat Laporan Pengaduan
	</h1>
	<div class=" row">
		<div class="col-md-6"><a href="<?= base_url('pengaduan/buat_pengaduan') ?>" class="btn btn-info mb-2">Tambah
				Laporan</a></div>
		<div class="col-md-12">
			<?= $this->session->flashdata('message'); ?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>Judul Laporan</td>
						<td>No Hp</td>
						<td>Lokasi Kejadian</td>
                        <td>Tanggal Kejadian</td>
                        <td>Detail Kejadian</td>
						<td>Status</td>
						<td>Action</td>
					</tr>
				</thead>
			    <tbody>
					<?php $i = 1; ?>
					<?php foreach ($pengaduan as $us) : ?>
					<tr>
						<td><?= $i; ?>.</td>
						<td><?= $us['nama']; ?></td>
						<td><?= $us['judul_laporan']; ?></td>
						<td><?= $us['no_hp']; ?></td>
                        <td><?= $us['lokasi']; ?></td>
                        <td><?= $us['tanggal_kejadian']; ?></td>
                        <td><?= $us['detail']; ?></td> 
						<td><?php if($us['status']==null){ echo "Menunggu";}else{ echo $us['status']; } ?></td>
						<td><a href="<?= base_url()?>pengaduan/hapus/<?= $us['id_laporan'];?>" class="btn btn-danger btn-sm">Hapus</a></td>
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
				</tbody> 
			</table>
		</div>
	</div>

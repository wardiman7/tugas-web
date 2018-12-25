<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
		</div>
		<div class="card-body">
			<a href="<?php echo site_url('admin/dosen/tambah'); ?>" class="btn btn-primary btn-sm"> Tambah Data</a>
			<hr>
			<table class="table table-bordered">
				<tr>
					
					<td>NIK</td>
					<td>Nama Dosen</td>
					<td>Alamat</td>
					<td>Tgl Dibuat</td>
					<td>Aksi</td>

				</tr>
				<?php foreach ($isi_tabel as $key) { ?>
				<tr>
					<td><?php echo $key->nik ?></td>
					<td><?php echo $key->nama_dosen ?></td>
					<td><?php echo $key->alamat ?></td>
					<td><?php echo date('d M Y', strtotime($key->created_at) ); ?></td>
					<td>
						<a href="<?php echo site_url('admin/dosen/edit/'.$key->nik); ?>" class="btn btn-primary btn-sm">Edit</a> | <a href="<?php echo site_url('admin/dosen/hapus/'.$key->nik); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data?')">Hapus</a>
					</td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</div>
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<?php echo $sub_judul; ?>
		</div>
		<div class="card-body">
			<a href="<?php echo site_url('admin/mahasiswa/tambah'); ?>" class="btn btn-primary btn-sm"> Tambah Data</a>
			<hr>
			<table class="table table-bordered">
				<tr>
					
					<td>NIM</td>
					<td>Nama Mahasiswa</td>
					<td>Program Studi</td>
					<td>Tgl Dibuat</td>
					<td>Aksi</td>

				</tr>
				<?php foreach ($isi_tabel as $key) { ?>
				<tr>
					<td><?php echo $key->NIM ?></td>
					<td><?php echo $key->nama_mahasiswa ?></td>
					<td><?php echo $key->program_studi ?></td>
					<td><?php echo date('d M Y', strtotime($key->created_at) ); ?></td>
					<td>
						<a href="<?php echo site_url('admin/mahasiswa/edit/'.$key->NIM); ?>" class="btn btn-primary btn-sm">Edit</a> | <a href="<?php echo site_url('admin/mahasiswa/hapus/'.$key->NIM); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data?')">Hapus</a>
					</td>
				</tr>
			<?php } ?>
			</table>
		</div>
	</div>
</div>
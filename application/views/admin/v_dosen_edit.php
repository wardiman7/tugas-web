<div class="col-md-6" >
   <div class="card">
      <div class="card-header">
        <?php echo $sub_judul; ?>
      </div>
      <div class="card-body">
        <form action="<?php echo site_url('admin/dosen/proses_edit'); ?>" method="post">
          <div class="form-group">
            <label>NIK</label>
            <input class="form-control" name="nik" value="<?php echo $isi_data->nik; ?>" readonly>             
          </div>
          <div class="form-group">
            <label>Nama Dosen</label>
            <input class="form-control" name="nama_dosen" value="<?php echo $isi_data->nama_dosen; ?>">             
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea cols="30" rows="5" class="form-control" name="alamat" value="<?php echo $isi_data->alamat; ?>"></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>               
          </div>
        </form>
      </div>     
   </div>
</div>
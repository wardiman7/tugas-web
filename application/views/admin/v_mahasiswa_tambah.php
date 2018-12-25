<div class="col-md-6" >
   <div class="card">
      <div class="card-header">
        <?php echo $sub_judul; ?>
      </div>
      <div class="card-body">
        <form action="<?php echo site_url('admin/mahasiswa/proses_tambah'); ?>" method="post">
          <div class="form-group">
            <label>NIM</label>
            <input class="form-control" name="NIM">             
          </div>
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input class="form-control" name="nama_mahasiswa">             
          </div>
          <div class="form-group">
            <label>Program Studi</label>
            <select class="form-control" name="program_studi">
            <option value="D3 MI">D3 MI</option>
            <option value="D3 TI">D3 TI</option>
            <option value="S1 TI">S1 TI</option>
            </select>
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit">Simpan</button>               
          </div>
        </form>
      </div>     
   </div>
</div>
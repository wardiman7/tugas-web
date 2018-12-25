<div class="col-sm-12" >
   <div class="card" >
    <div class="card-header" style="background-color: lightblue"> <?php echo $sub_judul;?></div>
    <div class="card-body" style="background-color: lightyellow">
      <form action="<?php echo site_url('admin/pengumuman/proses_edit'); ?>" method="post">
       <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control"  name="judul" value="<?=$isi_tabel->judul;?>">
      </div>
      <div class="form-group">
        <label>Isi</label>
        <textarea cols="30" rows="5" class="form-control" name="isi"><?=$isi_tabel->isi;?></textarea> 
         </div>
      <div class="form-group">
        <label>Penulis</label>
        <input type="text" class="form-control" name="penulis" value="<?=$isi_tabel->penulis;?>">
        <input type="hidden" name="id_pengumuman" value="<?=$isi_tabel->id;?>">

      </div>
      
        <input type="submit" class="btn btn-success" name="submit" value="simpan">
        <a href="<?php echo site_url('admin/pengumuman/index') ?>" class="btn btn-danger">batal</a>
    </form>
  
    </div>
  </div>
</div>


    





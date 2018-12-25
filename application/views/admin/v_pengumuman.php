<div class="col-sm-12" >
   <div class="card" >
    <div class="card-header" style="background-color: lightblue"> <?php echo $sub_judul; ?></div>
    <div class="card-body" style="background-color: lightyellow">

      <?php 

      if ($this->session->flashdata('info')) {
      echo "<div class='alert alert-primary'>". $this->session->flashdata('info')."</div>";
      }

       ?>
     
     <a href="<?php echo site_url('admin/pengumuman/tambah')?>" class="btn btn-primary">Tambah Data</a>

      <?php 
      foreach ($isi_tabel as $value) :
       ?>

      <div style="border: 1px solid pink; padding: 15px; margin-bottom: 13px">

        <div class="row">
        <div class="col-sm-1" ><img  height="100px" width="100px" src="<?= base_url('assets/123.jpg') ?>" class="img-thumbnail">
        </div>
        <div class="col-sm-9">
          penulis <strong><?= $value->penulis ?></strong>
          <br>
          <small>25062007</small>
        </div>
        <div class="col-sm-2">
        <a href="<?= site_url('admin/pengumuman/hapus/'.$value->id); ?>" class="btn btn-danger"> Hapus </a>
        <a href="<?= site_url('admin/pengumuman/edit/'.$value->id); ?>" class="btn btn-warning"> Edit </a>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <h4><?= $value->judul ?></h4>
          <p><?= $value->isi ?></p>
        </div>
      </div>
      </div>


    <?php endforeach; ?>



    </div>
  </div>
</div>
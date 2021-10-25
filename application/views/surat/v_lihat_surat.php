        <div class="col-md-12">
			<h3>Arsip Surat >> Lihat</h3>
        </div>
        <div class="col-md-12">         
          <ul class="list-unstyled user_data">
            <li><h5>Nomor Surat: <?php echo ($data_surat['nomor_surat']) ?></h5></li>
            <li><h5>Judul : <?php echo ($data_surat['judul_surat']) ?></h5></li>
            <li><h5>Kategori : <?php echo ($data_surat['kategori_surat']) ?></h5></li>
            <li><h5>Waktu Unggah : <?php echo ($data_surat['tanggal_surat']) ?></h5></li>
          </ul>
          <br>
          <iframe src="<?php echo base_url() ?>assets/surat/<?php echo $data_surat['file'] ?>" width="100%" height="700"></iframe>
        </div>
        <div class="col-md-12">
        	<a href="<?php echo base_url().'surat'?>" class="btn btn-info"> Kembali</a>
        	<a href="<?php echo base_url().'surat/download/'.$data_surat['file'] ?>" class="btn btn-warning"><i class="ace-icon fa fa-download"></i> Unduh</a>
        	<a href="<?php echo base_url(); ?>surat/edit_data/<?php echo $data_surat['id_surat']; ?>" class="btn btn-success" title="Edit"><i class="fa fa-pencil"></i> Edit</a>
        </div>
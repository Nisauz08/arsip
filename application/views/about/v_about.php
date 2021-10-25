      <div class="col-md-12">
        <h4><?php echo $this->session->flashdata('message'); ?></h4>
      </div>
      <div class="col-md-12">
        <h3>About</h3>
      </div>
        <div class="col-md-4">
          <div class="profile_img">
            <div id="crop-avatar">
            <?php foreach ($about as $row) { ?>
              <img class="img-responsive avatar-view" src="<?php echo base_url() ?>assets/foto/<?php echo $row['foto_about'] ?>" alt="Avatar" title="Change the avatar" heigh="300" width="300">
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <ul class="list-unstyled user_data">
            <li><h4>Aplikasi ini dibuat oleh :</h3></li>
            <li><h4>Nama : <?php echo ucfirst($row['nama_about']) ?></h4></li>
            <li><h4>Nim : <?php echo ucfirst($row['nim_about']) ?></h4></li>
            <li><h4>Tanggal Pembuatan Aplikasi : <?php echo ucfirst($row['tanggal_about']) ?></h4></li>
          </ul>
          <hr>
          <a href="<?php echo base_url(); ?>about/edit_data/<?php echo $row['id_about']; ?>" class="btn btn-success" title="Edit"><i class="fa fa-pencil"></i> Edit Data</a>
          <?php } ?>
        </div>


            <div class="box-header with-border">
              <h3 class="box-title">Arsip surat >> Unggah</h3>
              <h5 class="box-title">Unggah surat yang telah terbit pada form ini untuk diarsipkan.</h5>
              <h5 class="box-title">Catatan: </h5>
              <h5 class="box-title">         - Menggunakan file berformat pdf</h5>
            </div>
            <form action="<?php echo base_url(); ?>surat/submit_simpan_data" method="post" enctype="multipart/form-data" role="form">
              <div class="box-body">

                <div class="form-group">
                  <label>Nomor Surat</label>
                  <input required="" type="text" class="form-control" name="nomor_surat" placeholder="" value="<?=set_value('nomor_surat')?>"  >
                </div>

                <div class="form-group">
                  <label>Judul</label>
                  <input required="" type="text" class="form-control" name="judul_surat" placeholder="" value="<?=set_value('judul_surat')?>"  >
                </div>

                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kategori_surat" required="">
                    <option value="">-- Pilih --</option>
                    <option value="Undangan">Undangan</option>
                    <option value="Pengumuman">Pengumuman</option>
                    <option value="Nota Dinas">Nota Dinas</option>
                    <option value="Pemberitahuan">Pemberitahuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>File Surat PDF</label>
                  <input type="file" name="file" required="">
                </div>
                
              </div>
              <div class="box-footer">
                <a href="<?php echo base_url().'surat'?>" class="btn btn-info"> Kembali</a>
                <button type="submit" name="submit" class="btn btn-success btn"><i class="fa fa-paper-plane"></i> Save</button>
              </div>
            </form>
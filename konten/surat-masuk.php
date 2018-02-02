<section class="">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="card">
          <div class="card-header text-center">
            <h4>Catatan Surat Masuk <a href="?menu=tambah-surat-masuk" class="btn btn-primary">Tambah</a></h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>JENIS SURAT</th>
                    <th>TANGGAL KIRIM</th>
                    <th>TANGGAL TERIMA</th>
                    <th>PERIHAL</th>
                    <th>PENGIRIM</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $q = mysql_query("select * from tb_surat_masuk");
                while($r = mysql_fetch_array($q)) {
                 ?>
                  <tr>
                    <td><?php print $r['no_agenda']?></td>
                    <td><?php print $r['jenis_surat']?></td>
                    <td><?php print $r['tgl_kirim']?></td>
                    <td><?php print $r['tgl_terima']?></td>
                    <td><?php print $r['perihal']?></td>
                    <td><?php print $r['pengirim']?></td>
                    <td><a href="#" class="btn btn-danger">Hapus</a></td>
                  </tr>
                <?php } // tutup while ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

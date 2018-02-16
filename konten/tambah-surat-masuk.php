<?php
if (isset($_POST['simpan'])) {
  $jenis_surat = $_POST['jenis_surat'];
  $no_surat = $_POST['no_surat'];
  $tgl_kirim = $_POST['tgl_kirim'];
  $tgl_terima = $_POST['tgl_terima'];
  $pengirim = $_POST['pengirim'];
  $perihal = $_POST['perihal'];
  $pid = $_SESSION['pid'];

  mysql_query("insert into tb_surat_masuk values (
    NULL, $pid, '$jenis_surat', '$no_surat',
    '$tgl_kirim', '$tgl_terima', '$pengirim',
    '$perihal'
    )");
  $pesan = "<div class='alert alert-success'>Data telah tersimpan.</div>";
}
 ?>

<section class="">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-header text-center">
            <h4>Tambah Surat Masuk</h4>
          </div>
          <div class="card-body">
            <?php print $pesan?>
            <form action="" method="post">
              <div class="form-group">
                <div class="label">Jenis Surat</div>
                <input type="text" class="form-control" name="jenis_surat" placeholder="Jenis Surat" autofocus required>
              </div>
              <div class="form-group">
                <div class="label">Nomor Surat</div>
                <input type="text" class="form-control" name="no_surat" placeholder="Nomor Surat. ex: SMK/17/18/VI" required>
              </div>
              <div class="form-group">
                <div class="label">Tanggal Kirim</div>
                <input type="date" class="form-control" name="tgl_kirim" required>
              </div>
              <div class="form-group">
                <div class="label">Tanggal Terima</div>
                <input type="date" class="form-control" name="tgl_terima" required>
              </div>
              <div class="form-group">
                <div class="label">Pengirim</div>
                <input type="text" class="form-control" name="pengirim" placeholder="Pengirim" required>
              </div>
              <div class="form-group">
                <div class="label">Perihal</div>
                <input type="text" class="form-control" name="perihal" placeholder="Perihal" required>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                <a href="?menu=surat-masuk" class="btn btn-danger">Kembali</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
if (isset($_POST['simpan'])) {
  $jenis_surat = $_POST['jenis_surat'];
  $no_surat = $_POST['no_surat'];
  $tgl_kirim = $_POST['tgl_kirim'];
  $tgl_terima = $_POST['tgl_terima'];
  $pengirim = $_POST['pengirim'];
  $perihal = $_POST['perihal'];
  $no_agenda = $_POST['no_agenda'];

  mysql_query("update tb_surat_masuk set
              no_surat='$no_surat', jenis_surat='$jenis_surat',
              tgl_kirim='$tgl_kirim', tgl_terima='$tgl_terima',
              pengirim='$pengirim', perihal='$perihal'
              where no_agenda=$no_agenda");
  $pesan = "<div class='alert alert-success'>Data berhasil diubah.</div>";
}



$no_agenda = $_GET['no_agenda'];
$q = mysql_query("select * from tb_surat_masuk
                  where no_agenda=$no_agenda");
$r = mysql_fetch_array($q);
 ?>

<section class="">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card">
          <div class="card-header text-center">
            <h4>Ubah Surat Masuk</h4>
          </div>
          <div class="card-body">
            <?php print $pesan?>
            <form action="" method="post">
              <div class="form-group">
                <div class="label">Jenis Surat</div>
                <input type="text" class="form-control" name="jenis_surat" value="<?php print $r['jenis_surat']?>" placeholder="Jenis Surat">
              </div>
              <div class="form-group">
                <div class="label">Nomor Surat</div>
                <input type="text" class="form-control" name="no_surat" value="<?php print $r['no_surat']?>" placeholder="Nomor Surat. ex: SMK/17/18/VI">
              </div>
              <div class="form-group">
                <div class="label">Tanggal Kirim</div>
                <input type="date" class="form-control" name="tgl_kirim" value="<?php print $r['tgl_kirim']?>">
              </div>
              <div class="form-group">
                <div class="label">Tanggal Terima</div>
                <input type="date" class="form-control" name="tgl_terima" value="<?php print $r['tgl_terima']?>">
              </div>
              <div class="form-group">
                <div class="label">Pengirim</div>
                <input type="text" class="form-control" name="pengirim" value="<?php print $r['pengirim']?>" placeholder="Pengirim">
              </div>
              <div class="form-group">
                <div class="label">Perihal</div>
                <input type="text" class="form-control" name="perihal" value="<?php print $r['perihal']?>" placeholder="Perihal">
              </div>
              <input type="hidden" name="no_agenda" value="<?php print $r['no_agenda']?>">

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

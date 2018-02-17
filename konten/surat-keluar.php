<?php
if ($_GET['hapus'] == 'ya') {
  $no_agenda = $_GET['no_agenda'];

  mysql_query("delete from tb_surat_keluar
              where no_agenda=$no_agenda");

  $pesan = "<div class='alert alert-success'>Data berhasil dihapus.</div>";
}
 ?>

<section class="">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header text-center">
            <h4>Catatan Surat Keluar <a href="?menu=tambah-surat-keluar" class="btn btn-primary">Tambah</a></h4>
          </div>
          <div class="card-body">
            <?php print $pesan?>
            <div class="table-responsive">
              <table class="table table-striped table-hover table-bordered">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>JENIS SURAT</th>
                    <th>TANGGAL KIRIM</th>
                    <th>PERIHAL</th>
                    <th>PENERIMA</th>
                    <th>AKSI</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $q = mysql_query("select * from tb_surat_keluar");
                $jumlah = mysql_num_rows($q);

                if ($jumlah > 0) {
                  while($r = mysql_fetch_array($q)) {
                    $tgl_kirim = date('d F Y', strtotime($r['tgl_kirim']));
                   ?>
                    <tr>
                      <td><?php print $r['no_agenda']?></td>
                      <td><?php print $r['jenis_surat']?></td>
                      <td><?php print $tgl_kirim?></td>
                      <td><?php print $r['perihal']?></td>
                      <td><?php print $r['penerima']?></td>
                      <td>
                        <a href="?menu=ubah-surat-keluar&no_agenda=<?php print $r['no_agenda']?>" class="btn btn-warning">Ubah</a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#no_agenda_<?php print $r['no_agenda']?>">Hapus</a>
                      </td>
                    </tr>
                    <div class="modal fade" id="no_agenda_<?php print $r['no_agenda']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body">
                            Apakah Anda yakin akan menghapus?
                          </div>
                          <div class="modal-footer">
                            <a href="?menu=surat-keluar&hapus=ya&no_agenda=<?php print $r['no_agenda']?>" class="btn btn-danger">Ya, Hapus</a>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php }
                } else { ?>
                  <tr>
                    <td colspan="7"><em>Data masih kosong.</em></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
session_start();
include("../koneksi.php");

if (!empty($_SESSION['hak'])) {
  $tgl_awal = $_POST['tgl_awal'];
  $tgl_akhir = $_POST['tgl_akhir'];

  $q = mysql_query("select a.*, b.* from tb_surat_keluar a
                    inner join tb_petugas b on a.pid = b.pid
                    where DATE(tgl_kirim) between '$tgl_awal' and '$tgl_akhir'");
  $count = mysql_num_rows($q);
  ?>

  <table border="1" width="100%">
    <thead>
      <tr>
        <th>NO.AGENDA</th>
        <th>NO.SURAT</th>
        <th>JENIS SURAT</th>
        <th>PENERIMA</th>
        <th>PERIHAL</th>
        <th>TGL.KIRIM</th>
        <th>PETUGAS</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if ($count > 0) {
      while($r = mysql_fetch_array($q)) {
        $tgl_kirim = date('d F Y', strtotime($r['tgl_kirim']));
        $petugas = strtoupper($r['nama_lengkap']);

        ?>
        <tr>
          <td><?=$r['no_agenda']?></td>
          <td><?=$r['no_surat']?></td>
          <td><?=$r['jenis_surat']?></td>
          <td><?=$r['penerima']?></td>
          <td><?=$r['perihal']?></td>
          <td><?=$tgl_kirim?></td>
          <td><?=$petugas?></td>
        </tr>
      <?php }
    } else { ?>
      <tr>
        <td colspan="7"><em>Tidak ada catatan surat keluar dari tanggal tersebut. :(</em></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>

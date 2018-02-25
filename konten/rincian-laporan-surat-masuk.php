<?php
include("../koneksi.php");

$tgl_awal = $_POST['tgl_awal'];
$tgl_akhir = $_POST['tgl_akhir'];

$q = mysql_query("select a.*, b.* from tb_surat_masuk a
                  inner join tb_petugas b on a.pid = b.pid
                  where DATE(tgl_terima) between '$tgl_awal' and '$tgl_akhir'");

?>

<table border="1" width="100%">
  <thead>
    <tr>
      <th>NO.AGENDA</th>
      <th>NO.SURAT</th>
      <th>JENIS SURAT</th>
      <th>PENGIRIM</th>
      <th>PERIHAL</th>
      <th>TGL.KIRIM</th>
      <th>TGL.TERIMA</th>
      <th>PETUGAS</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($r = mysql_fetch_array($q)) {
    $tgl_kirim = date('d F Y', strtotime($r['tgl_kirim']));
    $tgl_terima = date('d F Y', strtotime($r['tgl_terima']));
    $petugas = strtoupper($r['nama_lengkap']);
    ?>
    <tr>
      <td><?=$r['no_agenda']?></td>
      <td><?=$r['no_surat']?></td>
      <td><?=$r['jenis_surat']?></td>
      <td><?=$r['pengirim']?></td>
      <td><?=$r['perihal']?></td>
      <td><?=$tgl_kirim?></td>
      <td><?=$tgl_terima?></td>
      <td><?=$petugas?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

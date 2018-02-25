<section>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header text-center">
            <h4>Laporan Surat Masuk</h4>
          </div>
          <div class="card-body">
            <form action="konten/rincian-laporan-surat-masuk.php" method="post">
              <div class="form-group">
                <div class="label">
                  Filter berdasarkan tanggal terima
                </div>
              </div>
              <div class="form-group">
                <label for="">Tanggal Awal:</label>
                <input type="date" name="tgl_awal"> &nbsp;

                <label for="">Tanggal Akhir:</label>
                <input type="date" name="tgl_akhir"> &nbsp;
              </div>
              <button type="submit" name="kirim" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'koneksi.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php' ?>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://github.com/mariapujirahayu" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/cover.jpg">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          SPK MOORA
          <!-- <div class="logo-image-big">
            <img src="./assets/img/oke.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li >
            <a href="./kriteria.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Kriteria</p>
            </a>
          </li>
          <li class="active">
            <a href="./alternatif.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Alternatif</p>
            </a>
          </li>
          <li>
            <a href="./hasil.php">
              <i class="nc-icon nc-money-coins"></i>
              <p>Hasil</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <?php include 'includes/navbar.php' ?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Data Alternatif</h4>
              </div><hr>
              <div class="card-body">
                <h5 class="text-center">Tabel Data Asli</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama Sekolah</th>
                      <th>Akreditasi</th>
                      <th>Prestasi</th>
                      <th>Fasilitas</th>
                      <th>Tenaga Pendidik</th>
                      <th>Jarak Tempuh</th>
                      <th>Ekstrakulikuler</th>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php $ambil = $koneksi->query("SELECT * FROM data_alternatif ORDER BY id_alternatif ASC"); ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                      <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td class="text-center"><?php echo $pecah['kriteria1']; ?></td>
                        <td><?php echo $pecah['kriteria2']; ?></td>
                        <td><?php echo $pecah['kriteria3']; ?></td>
                        <td class="text-center"><?php echo $pecah['kriteria4']; ?></td>
                        <td><?php echo $pecah['kriteria5']; ?></td>
                        <td><?php echo $pecah['kriteria6']; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <hr>
              <div class="card-body">
                <h5 class="text-center">Tabel Data Setelah Konversi</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama Sekolah</th>
                      <th>Akreditasi</th>
                      <th>Prestasi</th>
                      <th>Fasilitas</th>
                      <th>Tenaga Pendidik</th>
                      <th>Jarak Tempuh</th>
                      <th>Ekstrakulikuler</th>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php $ambil = $koneksi->query("SELECT * FROM data_alternatif ORDER BY id_alternatif ASC"); ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                      <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td class="text-center"><?php echo $pecah['c1']; ?></td>
                        <td class="text-center"><?php echo $pecah['c2']; ?></td>
                        <td class="text-center"><?php echo $pecah['c3']; ?></td>
                        <td class="text-center"><?php echo $pecah['c4']; ?></td>
                        <td class="text-center"><?php echo $pecah['kriteria5']; ?></td>
                        <td class="text-center"><?php echo $pecah['c6']; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <hr>
              <div class="card-body">
                <h5 class="text-center">Tabel Bantu Data</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama Sekolah</th>
                      <th>Akreditasi<sup>2</sup></th>
                      <th>Prestasi<sup>2</sup></th>
                      <th>Fasilitas<sup>2</sup></th>
                      <th>Tenaga Pendidik<sup>2</sup></th>
                      <th>Jarak Tempuh<sup>2</sup></th>
                      <th>Ekstrakulikuler<sup>2</sup></th>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php $ambil = $koneksi->query("SELECT * FROM data_alternatif ORDER BY id_alternatif ASC"); 
                        $pangkatc1 = 0;
                        $pangkatc2 = 0;
                        $pangkatc3 = 0;
                        $pangkatc4 = 0;
                        $pangkatc5 = 0;
                        $pangkatc6 = 0;
                        $sumc1 = 0;
                        $sumc2 = 0;
                        $sumc3 = 0;
                        $sumc4 = 0;
                        $sumc5 = 0;
                        $sumc6 = 0;
                        $sqrt1 = 0;
                        $sqrt2 = 0;
                        $sqrt3 = 0;
                        $sqrt4 = 0;
                        $sqrt5 = 0;
                        $sqrt6 = 0;
                      ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) {
                        $pangkatc1 = pow(($pecah['c1']),2);
                        $pangkatc2 = pow(($pecah['c2']),2);
                        $pangkatc3 = pow(($pecah['c3']),2);
                        $pangkatc4 = pow(($pecah['c4']),2);
                        $pangkatc5 = pow(($pecah['c5']),2);
                        $pangkatc6 = pow(($pecah['c6']),2);
                        $sumc1 += $pangkatc1;
                        $sumc2 += $pangkatc2;
                        $sumc3 += $pangkatc3;
                        $sumc4 += $pangkatc4;
                        $sumc5 += $pangkatc5;
                        $sumc6 += $pangkatc6;
                        $sqrt1 = round(sqrt($sumc1) ,5);
                        $sqrt2 = round(sqrt($sumc2) ,5);
                        $sqrt3 = round(sqrt($sumc3) ,5);
                        $sqrt4 = round(sqrt($sumc4) ,5);
                        $sqrt5 = round(sqrt($sumc5) ,5);
                        $sqrt6 = round(sqrt($sumc6) ,5);
                      ?>
                      <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td class="text-center"><?php echo $pangkatc1; ?></td>
                        <td class="text-center"><?php echo $pangkatc2; ?></td>
                        <td class="text-center"><?php echo $pangkatc3; ?></td>
                        <td class="text-center"><?php echo $pangkatc4; ?></td>
                        <td class="text-center"><?php echo $pangkatc5; ?></td>
                        <td class="text-center"><?php echo $pangkatc6; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                          <th colspan="2" class="text-center">Total Kriteria</th>
                          <th class="text-center"><?php echo $sumc1 ?></th>
                          <th class="text-center"><?php echo $sumc2 ?></th>
                          <th class="text-center"><?php echo $sumc3 ?></th>
                          <th class="text-center"><?php echo $sumc4 ?></th>
                          <th class="text-center"><?php echo $sumc5 ?></th>
                          <th class="text-center"><?php echo $sumc6 ?></th>
                      </tr>
                      <tr>
                          <th colspan="2" class="text-center">Pangkat SQRT</th>
                          <th class="text-center"><?php echo $sqrt1 ?></th>
                          <th class="text-center"><?php echo $sqrt2 ?></th>
                          <th class="text-center"><?php echo $sqrt3 ?></th>
                          <th class="text-center"><?php echo $sqrt4 ?></th>
                          <th class="text-center"><?php echo $sqrt5 ?></th>
                          <th class="text-center"><?php echo $sqrt6 ?></th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <hr>
              <div class="card-body">
                <h5 class="text-center">Tabel Hasil Normalisasi</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama Sekolah</th>
                      <th>Akreditasi</th>
                      <th>Prestasi</th>
                      <th>Fasilitas</th>
                      <th>Tenaga Pendidik</th>
                      <th>Jarak Tempuh</th>
                      <th>Ekstrakulikuler</th>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php $ambil = $koneksi->query("SELECT * FROM data_alternatif ORDER BY id_alternatif ASC");
                        $norma1 = 0;
                        $norma2 = 0;
                        $norma3 = 0;
                        $norma4 = 0;
                        $norma5 = 0;
                        $norma6 = 0;
                      ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) {
                        
                        $norma1 = round($pecah['c1'] / $sqrt1 ,4);
                        $norma2 = round($pecah['c2'] / $sqrt2 ,4);
                        $norma3 = round($pecah['c3'] / $sqrt3 ,4);
                        $norma4 = round($pecah['c4'] / $sqrt4 ,4);
                        $norma5 = round($pecah['c5'] / $sqrt5 ,4);
                        $norma6 = round($pecah['c6'] / $sqrt6 ,4);
                      ?>
                      <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td class="text-center"><?php echo $norma1; ?></td>
                        <td class="text-center"><?php echo $norma2; ?></td>
                        <td class="text-center"><?php echo $norma3; ?></td>
                        <td class="text-center"><?php echo $norma4; ?></td>
                        <td class="text-center"><?php echo $norma5; ?></td>
                        <td class="text-center"><?php echo $norma6; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <hr>
              <div class="card-body">
                <h5 class="text-center">Tabel Nilai Optimasi Multiobjek</h5>
                <div class="table-responsive">
                  <table class="table">
                  <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama Sekolah</th>
                      <th>Akreditasi</th>
                      <th>Prestasi</th>
                      <th>Fasilitas</th>
                      <th>Tenaga Pendidik</th>
                      <th>Jarak Tempuh</th>
                      <th>Ekstrakulikuler</th>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php
                        $ambil = $koneksi->query("SELECT * FROM data_alternatif ORDER BY id_alternatif ASC");
                        $bobotc1 = 0;
                        $bobotc2 = 0;
                        $bobotc3 = 0;
                        $bobotc4 = 0;
                        $bobotc5 = 0;
                        $bobotc6 = 0;

                      ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { 
                        
                        $bobotc1 = round($pecah['c1'] / $sqrt1 * $pecah['b3'] ,4); 
                        $bobotc2 = round($pecah['c2'] / $sqrt2 * $pecah['b6'] ,4); 
                        $bobotc3 = round($pecah['c3'] / $sqrt3 * $pecah['b2'] ,4); 
                        $bobotc4 = round($pecah['c4'] / $sqrt4 * $pecah['b5'] ,4); 
                        $bobotc5 = round($pecah['c5'] / $sqrt5 * $pecah['b4'] ,4); 
                        $bobotc6 = round($pecah['c6'] / $sqrt6 * $pecah['b1'] ,4); 
                      ?>
                      <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td class="text-center"><?php echo $bobotc1; ?></td>
                        <td class="text-center"><?php echo $bobotc2; ?></td>
                        <td class="text-center"><?php echo $bobotc3; ?></td>
                        <td class="text-center"><?php echo $bobotc4; ?></td>
                        <td class="text-center"><?php echo $bobotc5; ?></td>
                        <td class="text-center"><?php echo $bobotc6; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <hr>
              <div class="card-body">
                <h5 class="text-center">Tabel Hasil Output MOORA</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Alamat</th>
                      <th class="text-center">Max (Benefit)</th>
                      <th class="text-center">Min (Cost)</th>
                      <th class="text-center">Nilai Yi</th>
                    </thead>
                    <tbody>
                      <?php $nomor = 1; ?>
                      <?php
                        $ambil = $koneksi->query("SELECT * FROM data_alternatif ORDER BY id_alternatif ASC");
                        $max = 0;
                        $min = 0;
                        $yi = 0;
                        $alamat = $pecah['alamat'];
                      ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { 
                        $max = round($pecah['c1'] / $sqrt1 * $pecah['b3'] ,4) + round($pecah['c2'] / $sqrt2 * $pecah['b6'] ,4) + round($pecah['c3'] / $sqrt3 * $pecah['b2'] ,4) + round($pecah['c4'] / $sqrt4 * $pecah['b5'] ,4) + round($pecah['c6'] / $sqrt6 * $pecah['b1'] ,4);
                        $min = round($pecah['c5'] / $sqrt5 * $pecah['b4'] ,4);
                        $yi = $max - $min;
                        $alamat = $pecah['alamat'];

                        date_default_timezone_set('Asia/Jakarta');
                        $tanggal = date("Y-m-d h:i");
                        $koneksi->query("INSERT INTO data_hasil(alamat,hasil,tanggal) VALUES('$alamat','$yi','$tanggal')");
                      ?>
                      <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td class="text-center"><?php echo $max; ?></td>
                        <td class="text-center"><?php echo $min; ?></td>
                        <td class="text-center"><?php echo $yi; ?></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="update ml-auto mr-auto">
                <a href="hasil.php"> <button class="btn btn-primary btn-round">Hasil Ranking</button></a>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
  <?php include 'includes/script.php' ?>
</body>

</html>
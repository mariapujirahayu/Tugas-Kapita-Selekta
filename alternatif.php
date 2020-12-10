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
              </div>
              <div class="card-body">
              <div class="col-md-8">
                  <div class="update ml-auto mr-auto">
                    <a href="addalternatif.php"> <button type="submit" class="btn btn-primary btn-round">Tambah Alternatif</button></a>
                    <a href="hitung.php"> <button nama="save" class="btn btn-success btn-round">Hitung Alternatif</button></a>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Sekolah</th>
                      <th>Akreditasi</th>
                      <th>Prestasi</th>
                      <th>Fasilitas</th>
                      <th>Tenaga Pendidik</th>
                      <th>Umur</th>
                      <th >Ekstrakulikuler</th>
                      <th class="text-center">Aksi</th>
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
                        <td><a href="ubahalternatif.php?id=<?php echo $pecah["id_alternatif"] ?>"><button type="submit" class="btn btn-success btn-round"><i class="nc-icon nc-settings"></i></button></a>
                        <a href="hapusalternatif.php?id=<?php echo $pecah["id_alternatif"] ?>"><button type="submit" class="btn btn-danger btn-round"><i class="nc-icon nc-basket"></i></button></a></td>
                      </tr>
                      <?php $nomor++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <?php
                if(isset($_POST['save'])){
                    date_default_timezone_set('Asia/Jakarta');
                    $tanggal = date("Y-m-d");
                    
                    $ambil = $koneksi->query("SELECT * FROM data_alternatif");
                    $pecah = $ambil->fetch_assoc();

                    $max = round($pecah['kriteria1'] / $sqrt1 * $pecah['b3'] ,4) + round($pecah['c2'] / $sqrt2 * $pecah['b6'] ,4) + round($pecah['c3'] / $sqrt3 * $pecah['b2'] ,4) + round($pecah['kriteria4'] / $sqrt4 * $pecah['b5'] ,4) + round($pecah['c5'] / $sqrt5 * $pecah['b4'] ,4);
                    $min = round($pecah['c6'] / $sqrt6 * $pecah['b1'] ,4);
                    $yi = $max - $min;

                    $koneksi->query("INSERT INTO data_hasil(alamat,hasil,tanggal)
                        VALUES('$_POST[alamat]','$tanggal','$yi')");
    
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
                }
                ?>
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

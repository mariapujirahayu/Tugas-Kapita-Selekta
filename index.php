<?php include 'koneksi.php'

// $ambil = "SELECT * FROM data_alternatif";
// $pecah = $ambil->fetch_assoc();

// // $sql = "SELECT * FROM data_alternatif";
// // $connStatus = $koneksi->query($sql);
// $alternatif = mysqli_num_rows($pecah);

?>

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
          <li class="active ">
            <a href="./index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./kriteria.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Kriteria</p>
            </a>
          </li>
          <li>
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
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-planet text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <?php $ambil = $koneksi->query("SELECT count(kode) as kriteria FROM data_kriteria"); ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                      <p class="card-category">Kriteria</p>
                      <p class="card-title"><?php echo $pecah['kriteria']; ?><p>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Total Kriteria
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-badge text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <?php $ambil = $koneksi->query("SELECT count(alamat) as jmlalternatif FROM data_alternatif"); ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                      <p class="card-category">Alternatif</p>
                      <p class="card-title"><?php echo $pecah['jmlalternatif']; ?><p>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Total Alternatif Sekolah Dasar
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-hat-3 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                    <?php $ambil = $koneksi->query("SELECT count(tanggal) as jmlalternatif FROM data_hasil"); ?>
                      <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                      <p class="card-category">Output Hitung</p>
                      <p class="card-title"><?php echo $pecah['jmlalternatif']; ?><p>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  Jumlah Alternatif Selesai Hitung
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Informasi</h5>
                <p class="card-category">Aplikasi Perhitungan Pemilihan Sekolah Dasar Metode MOORA</p>
              </div>
              <div class="card-body ">
                <p>   Aplikasi berbasis website ini merupakan aplikasi sistem pendukung keputusan penentuan sekolah dasar menggunakan metode MOORA. Dimana memiliki 6 kriteria yaitu akreditasi, prestasi, fasilitas, tenaga pendidik, jarak tempuh dan ekstrakulikuler. Pengguna yang ingin menghitung MOORA tinggal memasukkan data - data sesuai form yang disediakan dan aplikasi ini akan otomatis mengeluarkan output berupa ranking lengkap dengan step perhitungannya.</p>
                <br>
                <!-- <p>Aplikasi ini dibuat oleh Maria Puji Rahayu</p>
                <p>Kelas : TI - 3G</p> -->
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> menggunakan bootstrap dari <a href="https://www.creative-tim.com/">https://www.creative-tim.com/</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'includes/footer.php' ?>
    </div>
  </div>
  <?php include 'includes/script.php' ?>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>

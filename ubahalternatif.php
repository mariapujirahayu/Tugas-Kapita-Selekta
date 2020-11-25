<?php include 'koneksi.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM data_alternatif WHERE id_alternatif='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

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
          <li >
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
                <h4 class="card-title">Mengubah Alternatif</h4>
              </div>
              <div class="card-body">
                <div class="penjelasan" style="margin-top:20px; margin-bottom:30px;">
                  <h6>Data alternatif sebelum diubah</h6>
                  <form>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Akreditasi</label>
                        <input disabled="" type="text" class="form-control" value="<?php echo $pecah['kriteria1']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Prestasi</label>
                        <input disabled="" type="text" class="form-control" value="<?php echo $pecah['kriteria2']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Fasilitas</label>
                        <input disabled="" type="text" class="form-control" value="<?php echo $pecah['kriteria3']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Tenaga Pendidik</label>
                        <input disabled="" type="text" class="form-control" value="<?php echo $pecah['kriteria4']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Jarak Tempuh</label>
                        <input disabled="" type="text" class="form-control" value="<?php echo $pecah['kriteria5']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Ekstrakulikuler</label>
                        <input disabled="" type="text" class="form-control" value="<?php echo $pecah['kriteria6']; ?>">
                      </div>
                    </div>
                  </div>
                  </form>
                </div>
                <hr>
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Sekolah</label>
                        <input type="text" class="form-control" name="alamat" required value="<?php echo $pecah['alamat']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="selectakreditasi">Akreditasi</label>
                        <select class="form-control" name="akreditasi" id="selectakreditasi" required value="<?php echo $pecah['kriteria1']; ?>">
                            <option value="A">Akreditasi A</option>
                            <option value="B">Akreditasi B</option>
                            <option value="C">Akreditasi C</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="selectprestasi">Prestasi</label>
                        <select class="form-control" name="prestasi" id="selectprestasi" required value="<?php echo $pecah['kriteria2']; ?>">
                            <option value="Sangat Baik">Sangat Baik</option>
                            <option value="Baik">Baik</option>
                            <option value="Cukup">Cukup</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="selectfasilitas">Fasilitas</label>
                        <select class="form-control" name="fasilitas" id="selectfasilitas" required value="<?php echo $pecah['kriteria3']; ?>">
                            <option value="Lengkap">Lengkap</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kurang">Kurang</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="selectpendidik">Tenaga Pendidik</label>
                        <select class="form-control" name="pendidik" id="selectpendidik" required value="<?php echo $pecah['kriteria4']; ?>">
                            <option value="Sangat Kompeten">Sangat Kompeten</option>
                            <option value="Kompeten">Kompeten</option>
                            <option value="Cukup Kompeten">Cukup Kompeten</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Jarak Tempuh</label>
                        <input type="number" class="form-control" name="jarak" required value="<?php echo $pecah['kriteria5']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="selectekstra">Ekstrakulikuler</label>
                        <select class="form-control" name="ekstrakulikuler" id="selectekstra" required value="<?php echo $pecah['kriteria6']; ?>">
                            <option value="Ada dan Aktif">Ada dan Aktif</option>
                            <option value="Ada dan Kurang Aktif">Ada dan Kurang Aktif</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="ubah">Simpan</button>
                    </div>
                  </div>
                </form>

                <!-- database -->
                <?php
                if (isset($_POST['ubah'])) {
                  $b1 = 0.1;
                  $b2 = 0.15;
                  $b3 = 0.13;
                  $b4 = 0.2;
                  $b5 = 0.17;
                  $b6 = 0.1;

                  $kriteria1 = $_POST[akreditasi];
                    if($kriteria1 == 'A' ){
                      $c1 = "3";
                    }
                    elseif($kriteria1 == 'B'){
                      $c1 = "2";
                    }
                    else {
                        $c1 = "1";
                    }

                    $kriteria2 = $_POST[prestasi];
                    if($kriteria2 == 'Sangat Baik' ){
                      $c2 = "3";
                    }
                    elseif($kriteria2 == 'Baik'){
                      $c2 = "2";
                    }
                    else {
                        $c2 = "1";
                    }

                    $kriteria3 = $_POST[fasilitas];
                    if($kriteria3 == 'Lengkap' ){
                      $c3 = "3";
                    }
                    elseif($kriteria3 == 'Cukup'){
                      $c3 = "2";
                    }
                    else {
                        $c3 = "1";
                    }

                    $kriteria4 = $_POST[pendidik];
                    if($kriteria4 == 'Sangat Kompeten' ){
                      $c4 = "3";
                    }
                    elseif($kriteria4 == 'Kompeten'){
                      $c4 = "2";
                    }
                    else {
                        $c4 = "1";
                    }

                    $kriteria5 = $_POST[jarak];
                    if($kriteria5 <= 0 && $kriteria5 > 3){
                      $c5 <= "4";
                    }
                    elseif($kriteria5 <= 3 && $kriteria5 >= 10){
                      $c5 = "3";
                    }
                    elseif($kriteria5 <= 10 && $kriteria5 >= 20){
                      $c5 = "2";
                    }
                    else {
                      $c5 = "1";
                    }

                    $kriteria6 = $_POST[ekstrakulikuler];
                    if($kriteria6 == 'Ada dan Aktif' ){
                      $c6 = "3";
                    }
                    elseif($kriteria6 == 'Ada dan Kurang Aktif'){
                      $c6 = "2";
                    }
                    else {
                        $c6 = "1";
                    }

                    $koneksi->query("UPDATE data_alternatif SET alamat='$_POST[alamat]', kriteria1='$_POST[akreditasi]', kriteria2='$_POST[prestasi]', kriteria3='$_POST[fasilitas]', kriteria4='$_POST[pendidik]', kriteria5='$_POST[jarak]', kriteria6='$_POST[ekstrakulikuler]', c1='$c1', c2='$c2', c3='$c3', c4='$c4',c5='$c5', c6='$c6', b1='$b1', b2='$b2', b3='$b3', b4='$b4', b5='$b5', b6='$b6' WHERE id_alternatif='$_GET[id]'");
                    echo "<script>alert('Data Alternatif telah berhasil Diubah!');</script>";
                    echo "<script>location='alternatif.php';</script>";
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

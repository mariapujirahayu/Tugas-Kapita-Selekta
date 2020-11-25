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
          <li class="active ">
            <a href="./kriteria.php">
              <i class="nc-icon nc-chart-pie-36"></i>
              <p>Kriteria</p>
            </a>
          </li>
          <li>
            <a href="./alternatif.php">
              <i class="nc-icon nc-money-coins"></i>
              <p>Alternatif</p>
            </a>
          </li>
          <li>
            <a href="./hasil.php">
              <i class="nc-icon nc-user-run"></i>
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
                <h4 class="card-title">Ubah Kriteria</h4>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama Kriteria</label>
                        <input type="text" class="form-control" name="kriteria" required value="Isi Nama Kriteria">
                      </div>
                      <div class="form-group">
                        <label for="selectbobot">Prioritas</label>
                        <select class="form-control" name="bobot" id="selectbobot" required>
                            <option value="0.25">Prioritas 1</option>
                            <option value="0.2">Prioritas 2</option>
                            <option value="0.17">Prioritas 3</option>
                            <option value="0.15">Prioritas 4</option>
                            <option value="0.13">Prioritas 5</option>
                            <option value="0.1">Prioritas 6</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="selectatribut">Prioritas</label>
                        <select class="form-control" name="atribut" id="selectatribut" required>
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button class="btn btn-primary btn-round" name="save">Simpan</button>
                    </div>
                  </div>
                </form>
                <!-- database -->
                <?php
                if (isset($_POST['save'])) {
                    $koneksi->query("INSERT INTO data_kriteria(nama,bobot,atribut) VALUES('$_POST[kriteria]','$_POST[bobot]','$_POST[atribut]'");
                    echo "<div class='alert alert-info'>Data Tersimpan</div>";
                    echo "<meta http-equiv='refresh' content='1;url=kriteria.php'>";
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

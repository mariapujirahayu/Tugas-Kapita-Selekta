<?php include 'koneksi.php' ?>

<?php
$ambil = $koneksi->query("SELECT * FROM data_kriteria WHERE id_kriteria='$_GET[id]'");
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
          <li class="active ">
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
                        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>">
                      </div>
                      <div class="form-group">
                        <label for="selectbobot">Prioritas</label>
                        <input type="text" class="form-control" name="bobot" disabled="" value="<?php echo $pecah['bobot']; ?>">
                        <!-- <select class="form-control" name="bobot" id="selectbobot" disabled="" required value="<?php echo $pecah['bobot']; ?>">
                            <option value="0.25" <?php if (isset($bobot) && $bobot=="0.25") echo "selected";?>>Prioritas 1</option>
                            <option value="0.2" <?php if (isset($bobot) && $bobot=="0.2") echo "selected";?>>Prioritas 2</option>
                            <option value="0.17" <?php if (isset($bobot) && $bobot=="0.17") echo "selected";?>>Prioritas 3</option>
                            <option value="0.15" <?php if (isset($bobot) && $bobot=="0.15") echo "selected";?>>Prioritas 4</option>
                            <option value="0.13" <?php if (isset($bobot) && $bobot=="0.13") echo "selected";?>>Prioritas 5</option>
                            <option value="0.1" <?php if (isset($bobot) && $bobot=="0.1") echo "selected";?>>Prioritas 6</option>
                            

                        </select> -->
                      </div>
                      <div class="form-group">
                        <label for="selectatribut">Prioritas</label>
                        <input type="text" class="form-control" name="atribut" disabled="" value="<?php echo $pecah['atribut']; ?>">
                        <!-- <select class="form-control" name="atribut" id="selectatribut" disabled="" required value="<?php echo $pecah['atribut']; ?>">
                            <option value="Benefit">Benefit</option>
                            <option value="Cost">Cost</option>
                        </select> -->
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
                    $koneksi->query("UPDATE data_kriteria SET nama='$_POST[nama]' WHERE id_kriteria='$_GET[id]'");
                    echo "<script>alert('Data Kriteria telah berhasil Diubah!');</script>";
                    echo "<script>location='kriteria.php';</script>";
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

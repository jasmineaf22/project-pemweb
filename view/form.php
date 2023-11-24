<?php include 'function/connect.php';?>
<?php include 'function/validateSession.php';?>
<?php
$organisasi = "";
$keperluan = "";
$id_ruangan = "";
$waktu_awal = "";
$waktu_selesai = "";
$id_peminjaman = "";
if (isset($_GET['edit'])) {
    $id_peminjaman = $_GET['edit'];
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id_peminjaman";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $organisasi = $row['organisasi'];
        $keperluan = $row['keperluan'];
        $id_ruangan = $row['id_ruangan'];
        $waktu_awal = $row['waktu_awal'];
        $waktu_selesai = $row['waktu_selesai'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Peminjaman</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include 'layout/navbargeneral.php'?>
<?php include 'layout/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid ">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Booking Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Peminjaman Ruangan FT</a></li>
              <li class="breadcrumb-item active">Formulir</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-5 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary mt-5">
              <div class="card-header text-center">
                <h3 class="card-title">Formulir Peminjaman Ruangan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

<form method="post" action="function/formProcess.php">
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $user['nama']; ?>" disabled>
        </div>
        <div class="form-group">
            <label for="organisasi">Organisasi</label>
            <input type="text" class="form-control" id="organisasi" name="organisasi" placeholder="Lembaga/Organisasi" value="<?= $organisasi?>" required>
        </div>
        <div class="form-group">
            <label for="keperluan">Acara</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan" value="<?= $keperluan?>" required>
        </div>
        <div class="form-group">
        <input type="hidden" name="id_peminjaman" value="<?= $id_peminjaman ?>">
    <label for="ruangan">Ruangan</label>
    <select class="form-control" name="ruangan" id="ruangan" required>
        <?php
        $query = "SELECT id_ruangan, nama_ruangan FROM ruangan";
        $result = mysqli_query($conn, $query);

        if ($result) {
            while ($rowOption = mysqli_fetch_assoc($result)) {
                $nama_ruangan = $rowOption['nama_ruangan'];

                $selected = ($rowOption['id_ruangan'] == $row['id_ruangan']) ? 'selected' : '';
                echo '<option value="' . $rowOption['id_ruangan'] . '" ' . $selected . '>' . $nama_ruangan . '</option>';
            }

            mysqli_free_result($result);
        } else {
            die("Query failed: " . mysqli_error($conn));
        }
        ?>
    </select>
</div>

        <div class="form-group">
            <label for="datebegin">Waktu Awal<br></label>
            <input type="datetime-local" class="form-control" id="datebegin" name="datebegin" value="<?= $waktu_awal;?>" required>
        </div>
        <div class="form-group">
            <label for="dateend">Waktu Selesai<br></label>
            <input type="datetime-local" class="form-control" id="dateend" name="dateend" value="<?= $waktu_selesai;?>" required>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

            </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'layout/footer.php'?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>

<?php include 'function/connect.php';
include 'function/validateSession.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General UI</title>

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
<?php include 'layout/sidebar.php'?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Ruangan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Peminjaman Ruang FT</a></li>
              <li class="breadcrumb-item active">Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <?php
        // Check if the 'id' parameter is present in the URL
        if (isset($_GET['id'])) {
            // If 'id' is present, get the ruangan details based on the id
            $id_ruangan = $_GET['id'];
            $query = "SELECT * FROM ruangan WHERE id_ruangan = $id_ruangan";
        } else {
            // If 'id' is not present, get the details of the first ruangan
            $query = "SELECT * FROM ruangan LIMIT 1";
        }
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">' . $row['nama_ruangan'] . '</h3>
                    </div>
                    <div class="card-body">
                      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="../img/' . $row['foto'] . '" alt="Ruangan Image">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-header">
                      <h3 class="card-title">Deskripsi</h3>
                    </div>
                    <div class="card-body">
                      <dl>
                        <dt>Deskripsi</dt>
                        <dd>' . $row['deskripsi'] . '</dd>
                        <dt>Kapasitas</dt>
                        <dd>Ruangan ini berkapasitas ' . $row['kapasitas'] . ' Orang</dd>
                        <dt>Fasilitas</dt>
                        <dd>' . $row['fasilitas'] . '</dd>
                      </dl>
                      <dd><a href="form.php?id=' . $row['id_ruangan'] .' "class="btn btn-primary">Booking Sekarang</a></dd>
                    </div>
                  </div>
                </div>
              </div>';
    }
} else {
    echo "Tidak ada data ruangan.";
}

?>

        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ruangan</h3>
              </div>
              <div class="card-body">
                <ul class="pagination pagination-month justify-content-center">

                                <?php
                                $query = "SELECT id_ruangan, nama_ruangan FROM ruangan";
                                    $result = mysqli_query($conn, $query);

                                    if (!$result) {
                                        die("Query failed: " . mysqli_error($conn));
                                    }
                                echo '<li class="page-item"><a class="page-link" href="#">«</a></li>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id_ruangan = $row['id_ruangan'];
                                    $nama_ruangan = $row['nama_ruangan'];
                                    $next[]= $id_ruangan;
                                    $href = "detailruang.php?id=" . $id_ruangan;

                                    echo '
                                    <li class="page-item">
                                            <a class="page-link" href="' . $href . '">
                                                <p class="page-month">' . $nama_ruangan . '</p>
                                                <p class="page-year">' . $id_ruangan . '</p>
                                            </a>
                                          </li>';
                                          
                                          
                                            
                                } 
                                  echo '<li class="page-item"><a class="page-link" href="detailruang.php?#">»</a></li>';
                              
                                
                                mysqli_free_result($result);
                                ?>

                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
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
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

<?php include 'function/connect.php';?>
<?php include 'function/validateSession.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gedung</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include 'layout/navbargeneral.php' ?>
<?php include 'layout/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gedung FT Unsoed</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Peminjaman Ruang FT</a></li>
              <li class="breadcrumb-item active">Gedung</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Rincian Gedung</h3>
                </div>
                <div class="card-body">
                  <div id="accordion">

                    <?php
                    $query = "SELECT * FROM gedung";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                      $gedungId = $row['id_gedung'];
                      $gedungName = $row['nama_gedung'];
                      $gedungDescription = $row['deskripsi'];
                      $gedungImage = $row['foto'];

                      $hasRoomsQuery = "SELECT COUNT(*) as count FROM ruangan WHERE id_gedung = $gedungId";
                      $hasRoomsResult = mysqli_query($conn, $hasRoomsQuery);
                      $hasRoomsRow = mysqli_fetch_assoc($hasRoomsResult);
                      $hasRooms = $hasRoomsRow['count'] > 0;
                    ?>

                      <div class="card card-primary">
                        <div class="card-header">
                          <h4 class="card-title w-100">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapse<?= $gedungId ?>">
                              <?= $gedungName ?>
                            </a>
                          </h4>
                        </div>
                        <div id="collapse<?= $gedungId ?>" class="collapse show" data-parent="#accordion">
                          <div class="card-body">
                            <div class="container text-center">
                              <img src="<?= $gedungImage ?>" width="50%" class="mx-auto py-3" alt="">
                            </div>
                            <br><div class="text-justify">
                            <?= $gedungDescription ?></div>
                            <br><br>

                            <?php if ($hasRooms) { ?>
                              <strong>Ruangan <?= $gedungName ?><br><br></strong>
                              <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  <?= $gedungName ?>
                                </button>
                                <div class="dropdown-menu">
                                  <?php
                                  $roomsQuery = "SELECT * FROM ruangan WHERE id_gedung = $gedungId";
                                  $roomsResult = mysqli_query($conn, $roomsQuery);

                                  while ($roomRow = mysqli_fetch_assoc($roomsResult)) {
                                    $roomId = $roomRow['id_ruangan'];
                                    $roomName = $roomRow['nama_ruangan'];
                                    $href="detailruang.php?id=$roomId"
                                  ?>
                                    <a class="dropdown-item" href="<?=$href?>"><?= $roomName ?></a>
                                  <?php } ?>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>

                    <?php } ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

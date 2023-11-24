<?php include 'function/connect.php';?>
<?php include 'function/validateSession.php';?>
<?php

if (isset($_GET['acc'])) {
  $id_peminjaman = $_GET['acc'];
  $query = "UPDATE peminjaman SET status = 'Disetujui' WHERE id_peminjaman = $id_peminjaman";
}else if(isset($_GET['dec'])){
  $id_peminjaman = $_GET['dec'];
  $query = "UPDATE peminjaman SET status = 'Ditolak' WHERE id_peminjaman = $id_peminjaman";
}else if (isset($_GET['del'])) {
  $id_peminjaman = $_GET['del'];
  $query = "DELETE FROM peminjaman WHERE id_peminjaman = $id_peminjaman";
}
if(isset($query)){
  mysqli_query($conn, $query);
  header("Location: table.php");
  exit();}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Peminjam</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            <h1>Jadwal Peminjaman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Peminjaman Ruang FT</a></li>
              <li class="breadcrumb-item active">Jadwal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Rincian Jadwal</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Peminjam</th>
                    <th>Acara</th>
                    <th>Organisasi</th>
                    <th>Ruang</th>
                    <th>Waktu Awal</th>
                    <th>Waktu Akhir</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $query = "SELECT p.id_peminjaman, u.nama AS nama_peminjam, p.id_user, u.isAdmin, p.status, p.keperluan, p.organisasi, r.nama_ruangan, p.waktu_awal, p.waktu_selesai
                                FROM peminjaman p
                                INNER JOIN user u ON p.id_user = u.id_user
                                INNER JOIN ruangan r ON p.id_ruangan = r.id_ruangan";
                      $result = mysqli_query($conn, $query);

                      // ...

                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['nama_peminjam']}</td>";
                        echo "<td>{$row['keperluan']}</td>";
                        echo "<td>{$row['organisasi']}</td>";
                        echo "<td>{$row['nama_ruangan']}</td>";
                        echo "<td>{$row['waktu_awal']}</td>";
                        echo "<td>{$row['waktu_selesai']}</td>";
                    
                        echo '<td>';
                    
                        if ($user['isAdmin'] == 0) {
                            // Regular user
                            if ($user['id_user'] == $row['id_user']) {
                                // Check if status is 'Diproses' or 'Ditolak'
                                echo ($row['status'] == 'Diproses' || $row['status'] == 'Ditolak') ?
                                    $row['status'] . '<br><a href="form.php?edit=' . $row['id_peminjaman'] . '">Edit | </a>' .
                                    '<a href="table.php?del=' . $row['id_peminjaman'] . '">Delete</a>' :
                                    $row['status'];
                            } else {
                                echo $row['status'];
                            }
                        } elseif ($user['isAdmin'] == 1) {
                            // Admin
                            if ($row['status'] == 'Diproses') {
                                // Display approve and reject links only for 'Diproses' status
                                echo $row["status"] .'<br>';
                                echo '<a href="table.php?acc=' . $row['id_peminjaman'] . '">Terima | </a>';
                                echo '<a href="table.php?dec=' . $row['id_peminjaman'] . '">Tolak</a> <br>';
                                if ($user['id_user'] == $row['id_user']){
                                echo '<a href="form.php?edit=' . $row['id_peminjaman'] . '">Edit | </a>
                                <a href="table.php?del=' . $row['id_peminjaman'] . '">Delete </a>';}
                                
                                
                            } else {
                                echo $row['status'];
                            }
                        }
                    
                        echo '</td>';
                        echo "</tr>";
                    }
                    

                    

                      mysqli_free_result($result);
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nama Peminjam</th>
                    <th>Acara</th>
                    <th>Organisasi</th>
                    <th>Ruang</th>
                    <th>Waktu Awal</th>
                    <th>Waktu Akhir</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

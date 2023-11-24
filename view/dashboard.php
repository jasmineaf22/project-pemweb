<?php include 'function/connect.php';?>
<?php include 'function/validateSession.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peminjaman Ruang FT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<?php include 'layout/navbargeneral.php';?>

<?php include 'layout/sidebar.php';?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Peminjaman Ruang FT</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-12">
          <div class="card card-primary">
  <div class="card-header">
    <h5 class="m-0">
      <a class="d-block w-100" data-toggle="collapse" href="#collapseAlur" aria-expanded="true" aria-controls="collapseAlur">
        Rincian Alur Peminjaman
      </a>
    </h5>
  </div>
  <div id="collapseAlur" class="collapse show">
    <div class="card-body text-center">
      <img src='../img/Alur.png' height='1000'><br><br>
      <a href="form.php" class="btn btn-primary">Booking Sekarang</a>
    </div>
  </div>
</div>

            <div class="card card-primary">
              <div class="card-header">
                <h5 class="m-0">
                <a class="d-block w-100" data-toggle="collapse" href="#collapseAturan" aria-expanded="true" aria-controls="collapseAlur">Aturan Peminjaman</a></h5>
              </div>
              <div id="collapseAturan" class="collapse show">
              <div class="card-body text-justify">
              <h2>A. ATURAN UMUM</h2>
  <ol>
    <li>Peminjaman ruangan dilayani selama jam kerja kantor (08.00-16.00 WIB) dan penggunaan ruangan dimulai setelah ruang kelas selesai digunakan untuk kegiatan perkuliahan (hari kerja: 17.50-21.00 WIB; hari libur = 07.00 – 21.00 WIB)</li>
    <li>Gedung kuliah umum adalah fasilitas ruangan klasikal yang digunakan untuk kegiatan yang bersifat akademik dan keorganisasian (kuliah, rapat dan kegiatan organisasi lainnya).</li>
    <li>Gedung kuliah umum meliputi gedung A, gedung C, gedung E dan gedung F</li>
    <li>Gedung A terdiri dari 3 ruang kelas yang dapat dipinjamkan</li>
    <li>Gedung C terdiri dari 7 ruang kelas yang dapat dipinjamkan</li>
    <li>Gedung E terdiri dari 14 ruang kelas yang dapat dipinjamkan</li>
    <li>Gedung F terdiri dari 12 ruang smart class yang dapat dipinjamkan, 3 ruang rapat dan 1 aula.</li>
    <li>Area luar gedung meliputi area yang berada didalam lingkungan fakultas teknik Unsoed (pedopo, lapangan, halaman dan area lainnya)</li>
    <li>Pengguna gedung kuliah umum adalah mahasiswa, dosen dan pegawai Fakultas Teknik Universitas Jenderal Soedirman.</li>
    <li>Izin penggunaan ruangan ditujukan kepada Wakil Dekan Umum dan Keuangan Up Koordinator Tata Usaha Up Sub Koordinator Umum dan Keuangan</li>
    <li>Apabila ada dua kegiatan yang bersamaan waktu dan tempat pelaksanaannya maka yang diutamakan adalah kegiatan yang berhubungan dengan perkuliahan (KBM)</li>
    <li>Pihak pengelola bisa membatalkan peminjaman dari calon pengguna/peminjam yang sudah dijadwalkan, dikarenakan ada kegiatan/penggunaan ruangan oleh pihak dan untuk kepentingan acara kedinasan Fakultas Teknik Unsoed, selanjutnya pihak pengelola akan menghubungi pengguna/peminjam yang bersangkutan.</li>
  </ol>

  <h2>B. ATURAN KHUSUS</h2>
  <ol>
    <li>Mahasiswa mengisi form peminjaman ruangan pada link: <a href="http://bit.ly/PinjamRuangFTUnsoed">http://bit.ly/PinjamRuangFTUnsoed</a> disesuaikan dengan jadwal ruangan yang masih kosong. Pemesanan peminjaman ruangan maksimal untuk 30 hari kedepan (jadwal ruangan dapat dilihat pada link: <a href="http://bit.ly/PinjamRuangFTUnsoed">http://bit.ly/PinjamRuangFTUnsoed</a>)</li>
    <li>Mengajukan surat permohonan peminjaman ruangan yang diketahui oleh Wakil Dekan III FT/ Ketua Jurusan/Pembina UKM</li>
    <li>Surat peminjaman yang telah disetujui diserahkan ke bagian Umum dan Keuangan sebagai pengelola ruangan maksimal 5 hari kerja sebelum pelaksanaan kegiatan</li>
    <li>Peminjam menggandakan surat permohonan peminjaman yang terlah didisposisi rangkap 2 dengan rincian sebagai berikut:
      <ol type="a">
        <li>Copy 1 diserahkan kepada verifikator peminjaman ruangan sebagai arsip</li>
        <li>Copy 2 diserahkan kepada penyedia ruangan sebagai pemberitahuan</li>
        <li>Surat asli diserahkan kepada petugas jaga/SATPAM serta menyerahkan KTM saat hari pelaksanaan kegiatan untuk akses penggunaan ruangan</li>
      </ol>
    </li>
  </ol>

  <h2>C. TATA TERTIB</h2>
  <ol>
    <li>Pengguna/peminjam gedung kuliah umum dilarang menggunakan senjata, berkelahi, mengkonsumsi minuman keras, narkoba dan obat-obatan lain yang memabukan.</li>
    <li>Pengguna/peminjam dilarang merusak gedung dan fasilitasnya, corat-coret, merokok, meludah dan membuang sampah sembarangan.</li>
    <li>Pengguna/peminjam bersedia/wajib menjaga keamanan dan ketertiban agar tidak terjadi keributan.</li>
    <li>Pengguna/peminjam bersedia menjaga sopan santun dalam berpakaian dan berperilaku.</li>
    <li>Apabila terjadi kehilangan dan atau kerusakan fasilitas gedung kuliah umum, maka pengguna/peminjam bertanggungjawab atas hal tersebut.</li>
    <li>Pengguna/peminjam tidak diperkenankan memindahkan fasilitas gedung kuliah umum tanpa izin pengelola</li>
  </ol>
              </div>
            </div> </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

<?php include 'layout/footer.php';?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>


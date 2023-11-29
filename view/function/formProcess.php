<?php
include 'connect.php';
session_start();
$id_peminjaman = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_SESSION['user'];
    $organisasi = $_POST['organisasi'];
    $keperluan = $_POST['keperluan'];
    $id_ruangan = $_POST['ruangan'];
    $waktu_awal = $_POST['datebegin'];
    $waktu_selesai = $_POST['dateend'];

    $id_user = $user['id_user'];

    if (empty($id_peminjaman)) {
        $sql = "INSERT INTO peminjaman (id_ruangan, id_user, organisasi, keperluan, waktu_awal, waktu_selesai, status) 
                VALUES ('$id_ruangan', '$id_user', '$organisasi', '$keperluan', '$waktu_awal', '$waktu_selesai', 'Diproses')";
    } else {
        $sql = "UPDATE peminjaman SET 
                id_ruangan = '$id_ruangan', 
                id_user = '$id_user', 
                organisasi = '$organisasi', 
                keperluan = '$keperluan',  
                waktu_awal = '$waktu_awal', 
                waktu_selesai = '$waktu_selesai', 
                status = 'Diproses' 
                WHERE id_peminjaman = '$id_peminjaman'";
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../table.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "User not logged in.";
}
?>
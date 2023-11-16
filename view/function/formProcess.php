<?php
include 'connect.php';
session_start();

// Check if the user is logged in
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_SESSION['user'];
    $organisasi = $_POST['organisasi'];
    $keperluan = $_POST['keperluan'];
    $id_ruangan = $_POST['ruangan'];
    $waktu_awal = $_POST['datebegin'];
    $waktu_selesai = $_POST['dateend'];

    // Assuming 'nama' is a key in the user array
    $id_user = $user['id_user'];

    // Check if 'id_peminjaman' is set to determine if it's an update or insert operation
    if (isset($_POST['id_peminjaman'])) {
        // Update operation
        $id_peminjaman = $_POST['id_peminjaman'];
        $sql = "UPDATE peminjaman SET 
                id_ruangan = '$id_ruangan', 
                id_user = '$id_user', 
                organisasi = '$organisasi', 
                keperluan = '$keperluan',  
                waktu_awal = '$waktu_awal', 
                waktu_selesai = '$waktu_selesai', 
                status = 'Diproses' 
                WHERE id_peminjaman = '$id_peminjaman'";
    } else {
        // Insert operation
        $sql = "INSERT INTO peminjaman (id_ruangan, id_user, organisasi, keperluan, waktu_awal, waktu_selesai, status) 
                VALUES ('$id_ruangan', '$id_user', '$organisasi', '$keperluan', '$waktu_awal', '$waktu_selesai', 'Diproses')";
    }

    // Execute the SQL query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../table.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Redirect or handle the case when the user is not logged in
    echo "User not logged in.";
}
?>

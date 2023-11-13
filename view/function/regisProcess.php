<?php 
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $no_hp = $_POST["no_hp"];
    $id_jurusan = $_POST["id_jurusan"];
    $isAdmin = false; // Default isAdmin value

    // Query untuk memasukkan data ke database
    $sql = "INSERT INTO user (nama, email, password, no_hp, id_jurusan)
            VALUES ('$nama', '$email', '$password', '$no_hp', '$id_jurusan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../login.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

?>
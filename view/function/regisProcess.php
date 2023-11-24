<?php 
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $id_jurusan = $_POST["id_jurusan"];

    $isAdmin = ($id_jurusan == "6") ? 1 : 0;


    

    $sql = "INSERT INTO user (nama, email, password, id_jurusan, isAdmin)
            VALUES ('$nama', '$email', '$password',  '$id_jurusan', '$isAdmin')";
            
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
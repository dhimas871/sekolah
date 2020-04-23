<?php
include 'sistem/koneksi.php';
if (isset($_POST['submit'])) {


    $username =  $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . $pass . "' ");

    $data = mysqli_fetch_array($query);
    $user_login = $data['username'];
    $user_role = $data['user_role'];


    if (mysqli_num_rows($query) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['user_role'] = $user_role;

        echo "berhasil login";
        if ($user_role == 'admin') {
            header('location: index.php');
        } elseif ($user_role == 'guru') {
            header('location: index.php');
        }
    } else {
        $error = true;
    }
}

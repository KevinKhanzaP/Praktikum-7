<?php
$username   = $_POST['username']; //deklarasi variabel dengan query pada db
$pass       = md5($_POST['password']); //deklarasi variabel dengan query pada db

include 'koneksi.php'; //menyertakan file lain

//pengecekan apakah username dan password yang dimasukkan sudah betul atau tidak
$user = mysqli_query($connect,"SELECT * from admin where username='$username' and
    password='$pass'");
$chek = mysqli_num_rows($user);

if($check>0) //seleksi kondisi
{
    session_start(); //jika betul, session start dan redirect ke halaman selanjutnya
    $row = mysqli_fetch_array($user);
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    header("location:tampilkontak.php");
}else //jika tidak, maka kembali ke halaman login
{
    header("location:index.php");
}
?>

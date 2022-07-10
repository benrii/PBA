<?php
// mengaktifkan session php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$psswd = $_POST['psswd'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, "select * from user where username='$username' and psswd='$psswd'");
if (mysqli_num_rows($data)>0){
	$row= mysqli_fetch_array($data); //membuat session

			$_SESSION['user'] = $row['username'];
			// $_SESSION['nama'] = $row['nama'];
			// $_SESSION['email'] = $row['email'];
			// $_SESSION['no_tlp'] = $row['no_tlp'];
			// $_SESSION['id'] = $row['id'];
			$_SESSION['pass'] = $row['psswd'];

		header("location:beranda.php");
	}else{
		die("<script>alert('Akun tidak ditemukan')</script>");
	}
?>
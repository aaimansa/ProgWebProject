<?php
session_start();
include 'dbconnect.php';

if(isset($_SESSION['role'])){
	header("location:stock");
}

if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Username atau Password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda berhasil keluar dari sistem";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus Login";
		}else if($_GET['pesan'] == "noaccess"){
			echo "Akses Ditutup";
	}
}


if(isset($_POST['btn-login']))
{
 $uname = mysqli_real_escape_string($conn,$_POST['username']);
 $upass = mysqli_real_escape_string($conn,md5($_POST['password']));

 // menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from slogin where username='$uname' and password='$upass';");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
 if($data['role']=="Taruna"){
		// buat session login dan username
		$_SESSION['kodeKamar'] = $data['kodeKamar'];
		$_SESSION['user'] = $data['nickname'];
		$_SESSION['user_login'] = $data['username'];
		$_SESSION['id'] = $data['id'];
		$_SESSION['role'] = "stock";
		header("location:stock");

 }
 else
 {
  header("location:index.php?pesan=gagal");

 }
 
}

}


?>


<html>
    <head>
        <title>KORPSTAR POLTEKSSN </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>body{background-image:url("bg.jpg");
        background-repeat: no-repeat;
        background-attachment:fixed;
        background-size:cover;
        }
        
    .image {
        display: block;
        margin-left: auto;
        margin-top: auto;
        margin-right: auto;
        width: 100%;
    }
    .center{
        display: block;
        margin-left: auto;
        margin-top: auto;
        margin-right: auto;
        width: 25%;
    }
    .overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color:white;
    overflow: hidden;
    width: 100%;
    height: 0;
    transition: .5s ease;
    }
    .card-body:hover .overlay {
    height: 100%;
    }
    .formlogin{
        margin-left : auto;
        margin-right : auto;
    }

	</style>

    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
            <br><br>
                <div class="card ">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <img class="image" src="stock/poltek.png" alt="Avatar">
                            <div class="overlay">
                            <!-- form berfungsi mengirimkan data input dengan method post ke proses login dengan paramater get aksi login -->
                            <br><br>
                            <div class="alert alert-secondary">
                            <small>Masukkan NPM dan Password yang terdaftar</small>
                            </div>
                            <form method="post" action="" id="formlogin" style="margin:10%">
                                <div class="form-group">
                                    <input name="username" class="form-control" placeholder="NPM" type="text" required="required" autocomplete="off">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <input name="password" class="form-control" placeholder="Password" type="password" required="required" autocomplete="off">
                                </div> <!-- form-group// --> 
                                <div class="form-group">
                                    <button type="submit" name="btn-login" class="btn btn-secondary btn-block">Login</button>
                                </div> <!-- form-group// -->                                                           
                            </form>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div> 
    </div>
    </body>
</html>

<?php 
include 'functions.php'; // panggil perintah koneksi database 

if(!isset($_SESSION['username'] )== 0) { // cek session apakah kosong(belum login) maka alihkan ke index.php
    header('Location: index.php');
}

if(isset($_POST['login'])) { // mengecek apakah form variabelnya ada isinya
    $username = $_POST['username']; // isi varibel dengan mengambil data username pada form
    $password = md5($_POST['password']); // isi variabel dengan mengambil data password pada form
    try {
        $sql = "SELECT * FROM login WHERE username = :username AND password = :password"; // buat queri select
        $stmt = $conn->prepare($sql); 
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute(); // jalankan query

        $count = $stmt->rowCount(); // mengecek row
        if($count == 1) { // jika rownya ada 
            $_SESSION['username'] = $username; // set sesion dengan variabel username
            header("Location: update.php"); // lempar variabel ke tampilan index.php
            return;
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}

?>

<!-- FORM LOGIN -->
<html>
    <head>
        <title>Login </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body style="background:#586df5;">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <br/><br/>
                <div class="alert alert-danger">
                    <small>Login Anda Gagal, Periksa Kembali Username dan Password</small>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <div class="card-body">
						<!-- form berfungsi mengirimkan data input 
						dengan method post ke proses login dengan paramater get aksi login -->
                        <form method="post" action="" id="formlogin">
                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" class="form-control" placeholder="username" type="text" required="required" autocomplete="off">
                        </div> <!-- form-group// -->
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" class="form-control" placeholder="******" type="password" required="required" autocomplete="off">
                        </div> <!-- form-group// --> 
                        <div class="form-group">
                            <button type="submit" name="login" class="btn btn-primary btn-block"> Login  </button>
                        </div> <!-- form-group// -->                                                           
                    </form>
                </div>
            </div>
            <div class="col-sm-4">
            </div>
        </div> 
    </div>
    </body>
</html>
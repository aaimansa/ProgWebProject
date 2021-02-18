<!doctype html>
<html class="no-js" lang="en">

<?php 
    include '../dbconnect.php';
    include 'cek.php';
	?>

<head>
    <meta charset="utf-8">
	<link rel="icon" 
      type="image/png" 
      href="../favicon.png">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | KORPSTAR POLTEKSSN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144808195-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144808195-1');
	</script>
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="page-container">
        <div class="sidebar-menu">
            <div class="sidebar-header">
                    <a href="index.php"><img class = "center" src="poltek.png" alt="logo" width="100%"></a>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
							<li class="active"><a href="index.php"><span>Pengumuman</span></a></li>
                            <li>
                                <a href="stock.php"><i class="ti-dashboard"></i><span>Kerusakan Inventaris Kamar</span></a>
                            </li>
                            <li>
                                <a href="logout.php"><span>Logout</span></a>
                                
                            </li>
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header-area">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <h2>Selamat datang, <?=$_SESSION['user'];?>!</h2>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						<!--
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right" style="color:black; padding:0px;">
                            <img src="poltek.jpg" width="220px" class="user-name dropdown-toggle" data-toggle="dropdown"\>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Pengumuman</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
										 <table class="table table-bordered table-hover"><thead class="thead-dark">  
										<tr>
										 <th><center> No </center></th>
										 <th><center> Pengumuman </center></th>
										 <th><center> Oleh </center></th>
										 <th><center>  </center></th>


										</tr></thead>
										 <form method ='POST' action = 'notes.php'>
										 <tr class="table-active">
											<td><center><input type = 'hidden'/></center> </td>
											<td><center> <input type = 'text' class='form-control' name = 'msg' required /></center> </td>
											<td><center><strong><?=$_SESSION['user'];?></strong> <span class="badge badge-secondary"><?=$_SESSION['kodeKamar'];?></span></center> </td>
											<td><center><input type = 'submit' name = 'submit'  class='btn btn-primary btn-sm' value = 'Tambah'/></center></td>
											<tr>
										 </form>
										<?php  
										// Perintah untuk menampilkan data
										$queri="Select * From notes where 1=1 Order by id ASC" ;  //menampikan SEMUA data dari tabel

										$hasil=MySQLi_query ($conn,$queri);    //fungsi untuk SQL

										// nilai awal variabel untuk no urut
										$i = 1;

										// perintah untuk membaca dan mengambil data dalam bentuk array
										while ($data = mysqli_fetch_array ($hasil)){
										$id = $data['id'];
										 echo "  <form method ='POST' action = 'done.php'>
										  <tr>
										  <td><center>".$i."</center></td>
										  <td><strong><center>".$data['contents']."</center></strong></td>
										  <td><strong><center>".$data['admin']."</center></strong></td>
										  <td><center><input type = 'hidden' name = 'id' value = '".$data['id']."'> <input type='submit' name = 'submit'  class='btn btn-danger btn-sm' value = 'Hapus' formaction='del.php' /></center></td>
										  </form></td>
										  </tr> </form>
										  ";
										 $i++; 
										}
										?>
										</table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
        <footer>
            <div class="footer-area">
                <p>KORPSTAR POLTEKSSN 2020/2021</p>
            </div>
        </footer>
    </div>

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <script src="assets/js/line-chart.js"></script>
    <script src="assets/js/pie-chart.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>

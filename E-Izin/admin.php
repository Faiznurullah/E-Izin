<?php

session_start();

if($_SESSION['password']=='')
{
    header("location:login.php");
}
 include 'db.php';
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN WEB</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
	  <img src="img/admin.png" height="60px">
   <p>ADMIN GANTENG</p>
        <div class="sidebar-brand-text mt-3"> </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      

    

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

     

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">


           

            
           

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
<center><h1>Pengelola Data Admin</h1></center>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>

          

              <!-- Color System -->
              <div class="row">
                <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                     <p>STATUS: Admin</p>
					 <p>Sebagai Pengelola</p>
                    </div>
                  </div>
                </div>
               
               
</div>
        <!-- /.container-fluid -->











 




          <center><h5><p>Data Izin Siswa Pada Hari Ini</h5></p></center>



<center>
  <table class="table-bordered mt-3" width="1000px">
     <tr>
         <td><center>No</td>
		 <td><center>Nama</td>
		 <td><center>Kelas</td>
		 <td><center>Jurusan</td>
		 <td><center>Surat</td>
		 <td><center>Aksi</td>
      </tr>
	  <?php
	  $query = mysqli_query($conn, "SELECT * FROM tb_upload");
	  while($row = mysqli_fetch_array($query)){
	  ?>
	  <tr>
	 
         <td> <center><?php echo $row['id_gambar'] ?></td>
		 <td><center><?php echo $row['nama'] ?></td>
		 <td><center><?php echo $row['asal'] ?></td>
		 <td><center><?php echo $row['jurusan']?></td>
		 <td><center><img src="upload/<?php echo $row['file'] ?>" width="100px" height="100px"></td>
		 <td>
		  <a href="hapus.php?id=<?php echo $row['id_gambar'] ?>"> <center><button type="button" class="btn btn-success">
		   <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
</svg>hapus</button></center></a>
		 </td>
      </tr>
	  <?php
	  }
	  ?>
  </table>
</center>

<div class="container">
<div class="row">
<div class="col-md-10">

</div>

<div class="col-md-2 mt-4">
<a href="logout.php">
<button type="button" class="btn btn-danger">
<svg class="bi bi-power" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M5.578 4.437a5 5 0 104.922.044l.5-.866a6 6 0 11-5.908-.053l.486.875z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.5 8V1h1v7h-1z" clip-rule="evenodd"/>
</svg>LOGOUT</button></a>
</div>


</div>
</div>





    
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

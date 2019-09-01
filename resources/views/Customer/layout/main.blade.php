<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Customer Dashboard</title>
	<link href="css/sb-admin.min.css" rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!-- Custom styles for this template-->
	
</head>
<body id="page-top">
	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="#">Get Fresh</a>

		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
		  <div class="input-group">
			
		  </div>
		</form>

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
		  <li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <i class="fas fa-envelope fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
			  <a class="dropdown-item" href="#">Message</a>
			</div>
		  </li>
		  <li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <i class="fas fa-user-circle fa-fw"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
			 
			  <a class="dropdown-item" href="/logout" >Logout</a>
			</div>
		  </li>
		</ul>

	</nav>

	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="/customer">
				<span>view Profile</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/availableProduct">
				<span>view All Product</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/orderedProduct">
				<span>Ordered Product</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/cartProduct">
				<span>cart Product</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/purchaseHistory">
				<span>Purchase History</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/employee">
				<span>Employee Lists</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/editProfile">
				<span>Edit Profile</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/changePassword">
				<span>Change Password</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/report">
				<span>Report</span></a>
			</li>
		</ul>

		<div id="content-wrapper">

			<div class="container-fluid">

				<!-- Page Content -->
				@yield('content')

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<footer class="sticky-footer">
				<div class="container my-auto">
				  <div class="copyright text-center my-auto">
					<span>Copyright © ATP III Final Project Summer'19</span>
				  </div>
				</div>
			</footer>

		</div>
		<!-- /.content-wrapper -->

	  </div>
	  <!-- /#wrapper -->

	  <!-- Scroll to Top Button-->
	  <a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	  </a>

	  <!-- Logout Modal-->
	  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
			  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			  </button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
			  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			  <a class="btn btn-primary" href="/logout">Logout</a>
			</div>
		  </div>
		</div>
	</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

</body>

</html>

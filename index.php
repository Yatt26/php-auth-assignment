<?php 

include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
	<link rel="stylesheet" href="css/style1.css">


	<title>Dashboard Page</title>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #8f8ad1;">
  	<div class="container-fluid">
			<!-- offcancas trigger -->
			<button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
				<span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
			</button>
			<!-- offcancas trigger -->
    	<a class="navbar-brand fw-bold text-white me-auto" href="#">i-ASSIGNMENT</a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      	<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
      	
      	<form class="d-flex ms-auto">
				<div class="input-group my-3 my-lg-0">
  				<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
  				<button class="btn btn-dark" type="submit"><i class="bi bi-search"></i></button>
				</div>
      	</form>

				<ul class="navbar-nav mb-2 mb-lg-0">
        	<li class="nav-item dropdown">
          	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-fill"></i></a>
          	<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            	<li><a class="dropdown-item" href="#">Profile</a></li>
							<li><hr class="dropdown-divider"></li>
							<li><a class="dropdown-item" href="logout.php">Log out</a></li>
          	</ul>
        	</li>
      	</ul>
    	</div>
  	</div>
	</nav>
	<!-- Navbar -->

	<!-- Offcanvas -->
	<div class="offcanvas offcanvas-start text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-color: #8f8ad1">
  	<div class="offcanvas-body p-0">
    	<nav class="navbar-dark">
				<ul class="navbar-nav">
					<li>
						<div class="small fw-bold text-uppercase px-3 my-2 text-white">PRIMARY</div>
					</li>
					<li>
						<a href="#" class="nav-link px-3 active">
							<span class="me-2"><i class="bi bi-speedometer"></i></span>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="my-4">
						<hr class="dropdown-divider"/>
					</li>
					<li>
						<div class="small fw-bold text-uppercase px-3 text-white">SECONDARY</div>
					</li>
					<li>
						<a class="nav-link px-3 text-white sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    					<span class="me-2"><i class="bi bi-layout-split"></i></span>
							<span>Layout</span>
							<span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
  					</a>
						<div class="collapse" id="collapseExample">
  						<div>
    						<ul class="navbar-nav ps-3">
									<li>
										<a href="#" class="nav-link px-3">
											<span class="me-2"><i class="bi bi-archive-fill"></i></i></span>
											<span>Archive</span>
										</a>
									</li>
								</ul>
  						</div>
						</div>
					</li>
					<li>
						<a href="#" class="nav-link px-3 active">	
							<span class="me-2"><i class="bi bi-book-fill"></i></span>
							<span>Pages</span>
						</a>
					</li>
					<li class="my-4">
						<hr class="dropdown-divider"/>
					</li>
					<li>
						<div class="small fw-bold text-uppercase px-3 text-white">THIRD</div>
					</li>
					<li>
						<a href="#" class="nav-link px-3 active">
							<span class="me-2"><i class="bi bi-graph-up"></i></span>
							<span>Charts</span>
						</a>
					</li>
					<li>
						<a href="#" class="nav-link px-3 active">
							<span class="me-2"><i class="bi bi-table"></i></span>
							<span>Tables</span>
						</a>
					</li>
				</ul>
			</nav>
  	</div>
	</div>
	<!-- Offcanvas -->

	<!-- Main Content -->
	<main class="mt-5 pt-3">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3>Dashboard, <?php echo $_SESSION['username']?>.</h3>
				</div>
			</div>

		<div class="row">
			<div class="col-md-6 mb-3">
				<div class="card h-100">
					<div class="card-header">
						<span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
						Area Chart Example
					</div>
					<div class="card-body">
						<canvas class="chart" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-3">
				<div class="card h-100">
					<div class="card-header">
						<span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
						Area Chart Example
					</div>
					<div class="card-body">
						<canvas class="chart" width="400" height="200"></canvas>
					</div>
				</div>
			</div>
		</div>
	</main>
	<!-- Main Content -->



	

	<script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="./js/jquery-3.5.1.js"></script>
  <script src="./js/jquery.dataTables.min.js"></script>
  <script src="./js/dataTables.bootstrap5.min.js"></script>

</body>
</html>
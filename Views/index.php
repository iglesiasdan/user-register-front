<!doctype html>
<html class="fixed">
	<head>
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Apok</title>


		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />


		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<script src="../assets/vendor/modernizr/modernizr.js"></script>

		<!-- Head Libs -->
		<script src="../assets/vendor/jquery/jquery.js"></script>
		<script src="../assets/javascripts/angular.min.js"></script>
		<script src="../assets/javascripts/angular-ui-router.min.js"></script>


		<!--Angular libs and controllers  -->
		<script src="../App/Controllers/myApp.js"></script>
		<script src="../assets/javascripts/angular-route.min.js"></script>
		<script src="../App/Controllers/usuarioController.js"></script>



	</head>
	<body ng-app="myApp">
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				<div class="header-right">

					<span class="separator"></span>

					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<div class="profile-info">
							
							</div>

							<i class="fa custom-caret"></i>
						</a>
					</div>
				</div>

			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left" style="background-color:#31548c;">

					<div class="sidebar-header">
						<div class="sidebar-title" style="color:#FFFFFF">
							<strong>Menu</strong>
						</div>
						<div class="sidebar-toggle " data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i style="color:#FFFFFF" class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>

					<div class="nano">
						<div class="nano-content" style="background-color:#31548c;">
							<nav id="menu" class="nav-main" role="navigation">
                        		<ul class="nav nav-main">
		                           <li>
		                              <a ui-sref="inicio">
		                              <i class="fa fa-home" aria-hidden="true"></i>
		                              <span><strong>Inicio</strong></span>
		                              </a>
		                           </li>
		                           <li>
		                              <a ui-sref="usuario">
		                              <i class="fa fa-user" aria-hidden="true"></i>
		                              <span><strong>Usuarios</strong></span>
		                              </a>
		                           </li>
		                        </ul>
                     		</nav>

						</div>

					</div>

				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Apok Test</h2>
					</header>
						<div id="main">
								<div	ui-view>

								</div>
						</div>
				</section>
			</div>



		<!-- Vendor -->
		<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<!-- Specific Page Vendor -->
		<script src="../assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="../assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>



	</body>
</html>

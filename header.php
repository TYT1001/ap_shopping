<?php
session_start();
require('./config/common.php');	
require('./config/config.php');
if(empty($_SESSION['user_id'] && $_SESSION['logged_in'])){
	header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>TYT Shop</title>

	<!--
            CSS
            ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body id="category">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="home.php"><h4>AP Shopping<h4></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<?php
                    $cart = 0;
                        if(isset($_SESSION['cart'])){
                            foreach ($_SESSION['cart'] as $key => $qty) {
                                $cart += $qty;
                            }
                        }
                    ?>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item ">
								<a href="cart.php" class="cart">
									<span class="ti-bag">
									</span>
									<div class="text-danger rounded-circle text-center d-inline" style="width:20px;position:relative;right:.8rem;bottom:.8rem;">
										<?php echo $cart; ?>
									</div>
								</a>
							</li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form action="ap_shopping_home.php" class="d-flex justify-content-between" method="post">
				<input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>" />
					<input type="text" name="search" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb" style="margin-bottom:10px!important;margin-top:160px;margin-right:70px">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first" style="margin-right:150px;">
					<h1>Welcome</h1>
					<?php if($_SESSION) {?>
						<h1 class="d-inline"><?php echo $_SESSION['username'] ?></h1>
					<?php
					}
					?>
					<a href="logout.php"><button class="primary-btn d-inline" style="border: 0">Logout</button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	

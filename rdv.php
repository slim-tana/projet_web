

<?PHP
include "../../entities/rdv.php";
include "../../core/rdvC.php";

if (isset($_POST['dateR']) and isset($_POST['timeR']) and isset($_POST['refp'])and isset($_POST['etat']))
{
    $date_r=$_POST['dateR'];
    $time_r=$_POST['timeR'];
    $refP=$_POST['refp'];
	$etat=$_POST['etat'];
    $rdvvar = new rdv($date_r,$time_r,$refP,$etat);	
    $rdvCvar= new rdvC() ;
    $rdvCvar->ajouterRdv($rdvvar);
	
    header('Location: afficherClient.php');
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contactez_nous</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">dinars</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										Mon Compte
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Se Connecter</a></li>
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Créer un compte</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="#">JI-LINE</a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.php">home</a></li>
								<li><a href="#">collections</a></li>
								<li><a href="#">produits</a></li>
								<li><a href="#">point de vente</a></li>
								<li><a href="#">notre histoire</a></li>
								<li><a href="contact.php">reclamtion</a></li>
								<li><a href="rdv.php">rendezvous</a></li>
							</ul>

							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="#">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">2</span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>

	<!-- Hamburger Menu -->

	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				<li class="menu_item has-children">
					<a href="#">
						usd
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">cad</a></li>
						<li><a href="#">aud</a></li>
						<li><a href="#">eur</a></li>
						<li><a href="#">dinar</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">FR</a></li>
						<li><a href="#">IT</a></li>
						<li><a href="#">GR</a></li>
						<li><a href="#">SP</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						Mon Compte
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Se connecter</a></li>

						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Créer un compte</a></li>
						<li><a href="compteClient.php">Créer compte</a></li>
					</ul>
				</li>
								<li><a href="index.php">home</a></li>
								<li><a href="#">collections</a></li>
								<li><a href="#">produits</a></li>
								<li><a href="#">point de vente</a></li>
								<li><a href="#">notre histoire</a></li>
								<li><a href="#"></a>ACTUALITES</li>
								<li><a href="contact.php">reclamtion</a></li>
								<li><a href="rdv.php">rendezvous</a></li>
			</ul>
		</div>
	</div>

	<div class="container contact_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
					</ul>
				</div>

			</div>
		</div>

		<!-- Map Container --> 

   <section class="banner-bottom-wthreelayouts py-lg-5 py-3"  >

		<div class="container-fluid" >
<div class="card " style="width: rem;" >
 <div class="card-header" style="background-image:url(images/banner_1.jpeg)">
 <div class="inner-sec-shop px-lg-4 px-3">
			  <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Rendezvous</h3>
	</div>
<div class="card-body mb-3" style="max-width: 54rem;">
  <form method="POST"  name="f" action="">
  <div class="">
    <div class="col mb-3">
	<input type="hidden" name="Id" class="form-control" required  placeholder="yyyy-mm-dd" >
     <label for="inputEmail4">Date</label>
      <input type="date" name="dateR" class="form-control" required placeholder="yyyy-mm-dd" >
    </div>
    <div class="col mb-3">
     <label for="inputEmail5">Time</label>
      <input type="time" name="timeR" class="form-control" required  placeholder="example 12h">
    </div>
    <div class="col mb-3">
     <label for="inputEmail5">Product Reference</label>
      <input type="text"  name="refp" class="form-control" required placeholder="Product Reference" >
    </div>
	<div class="col mb-3">
     <label for="inputEmail5">state</label>
      <input type="text"  name="etat" class="form-control" required  placeholder="1 confirmé et 0 pas sûr" >
    </div>
  </div>
  <div><button type="submit" name="edit" class="btn btn-primary submit mb-3" style="float: left; background-color:#F25613">ADD</button></div>
</form>
</div>
</div>
			
</div>

		<!-- Contact Us -->

		

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Restez informé</h4>
						<p>Abonnez-vous à notre newsletter pour ne pas manquer les dernières nouvelles, les tendances hipster ou les nouveaux produits.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
							<input id="newsletter_email" type="email" placeholder="Ton email" required="required" data-error="Valid email is required.">
							<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">s'inscrire</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">notre histoire</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contactez nous</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2020 JI-LINE All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">SIX_UP</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>


<?PHP
include "../../entities/reclamation.php";
include "../../core/reclamationC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['type_rec'])  and isset($_POST['ref']) and isset($_POST['message']) and isset($_POST['date_rec']))
{
    $id=$_POST['id'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $type_rec=$_POST['type_rec'];    
    $ref=$_POST['ref'];
    $message=$_POST['message'];
    $date_rec=$_POST['date_rec'];
    $reclamationvar = new reclamation($id,$nom,$prenom,$type_rec,$ref,$message,$date_rec);
    $reclamationCvar= new reclamationC() ;
    $reclamationCvar->ajouterReclamation($reclamationvar);
    header('Location: afficherReclamation.php');

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
				<li class="menu_item"><a href="#">home</a></li>
				<li class="menu_item"><a href="#">collections</a></li>
				<li class="menu_item"><a href="#">produits</a></li>
				<li class="menu_item"><a href="#">point de vente</a></li>
				<li class="menu_item"><a href="#">notre histoire</a></li>
				<li class="menu_item"><a href="#">actualités</a></li>
				<li class="menu_item"><a href="#">contact</a></li>
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

 <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
<div class="card " style="width: rem;">
 <div class="card-header" style="background-image:url(images/wall-decoration-3945.jpeg)">
 <div class="inner-sec-shop px-lg-4 px-3">
			  <h3 class="tittle-w3layouts text-left my-lg-4 my-3">Reclamation</h3>
	</div>

<div class="card-body mb-3" style="max-width: 54rem;">
            <form class="forms-sample" id="addReclamation" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                  <label for="exampleInputEmail3">id_Reclamation</label>
                  <input type="text" required class="form-control" name="id" id="id" placeholder="id reclamation">
              </div>
            <div class="form-group">
            <label for="exampleInputEmail3">Nom</label>
            <input type="text" required class="form-control" name="nom" id="nom" placeholder="nom reclamation">
            </div>  
            <div class="form-group">
            <label for="exampleInputEmail3">Prenom</label>
            <input type="text" required class="form-control" name="prenom" id="prenom" placeholder="prenom reclamation">
            </div> 	
            <div class="form-group">
            <label for="exampleInputEmail3">Type_rec</label>
			<select name="type_rec" id="type_rec" required class="form-control" >
				<option value="service" >service</option>
				<option value="commande">commande</option>
				<option value="echange">echange</option>
			</select>
            </div> 			  
            <div class="form-group">
            <label for="exampleInputEmail3">Ref</label>
            <input type="text" required class="form-control" name="ref" id="ref" placeholder="ref">
            </div> 
		
            <div class="form-group">
            <label for="exampleInputEmail3">Message</label>
            <textarea rows="4" cols="8" required class="form-control" name="message" id="message" placeholder="message"></textarea>
            </div> 				  
              <div class="form-group">
                  <label for="exampleInputEmail3">Date_rec</label>
                  <input type="date" required class="form-control" name="date_rec" id="date_rec" placeholder="Date_rec">
              </div>
  <div><button type="submit" name="edit" class="btn btn-primary submit mb-3" onclick=" testAjouReclamation()" style="float: left; background-color:#F25613">Submit</button></div>
		  

                             </form>
			</div>
			</div>
                                               </div>
                                           </div>
                                       </section>

		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Contactez-nous</h1>
					<p>Vous avez des questions ou des remarques ? Laissez celles-ci ici et nous y répondrons le plus vite possible !</p>
					<div>
						<p>(800) 686-6688</p>
						<p>info.ji-line@gmail.com</p>
					</div>
					<div>
						
					</div>
					<div>
						<p> Nous somme ouvert: 10.00-19.30 Lundi-Samedi</p>
						<p>Dimanche:fermé </p>
					</div>
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1> Suivez-nous</h1>
					<ul class="social d-flex flex-row">
						<li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Questions ou remarques ?</h1>
					<p>Vous avez des questions ou des remarques ? Laissez celles-ci ici et nous y répondrons le plus vite possible !</p>
					<form action="post">
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="Nom
							" placeholder="Name" required="required" data-error="Name is required.">
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
							<input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required.">
							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">Envoyez un message</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>

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

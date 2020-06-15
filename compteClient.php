<?PHP



include "../../entities/client.php";
include "../../core/clientC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['adresse'])  and isset($_POST['mail'])  and isset($_POST['mot_de_passe'])  and isset($_POST['numero']))
{
    
  
     $cin=$_POST['cin'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $adresse=$_POST['adresse'];
    $mail=$_POST['mail'];
    $mot_de_passe=$_POST['mot_de_passe'];
  
    $numero=$_POST['numero'];
 $clientvar = new client($cin,$nom,$prenom,$adresse,$mail,$mot_de_passe,$numero);
$clientCvar =new clientC();
$clientCvar->ajouterClient($clientvar);
header('Location: afficherClient.php');
	
}else{
	echo "	Verifier les champs";
}

include "footer.php";
?>
<!-- Follow Us -->

				<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
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

<form class="form-login" action="afficherClient.php">
			<div class="col-lg-11 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Créer un compte </h1>
					<p>Inscrivez-vous afin d'accéder à votre historique de commandes !</p>
					<form action="post">
						<div>
							<input id="input_cin" class="form_input input_cin input_ph" type="number" name="cin
							" placeholder="CIN" required="required" data-error="cin is required.">

							<input id="input_nom" class="form_input input_nom input_ph" type="text" name="nom
							" placeholder="Nom" required="required" data-error="nom is required.">

							<input id="input_prenom" class="form_input input_prenom input_ph" type="text" name="prenom
							" placeholder="Prénom" required="required" data-error="prenom is required.">

							<input id="input_adresse" class="form_input input_adresse input_ph" type="text" name="adresse
							" placeholder="Adresse" required="required" data-error="adresse is required.">

							<input id="input_mail" class="form_input input_mail input_ph" type="mail" name="mail" placeholder="Mail" required="required" data-error="Valid mail is required.">

							<input id="input_mot_de_passe" class="form-control" type="text" name="mot_de_passe" placeholder="Mot de passe" required="required" data-error="mot_de_passe is required.">
							
                           <label class="checkbox">
							<input id="input_numero" class="form_input input_numeroinput_ph" type="number" name="numero" placeholder="Numéro" required="required" data-error="numero is required.">
							
						</div>
						<div>
							 <button class="btn btn-theme btn-block" href="afficherClient.php" type="submit"><i class="fa fa-lock"></i>Créer</button>
						</div>
					</form>
				</div>
			</div>

		</div>
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



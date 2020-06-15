<?PHP
include "../../core/reclamationC.php";
$reclamationCvar=new reclamationC();
if (isset($_POST["supprimer"])){
	$reclamationCvar->supprimerReclamation($_POST["id"]);
	header('Location: afficherReclamation.php');
}

?>
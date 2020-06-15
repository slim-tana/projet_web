<?php
include_once 'AdminC1.php';
	if(isset($_POST['login']) && isset($_POST['password']))
{
	$adminC = new adminC();
	$result = $adminC->verifierLogin($_POST['login'],$_POST['password']);
	if($result->count==0)
	{
	header("location:../views/Backoffice/login.php"); 
		
	}
	else
	{
		session_start();
		$_SESSION['id'] = $result->id;
		$_SESSION['mdp'] = $result->mdp;
		//$currentUrl = $_SESSION['currentURL'];
		

		header("location:../views/Backoffice/index.php?action=yes"); 
	}

}
else
{
	header("location:../views/back/login.php?err=champs");
}



 ?>
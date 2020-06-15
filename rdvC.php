<?PHP 
include "../../config.php";
class rdvC {
    function afficherRdvs($rdv)
    {
        echo "date_rdv:   ".$rdv->getdate_rdv()."<br>";
        echo "time_rdv:         ".$rdv->gettime_rdv()."<br>";
        echo "refProduit_rdv:        ".$rdv->getrefProduit_rdv()."<br>" ;     
		echo "username:   ".$rdv->getusername()."<br>";
    }
    function ajouterRdv($rdv){
		$sql="insert into rdv (date_rdv,time_rdv,refProduit_rdv,etat ) values (:p,:n,:i,:e)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $date=$rdv->getDate_rdv();
		$time=$rdv->getTime_rdv();
        $refp=$rdv->getrefProduit_rdv();
		$etat=$rdv->getusername();
		 
	
			
		$req->bindValue(':p',$date);
		$req->bindValue(':n',$time);
		$req->bindValue(':i',$refp);
		$req->bindValue(':e',$etat);
		
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherRdv(){
		$db = config::getConnexion();
       		$sql="SELECT * FROM rdv";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$rdv= $req->fetchALL(PDO::FETCH_OBJ);
		return $rdv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
	function calcule1(){
		$sql="  SElECT COUNT(id_rdv) AS sa FROM rdv where etat='0'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
	function clacule(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="  SElECT COUNT(id_rdv) AS sar FROM rdv where etat='1'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function trieRdv(){
		$db = config::getConnexion();
       		$sql="SELECT * FROM rdv order by date_rdv";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$rdv= $req->fetchALL(PDO::FETCH_OBJ);
		return $rdv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
	function trieRdvtime(){
		$db = config::getConnexion();
       		$sql="SELECT * FROM rdv order by time_rdv";

		try{
 		$req=$db->prepare($sql);
 	    $req->execute();
 		$rdv= $req->fetchALL(PDO::FETCH_OBJ);
		return $rdv;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

	 function rechercher1($dateRendezVous)
    {   
	    $db = config::getConnexion(); 
        $sql="SELECT * from rdv where date_rdv = '$dateRendezVous' ";
         //connexion bd
        
        //reqt sql
        //fetch data
        try
        {
        	$req=$db->prepare($sql);
 	    $req->execute();
 		$rdv= $req->fetchALL(PDO::FETCH_OBJ);
		return $rdv;
        }
        catch (Exception $e)
        {
        	die('Erreur:'.$e->getMessage());
        }
    }
	
		function SupprimerRdv($id){
		$sql="DELETE  FROM rdv WHERE id_rdv= '$id' ";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
}

?>


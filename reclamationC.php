<?PHP 
include "../../config.php";
class reclamationC {
    function afficherReclamations($reclamation)
    {
        echo "id:   ".$reclamation->getid()."<br>";
        echo "nom:         ".$reclamation->getnom()."<br>";
        echo "prenom:        ".$reclamation->getprenom()."<br>";
        echo "type_rec: ".$reclamation->gettype_rec()."<br>";       
		echo "ref:         ".$reclamation->getref()."<br>";
        echo "message:        ".$reclamation->getmessage()."<br>";
        echo "date_rec: ".$reclamation->getdate_rec()."<br>";
    }
    function ajouterReclamation($reclamation)
    {
        $sql="insert into reclamation (id,nom,prenom,type_rec,ref,message,date_rec) values (:id,:nom,:prenom,:type_rec,:ref,:message,:date_rec)";
        $db= config::getConnexion();
        try{
         $req=$db->prepare($sql);
         $id=$reclamation->getid();
         $nom=$reclamation->getnom();
         $prenom=$reclamation->getprenom();
         $type_rec=$reclamation->gettype_rec();        
		 $ref=$reclamation->getref();
         $message=$reclamation->getmessage();
         $date_rec=$reclamation->getdate_rec();
         $req->bindvalue(':id',$id);
         $req->bindvalue(':nom',$nom);
         $req->bindvalue(':prenom',$prenom);
         $req->bindvalue(':type_rec',$type_rec);
		 $req->bindvalue(':ref',$ref);
         $req->bindvalue(':message',$message);
         $req->bindvalue(':date_rec',$date_rec);
         $req->execute();
        }
        catch(Exception $e)
        {
            echo 'Erreur : '.$e->getMessage();
        }
    }
    function afficherReclamation()
    {
        $sql="SELECT * From reclamation ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste ;
        }
        catch (Exception $e)
        {
            die('Erreur; '.$e->getMessage());
        }

    }
    function supprimerReclamation($id)
    {
        $sql="DELETE FROM reclamation where id= :id";
        $db = config::getConnexion();
        $req =$db->prepare($sql);
        $req->bindvalue(':id',$id);
        try{
            $req->execute() ;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
    function modifierReclamation($reclamation,$id)
    {
        $sql="UPDATE reclamation SET nom=:nom,prenom=:prenom,type_rec=:type_rec,ref=:ref,message=:message,date_rec=:date_rec where id=:id";
        $db= config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $idd=$reclamation->getid();
            $nom=$reclamation->getnom();
            $prenom=$reclamation->getprenom();
            $type_rec=$reclamation->gettype_rec();            
			$ref=$reclamation->getref();
            $message=$reclamation->getmessage();
            $date_rec=$reclamation->getdate_rec();
            $datas = array( ':id'=>$id ,'nom'=>$nom,'prenom'=>$prenom,'type_rec'=>$type_rec,'ref'=>$ref,'message'=>$message,'date_rec'=>$date_rec);
     
            $req->bindvalue(":id",$id);
            $req->bindvalue(":nom",$nom);
            $req->bindvalue(":prenom",$prenom);
            $req->bindvalue(":type_rec",$type_rec);           
			$req->bindvalue(":ref",$ref);
            $req->bindvalue(":message",$message);
            $req->bindvalue(":date_rec",$date_rec);
            $req->execute();

        }
        catch(Exception $e)
        {
            echo "Erreur: ".$e->getMessage();
      
            print_r($datas);
        }
    }
    function recupererReclamation($id){
		$sql="SELECT * From reclamation where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	 function recupererReclamationtype($type){
		$sql="SELECT * From reclamation where type_rec=$type";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	 function trie(){
		$sql="SELECT * From reclamation order by date_rec";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function triee(){
		$sql="SELECT * From reclamation order by ref";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function calcule1(){
		$sql="  SElECT COUNT(id) AS sa FROM reclamation where type_rec='commande'";
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
	$sql="  SElECT COUNT(id) AS sar FROM reclamation where type_rec='service'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function clacule2(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
	$sql="  SElECT COUNT(id) AS s FROM reclamation where type_rec='echange'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>

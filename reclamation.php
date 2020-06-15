<?PHP
class reclamation 
{
    private $id ;
	private $nom;
	private $prenom;
	private $type_rec;
	private $ref;
	private $message;	
	private $date_rec;	

    function __construct($id,$nom,$prenom,$type_rec,$ref,$message,$date_rec)
    {
        $this->id=$id;
        $this->nom=$nom;
		$this->prenom=$prenom;
        $this->type_rec=$type_rec;        
		$this->ref=$ref;
        $this->message=$message;
        $this->date_rec=$date_rec;
    }
    function getid()
    {
        return $this->id;
    }
    function getnom()
    {
        return $this->nom ;
    }
    function getprenom()
    {
        return  $this->prenom;
    }
    function gettype_rec()
    {
        return $this->type_rec;
    }
    function getref()
    {
        return $this->ref ;
    }
    function getmessage()
    {
        return  $this->message;
    }
    function getdate_rec()
    {
        return $this->date_rec;
    }    
	
	
	
	function setid($id)
    {
        $this->id=$id;
    }
    function setnom($nom)
    {
        $this->nom=$nom;
    }
    function setprenom($prenom)
    {
        $this->prenom=$prenom;
    }
    function settype_rec($type_rec)
    {
        $this->type_rec=$type_rec;
    }
    function setref($ref)
    {
        $this->ref=$ref;
    }
    function setmessage($message)
    {
        $this->message=$message;
    }
    function setdate_rec($date_rec)
    {
        $this->date_rec=$date_rec;
    }   
	
}
?>
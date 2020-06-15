<?php

class rdv
{
	private $date_rdv;
	private $time_rdv;
	private $refProduit_rdv;
	private $username;
	private $id;
	
	function __construct($date_rdv,$time_rdv,$refProduit_rdv,$username)
	{
		$this->date_rdv=$date_rdv;
		$this->time_rdv=$time_rdv;
		$this->refProduit_rdv=$refProduit_rdv;
		$this->username=$username;
	}
	
	
	function getDate_rdv()
	{
		return $this->date_rdv;
	}
	
	function getTime_rdv()
	{
		return $this->time_rdv;
	}
	
	function getrefProduit_rdv()
	{
		return $this->refProduit_rdv;
	}	
	
	function getusername()
	{
		return $this->username;
	}
   function getid()
	{
		return $this->id;
	}
   
	


}
?>
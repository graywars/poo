<?php
class salarie
{
	private $_matricule = 0;
	private $_nom = "";
	private $_prenom = "";
	private $_salaire = 0.0;
	private $_tauxcs = 10;
	private $_tauxcp = 25;

	function __construct($infos)
	{
		$this->_matricule = $infos[0];
		$this->_nom = $infos[1];
		$this->_prenom = $infos[2];
		$this->_salaire = $infos[3];
	}

	/*
	*	Méthode calcul salaire net
	*	Entrée:	void
	*	Sorite: float
	*/
	public function CalculerSalaireNet()
	{
		return $this->_salaire - ($this->_salaire * $this->_tauxcs);
	}

}
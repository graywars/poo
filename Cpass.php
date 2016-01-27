<?php
class pass
{
	private $_digit = 0;
	private $_carac = [["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"], "", [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]];
 	private $_pass = "";

 	public function __construct($nb)
 	{
 		$this->_digit = $nb; // Définition du nombre de caractère du mot de passe
 	}
 	/*
 	*	Classe de génération de mot de passe
 	*/
 	public function genere()
 	{
 		$this->_pass = "";
 		for($i = 0; $i != $this->_digit; $i++)
 		{
	 		$type = rand(0, 2);
	 		$pos = rand(0, ($type == 0 || $type == 1)?count($this->_carac[0])-1:count($this->_carac[2])-1);
	 		//echo $i.' --> '.$type.' : '.$pos.'<br/>';
	 		$this->_pass .= ($type == 1)?strtoupper($this->_carac[0][$pos]):$this->_carac[$type][$pos];
	 	}
	 	return $this->_pass;
 	}

}
?>
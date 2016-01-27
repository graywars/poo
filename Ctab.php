<?php
class tab
{
	private $_tab, $_trie = [];

	public function __construct($tab)
	{
		$this->_tab = $tab; // Définition du tableau qui va être trié
	}

	/*
	*	Méthode de tri du tableau selon l'ordre voulut
	*	Entrée: char
	*	Sortie: array
	*/
	public function tri($ordre)
	{
		foreach($this->_tab as $k => $v)
		{
			$nb_pos[$k] = 0;
			foreach($this->_tab as $kn => $vn)
			{
				if($k != $kn && ($ordre == "croissant" && $v > $vn) || ($ordre == "decroissant" && $v < $vn))
				{
					$nb_pos[$k]++;
				}
			}
		}
		for($i = 0; $i != count($this->_tab); $i++)
		{
			for($j = 0; $j != count($this->_tab); $j++)
			{
				if($nb_pos[$j] == $i)
				{
					$this->_trie[$i] = $this->_tab[$j];
					$j = count($this->_tab)-1;
				}
			}
		}
		return $this->_trie;
	}
}
?>
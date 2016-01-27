<?php
class tab
{
	private $_tab, $_trie = [];

	public function __construct()
	{
	}

	/*
	*	Méthode set tableau
	*	Entrée:	array
	*	sortie: void
	*/
	public function set_tab($tab)
	{
		$this->_tab = $tab;
	}

	/*
	*	Méthode get tableau
	*	Entrée: void
	*	Sortie: array
	*/
	public function get_tab()
	{
		return $this->_tab;
	}

	/*
	*	Méthode de tri du tableau selon l'ordre
	*	Entrée: char
	*	Sortie: Array
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
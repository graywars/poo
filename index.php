<?php
if(!isset($_GET['class']))
{
	$_GET['class'] = 1;
}
if($_GET['class'] == 1)
{
	require_once("Ctab.php");
	$tab = [56, 18, 40, 2, 12, 60];
	$tri = new tab($tab);
	var_dump($tri->tri("decroissant"));
}
elseif($_GET['class'] == 2)
{
	require_once('Cpass.php');
	$pass = new pass("8");
	echo $pass->genere();
}
elseif($_GET['class'] == 3)
{
	require_once('Csalarie.php');
	$salarie = new salarie();
}
?>
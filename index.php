<?php
require_once 'oviniDeves.php';

$cometas= array('HALLEY','ENCKE','WOLF','KUSHIDA');
$grupos=array('AMARELO','VERMELHO','PRETO','AZUL');


$grupos= new oviniDeves($cometas,$grupos);


echo "<br> <h3>Grupos Levados para uma gal&aacute;xia distante</h3>";

foreach($grupos->getGruposLevados() as $grupo){
	echo "<br>".$grupo;
} 

echo "<hr/>";
echo "<br> <h3>Grupos n&atilde;o Levados</h3>";


foreach($grupos->getGruposNaoLevados() as $grupo){
	echo "<br>".$grupo;
}




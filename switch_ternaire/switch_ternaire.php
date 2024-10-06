<?php
$note=18;//Utilisation de switch
switch ($note){
case 0:
echo "Null <br>";
	break;
case 10:
	echo "Passable <br>";
	break;
case 15:
	echo 'Bien'."<br>";
	break;
case 18:
	echo 'Très Bien'."<br>";
	break;
default:
	echo "Je n'ai pas d'appréciation";
}

$result=($note>=15)?"Woauh quelle évolution!!!":"Redoublez d'efforts";
echo $result;

?>

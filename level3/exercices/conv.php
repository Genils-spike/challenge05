<?php 
//Covertisseur de chaines de caracteres en tableaux;
$str1 = $_POST['str1'];
$str2 = $_POST['str2'];

echo $str1;
echo '<br>';
echo $str2;


$tab1 = split(" ", $str1, 4);
echo $tab1;
?>
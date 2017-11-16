<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>exercice php bateaux</h1>
<p>test<p>
<?php
$bateaux=array (
    "Manureva" => array("nbequipage"=>3,"nbpassager"=>4),
    "Sirius"=> array("nbequipage"=>4,"nbpassager"=>6),
    "Surcouf"=> array("nbequipage"=>8,"nbpassager"=>15),
    "Nautilus"=>array("nbrequipage"=>5,"nbpassager"=>5)//création d'un tableau associatif
);
$total=0;
foreach ($bateaux as $nombateau => $infoequipage) {
    if($infoequipage["nbpassager"]>10)
{ 

echo $nombateau.'<br>';//nom du bateau
echo $infoequipage["nbpassager"].'<br>'; //nombres de passagers
}
foreach ($bateaux as $nombateau => $infoequipage) {
    
{ $total+=$infoequipage["nbequipage"];

}
echo $total;
//echo $bateaux["Manureva"]["nbpassager"];

?>
</body>
</html>



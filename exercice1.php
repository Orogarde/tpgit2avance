<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$bateaux=array (
    "Manureva" => array("nbequipage"=>3,"nbpassager"=>4),
    "Sirius"=> array("nbequipage"=>4,"nbpassager"=>6),
    "Surcouf"=> array("nbequipage"=>8,"nbpassager"=>15)
);
foreach ($bateaux as $nombateau => $infoequipage) {
    if($infoequipage["nbpassager"]>10)
{
echo $nombateau.'<br>';
echo $infoequipage["nbpassager"].'<br>';
}

}
//echo $bateaux["Manureva"]["nbpassager"];

?>
</body>
</html>



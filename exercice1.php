<?php

$bateaux=array (
    "Manureva" => array("nbequipage"=>3,"nbpassager"=>4),
    "Sirius"=> array("nbequipage"=>4,"nbpassager"=>6),
    "Surcouf"=> array("nbequipage"=>8,"nbpassager"=>15)
);
foreach ($bateaux as $nombateau => $infoequipage) {
    echo $nombateau.'<br>';
    foreach ($infoequipage as $personnes => $value) {
            echo $personnes.' '.$value.'<br>';
        }
}


?>
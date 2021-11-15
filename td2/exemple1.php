<?php
include 'fonctions.php';

echo titlePara('Essai n°1','Première utilisation de fonction');
echo titlePara('Essai n°2',repeatText('2ème utilisation avec niveau 2',30),2);
echo repeatText('ahah',100);
echo repeatText('hihi',6);

echo titlePara('Somme des élém de [2,4,5,13]',arraySum([2,4,5,13]));
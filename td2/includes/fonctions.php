<?php
/**
 * Insére un titre d'un certain niveau, suivi d'un paragraphe
 */
function titlePara(string $title,string $paragraphe, int $level=1): string {
    return "<h$level>$title</h$level><p>$paragraphe</p>";
}

/**
 * Affiche n fois le même texte
 */
function repeatText(string $text,int $n): string {
    $result='';
    for($i=0;$i<$n;$i++){
        if($i % 5 == 0){
            $result.='<br>';
        }
        $result=$result . $text;
    }
    return $result;
}

/**
 * Calcule et retourne la somme des éléments entiers d'un tableau
 */
function arraySum(array $tab):int{
    $result=0;
    foreach ($tab as $value){
        $result=$result+$value;
    }
    return $result;
}


function createHTMLTable(int $nbLignes,int $nbColonnes){
    echo '<table class="table table-bordered">';
    for($i=0;$i<$nbLignes;$i++){
        $style='';
        if($i % 2 == 0){
            $style='font-weight: bold;';
        }
        echo "<tr style='$style'>";
        for($j=0;$j<$nbColonnes;$j++){
            $color='';
            if($j % 2 == 0){
                $color='color: red;';
            }
            echo "<td style='$color'>$i-$j</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}

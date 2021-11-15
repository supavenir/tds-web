<?php
$title="Exercice n°4";
include 'includes/header.php';
?>
<nav class="nav">
    <a class="nav-link" href="?l=2&c=2">Tab 2x2</a>
    <a class="nav-link" href="?l=5&c=5">Tab 5x5</a>
    <a class="nav-link" href="?l=10&c=8">Tab 10x8</a>
</nav>
<?php
$cols=$_GET['c']??2;
$rows=$_GET['l']??3;
echo '<table class="table table-bordered">';
for($i=0;$i<$rows;$i++){
    $style='';
    if($i % 2 == 0){
        $style='font-weight: bold;';
    }
    echo "<tr style='$style'>";
    for($j=0;$j<$cols;$j++){
        $color='';
        if($j % 2 == 0){
            $color='color: red;';
        }
        echo "<td style='$color'>$i-$j</td>";
    }
    echo '</tr>';
}
echo '</table>';

include 'includes/footer.php';
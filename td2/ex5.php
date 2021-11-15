<?php
$title="Exercice n°5";
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
createHTMLTable($rows,$cols);

include 'includes/footer.php';
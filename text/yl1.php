<?php
$nimi=$_GET['nimi'];
$nimi=strtolower($nimi);
$nimi=ucfirst($nimi);
echo 'Tere,'+$nimi;

$tekst = 'Life Is About Ignoring The Drama.';

echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);
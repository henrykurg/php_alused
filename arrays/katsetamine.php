
<?php
$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');

//massiivi sisu koos parameetritega
var_dump($nimed);
//massiivi sisu kuvamine
print_r($nimed);
?>

<br><br>

<?php
$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');
echo $nimed[0];
?>

<br><br>

<?php
$nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');

//massiivi kõigi elementide väljastamine
foreach($nimed as $nimi){
    echo "$nimi <br>";
}
?>


<br><br>

<?php
$hinded = array(
    'kehv' => 2,
    'rahuldav' => 3,
    'hea' => 4,
    'väga hea' => 5
);
foreach($hinded as $hinnang => $hinne){
    echo "<li>Hinne: $hinne ($hinnang)</li>";
}
?>

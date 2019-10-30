<?php
echo "Hoe veel activiteiten wil je toevoegen?\n";

$nummer = readline();
$bucket = "Wat wil je toevoegen aan jouw bucket list?";
$lijst = array();

for ($i=0; $i < $nummer ; $i++) {
    echo "$bucket".PHP_EOL;
    $wantTo = readline();
    array_push ( $lijst, $wantTo);
}
foreach( $lijst as $var){
echo $var;}
?>
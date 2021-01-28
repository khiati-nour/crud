<?php
$base = "https://pokeapi.co/api/v2/pokemon/";
for($id=1; $id<10;$id++) {
    //$mysqli= new mysqli('localhost', 'root',  '','pokemon');
    $data = file_get_contents($base.$id.'/');
    $pokemon = json_decode($data);
    $name=$pokemon -> name;
  /*  $mysqli->query("INSERT INTO cards (card_name) VALUES ('$name')");*/
    //echo $pokemon -> name."</br>";

}
var_dump($pokemon);
?>
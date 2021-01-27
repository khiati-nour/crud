<?php
require_once 'classes/CardRepository.php';
require_once 'classes/DatabaseManager.php';
$databaseManager = new DatabaseManager("localhost", "root", "","pokemon");
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);

if (isset($_GET['delete'])){
    $id= $_GET['delete'];

$cardRepository ->delete();
header("location: index.php");
}






?>
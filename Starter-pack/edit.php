<?php


require_once 'classes/CardRepository.php';
require_once 'classes/DatabaseManager.php';
$databaseManager = new DatabaseManager("localhost", "root", "","pokemon");
$databaseManager->connect();
$name= "";
$rarity="";
$type="";
// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$card = $cardRepository->edit();
if (isset($_GET['edit'])){
    $id= $_GET['edit'];

   $row =  $cardRepository->edit() -> fetch_array();
   $name = $row['card_name'];
   $rarity = $row['rarity'];
   $type = $row['type'];


}

if (isset($_POST['update'])){


    $cardRepository->update();
    header("location: index.php");



}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>

<form method="post">
       <input type="hidden" name="id_edit" value = "<?php echo $id;?>">
    <div class="form-row">
        <div class="col-7">
            <input type="text" name="name_edit" value="<?php echo $name;?>" class="form-control" placeholder="Card Name">
        </div>
        <div class="col">
            <input type="text" name="rarity_edit" value = "<?php echo $rarity;?> "   class="form-control" placeholder="Rarity">
        </div>
        <div class="col">
            <input type="text" name="type_edit"  value = "<?php echo $type;?> "  class="form-control" placeholder="Type">
        </div>
    </div>


    <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

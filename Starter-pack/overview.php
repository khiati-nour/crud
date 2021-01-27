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
<div class="input-group">
    <div class="form-outline">
        <input type="search" name="search_input" value="" placeholder="Search" id="form1" class="form-control" />

    </div>

    <button type="submit" name="search" class="btn btn-primary"> search </button>

</div>
</form>
<div class ="row justify-content-center">
    <ul>
        <?php foreach ($cards1 as $card1): ?>
            <li><?php echo "Name:". $card1["card_name"] . " Rarity: ". $card1["rarity"] ." Type: ". $card1["type"] ?></li>
        <?php endforeach; ?>
    </ul>


</div>
<div class ="row justify-content-center">
    <table class = "table">
        <thread>
            <tr>
                <th>Name</th>
                <th>Rarity</th>
                <th>Type</th>
                <th colspan="2">Action</th>
            </tr>
        </thread>
        <?php

        foreach ($cards as $card):?>
            <tr>
                <td><?php echo $card["card_name"]; ?></td>
                <td><?php echo $card["rarity"]; ?></td>
                <td><?php echo $card["type"]; ?></td>
                <td><a class="btn btn-primary" href="edit.php?edit=<?php echo $card['id'];?>">Edit</a>
                    <a class = "btn btn-danger" href="delete.php?delete=<?php echo $card['id'];?>">Delete</a>
                </td>



            </tr>
        <?php endforeach; ?>

    </table>

</div>

    <form method="post">

    <div class="form-row">
        <div class="col-7">
            <input type="text" name="name" class="form-control" placeholder="Card Name">
        </div>
        <div class="col">
            <input type="text" name="rarity" class="form-control" placeholder="Rarity">
        </div>
        <div class="col">
            <input type="text" name="type" class="form-control" placeholder="Type">
        </div>
    </div>


    <button type="submit" name="save" class="btn btn-primary">Save</button>
</form>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
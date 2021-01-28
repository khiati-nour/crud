<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        $name = $_POST['name'];
        $rarity = $_POST['rarity'];
        $type = $_POST['type'];
        $result= $this->databaseManager->mysqli->query("INSERT INTO cards (card_name,rarity,type) VALUES ('$name','$rarity','$type')");
        return $result;
    }

    // Get one
    public function find()
    {
        $search = $_POST['search_input'];
        $result= $this->databaseManager->mysqli->query("SELECT * FROM cards WHERE card_name='$search'");
        return $result;}

    // Get all
    public function get(){

   $result= $this->databaseManager->mysqli->query("SELECT * FROM cards");


     return $result;
        /*if(!$result){

            var_dump($this->databaseManager->mysqli->error);

        }
        var_dump($result->fetch_all(MYSQLI_ASSOC));*/

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
    }
    public function edit(){
        $id= $_GET['edit'];
       $result= $this->databaseManager->mysqli->query("SELECT * FROM cards WHERE id ='$id'");
        return $result;


    }

    public function update()
    {   $con = $this->databaseManager->mysqli;
        $id= $_POST['id_edit'];
        $name_edit= $con->real_escape_string($_POST['name_edit']);
        $type_edit= $con->real_escape_string($_POST['type_edit']);
        $rarity_edit= $con->real_escape_string($_POST['rarity_edit']);
        $result =$this->databaseManager->mysqli->query("UPDATE cards
        SET card_name = '$name_edit' ,type= '$type_edit',rarity='$rarity_edit'
        WHERE id = '$id';");
        return $result;
    }

    public function delete()
    {
        $id= $_GET['delete'];
     $result =$this->databaseManager->mysqli->query("DELETE FROM cards WHERE id=$id");
    }

}
<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $name;
    private $password;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)

    public $connection;

    public $mysqli;

    public function __construct(string $host, string $name, string $password, string $database)
    {
        // TODO: Set any user and password information
        $this->host = "localhost";
        $this->name = "root";
    }

    public function connect()
    {
       /* $this->connection = mysqli_connect("localhost","root","");
        // TODO: make the connection to the database
       $this->database = mysqli_select_db($this->connection,'pokemon');


        if($this->database){
           echo "connection";
       }*/
        $this->mysqli= new mysqli('localhost', 'root',  '','pokemon') ;

    }


    public function closeConnection()
    {
        return $this->connection -> close();;
    }
}
<?php

namespace App;

 class Database
 {

     protected $servername = "mariadb";
     protected $username = "root";
     protected $password = "123";

     public function __construct()
     {
         $conn = new mysqli($this->servername, $this->username, $this->password);
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
         echo "Connected successfully";
//         $db = pg_connect("host=some-postgres dbname=postgres user=postgres password=123");
//         if($db){
//             echo "Connected\n";
//         } else {
//             echo 'Could not connect: ' . pg_last_error();
//         }


     }

     public static function __callStatic($name, $arg)
     {
         if($name == 'all'){
             echo "posts has getted";
         }
     }


 }
 $connect = new Database;
 echo $connect::all();

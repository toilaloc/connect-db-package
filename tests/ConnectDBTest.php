<?php

namespace Tests;


use PHPUnit\Framework\TestCase;
use App\Database;
class ConnectDBTest extends TestCase
{
    public $success = true;
    
         public function testConnectPostgresql()
         {
            $db = pg_connect("host=some-postgres dbname=postgres user=postgres password=123");
            if($db){
                $this->assertTrue($this->success);
                echo "Connected\n";
            } else {
                echo 'Could not connect: ' . pg_last_error();
            }
           
         }

         public function testConnectMysql()
         {
             $conn = mysqli_connect("mariadb","root","123");
             if (!mysqli_connect_errno()) {
                $this->assertTrue($this->success);
              }else {
                  echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
              } 
         }
}
<?php
namespace rezaul\karim;
class connection{
    public function dbConnection(){
        $hostName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "institute";
        
        $link = mysqli_connect($hostName,$userName,$password,$dbName);
        return $link;
    }
}
?>
<?php
namespace MB\Classes\Controller;

class Database
{

    public function connectDatabase()
    {

        define('MYSQL_HOST', 'localhost');
        define('MYSQL_USER', 'root');
        define('MYSQL_PASSWORD', '');
        define('MYSQL_DB', 'cloud');


// Create connection
        $conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

// Create database
        $sql = "CREATE DATABASE cloud";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {

        }


        $sql = "
        CREATE TABLE cloud(
        id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(150) NOT NULL,
         passwort VARCHAR (150) NOT NULL,
         directory VARCHAR (150)NOT NULL
        )ENGINE = MYISAM
        ";
        $db_erg = mysqli_query($conn, $sql);
            }



} 
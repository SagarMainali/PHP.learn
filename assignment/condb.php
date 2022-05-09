<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "studentdata";

//establish connection
$conn = mysqli_connect($host, $user, $pass, $dbname);

//check connection
if(!$conn){
    die(mysqli_connect_error());
}
      
/*SQL to create table
$sql = "CREATE TABLE student ( 
    id INT(11) NOT NULL AUTO_INCREMENT , 
    name VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL, 
    subject1 DECIMAL(6,2) NULL DEFAULT NULL, 
    subject2 DECIMAL(6,2) NULL DEFAULT NULL, 
    subject3 DECIMAL(6,2) NULL DEFAULT NULL, 
    PRIMARY KEY (`id`)) ENGINE = InnoDB";

if (mysqli_query($conn, $sql)) {
    echo "Table student created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
*/

?>
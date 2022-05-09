<?php
    
    $name = $_POST['fullname'];
    $phone = $_POST['phonenumber'];


    echo "Name : $name Phone : $phone";

    include 'dbconn.php';
    $sql = "INSERT INTO formdata (name, phone) VALUES('$name','$phone')";
    $result = mysqli_query($conn, $sql);
            
    if($result){
        header('Location: form.php');
    }
   
?>  

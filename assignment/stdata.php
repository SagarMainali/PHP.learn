<?php

    $stname = $_POST['stname'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];

    include 'condb.php';

    $sql = "INSERT INTO student(name, subject1, subject2, subject3) VALUES('$stname','$sub1', '$sub2', '$sub3')";
    $result = mysqli_query($conn, $sql);
            
    if($result){
        header('Location: stmarks.php');
    }

?>
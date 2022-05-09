<?php
$marks = $_POST['percentage'];

if ($marks < "50"){
echo "Result obtained:<br>";
echo "FAIL";
}
else if ($marks >= 50 && $marks < 60 ){
    echo "Result obtained:<br>";
    echo "SECOND DIVISION"; 
}
else if ($marks >= 60 && $marks < 70 ){
    echo "Result obtained:<br>";
    echo "FIRST DIVISION"; 
}
else if ($marks >= 70 && $marks < 101 ){
    echo "Result obtained:<br>";
    echo "DISTINCION"; 
}
else{
    echo "Marks cannot be higher than 100.";
}

?>
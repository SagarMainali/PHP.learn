<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Form</title>
    <style>
        h1 {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
    <h1>Fill out the form:</h1>
    <form action="datainsert.php" method="post">
        <label>Name:</label>
        <input type="text" name="fullname" required><br><br>
        <label>Phone:</label>
        <input type="number" name="phonenumber" required><br><br>
        <input type="submit" value="SEND">
        <input type="reset" value="RESET">
    </form>
    <hr>

</body>

</html>
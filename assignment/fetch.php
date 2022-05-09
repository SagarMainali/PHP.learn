<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB_Fetch</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    table, tr, th, td{
        border: 2px solid black;
        border-collapse: collapse;
        padding: 20px;
    }
    </style>
</head>

<body>
    <fieldset>
        <h1><b>student report card</b></h1>
        <table>
            <tr>
                <th><b>Name</b></th>
                <th colspan="3"><b>Subjects</b></th>
                <th><b>Average Mark</b></th>
            </tr>

            <?php
            include 'condb.php';
            $sql = "SELECT * FROM student";
            $result = mysqli_query($conn, $sql);
            function average(){
                $rows = $GLOBALS['row'];
                $GLOBALS['av'] = ($rows['subject1']+$rows['subject2']+$rows['subject3'])/3;
            }

            if($result){
                while($row = mysqli_fetch_assoc($result)){
                $name = $row['name'];
                $mrk1 = $row['subject1'];
                $mrk2 = $row['subject2'];
                $mrk3 = $row['subject3']; 
                average();

            ?>
            

            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $mrk1 ?></td>
                <td><?php echo $mrk2 ?></td>
                <td><?php echo $mrk3 ?></td>
                <td><?php echo $av ?></td>
                
            </tr>

            <?php
                }
            }
            ?>
        </table>
    </fieldset>
</body>

</html>
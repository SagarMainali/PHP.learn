<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    </style>
</head>

<body>
    <fieldset>
        <fieldset>
            <legend><b>Enter the student details</b></legend>
            <form action="stdata.php" method="post">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="stname"></td>
                    </tr>
                    <td>Marks obtained</td>
                    <td><input type="number" step="any" name="sub1" placeholder="subject1"></td>
                    <td><input type="number" step="any" name="sub2" placeholder="subject2"></td>
                    <td><input type="number" step="any" name="sub3" placeholder="subject3"></td>
                    </tr>
                    <tr>
                        <td><input type="submit"></td>
                    </tr>
                </table>
        </fieldset>
    </fieldset>
    </form>

</body>

</html>
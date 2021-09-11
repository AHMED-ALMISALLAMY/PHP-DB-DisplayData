<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
</head>
<body>
    <?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = '...'; // database name
    $connect = mysqli_connect($host , $user , $pass , $db); // connect to database
    $getData = mysqli_query($connect , 'select * from ...');
    ?>

    <form method="$_POST">
        <center>
            <table border="1" style="border: none; border-color: aqua;">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Address</td>
                </tr>
                <?php 
                    while ($row = mysqli_fetch_array($getData)) { // Display data from database
                        echo '<tr>';
                        echo '<td>'.$row['id'].'</td>'; // display id
                        echo '<td>'.$row['name'].'</td>'; // display name
                        echo '<td>'.$row['address'].'</td>'; // display address
                        echo '</tr>';
                    }
                ?>
            </table>
        </center>
    </form>
</body>
</html>
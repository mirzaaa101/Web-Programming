<?php
include('index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <style>
        th,td {
            padding: 10px 10px 10px 10px;
        }
    </style>
</head>

<body>
    <center style="margin-top: 20px;">
        <table style="border: 1px solid black;">
            <th>SL</th>
            <th>Name</th>
            <th>ID</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Location</th>
            <th>Role</th>
            <?php
                $sql = "SELECT * FROM member_info";
                $result = mysqli_query($conn, $sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        echo '
                        <tr>
                            <td>'.$row["sl"].'</td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["phone"].'</td>
                            <td>'.$row["location"].'</td>
                            <td>'.$row["role"].'</td>
                        </tr>
                        ';
                    }
                }
            ?>
        </table>
    </center>
</body>

</html>
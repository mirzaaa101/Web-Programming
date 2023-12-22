<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <center style="margin-top: 5%;">
        <button><a href="create.php">Create</a></button>
        <button><a href="read.php">Read</a></button>
        <button><a href="update.php">Update</a></button>
        <button><a href="delete.php">Delete</a></button>
    </center>
</body>
</html>
<?php
    $conn = mysqli_connect('localhost','mirza','mirza','fydp');
    if(!$conn){
        echo "Not Connected!";
    }
?>
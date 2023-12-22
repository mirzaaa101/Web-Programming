<?php
    include('index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <center style="margin-top: 10%;">
    <form action="" method="POST">
        <input type="text" name="sl" placeholder="Enter SL to delete"><br>
        <input type="submit" value="Go" name="submit">
    </form>
    </center>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $sl = $_POST['sl'];
        $sql = "DELETE FROM `member_info` WHERE `sl`=$sl";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Data Deleted Successfully!";
            header('location:read.php');
        }
    }
?>
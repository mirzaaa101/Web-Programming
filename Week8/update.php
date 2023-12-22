<?php
    include('index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
    .required-input::placeholder{
        content: " *";
        color: red;
    }
    </style>
</head>
<body>
    <center style="margin-top: 5%;">
            <form action="" method="POST">
                <input type="text" name="sl" placeholder="*SL" required class="required-input"><br>
                <input type="email" name="email" placeholder="*Email" required class="required-input"><br>
                <input type="text" name="phone" placeholder="*Phone" required class="required-input"><br>
                <input type="text" name="location" placeholder="*Location" required class="required-input"><br>
                <input type="text" name="role" placeholder="*Role" required class="required-input"><br>
                <input type="submit" value="Submit" name="submit">
            </form>
    </center>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $sl = $_POST['sl'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $role = $_POST['role'];

        $sql = "UPDATE `member_info` SET `email`='$email',`phone`='$phone',
                `location`='$location',`role`='$role' WHERE sl=$sl";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Data Updated Successfully!";
            header('location:read.php');
        }
    }
?>
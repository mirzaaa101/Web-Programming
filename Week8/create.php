<?php
    include('index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <center style="margin-top: 5%;">
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="id" placeholder="ID" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="text" name="phone" placeholder="Phone" required><br>
            <input type="text" name="location" placeholder="Location" required><br>
            <input type="text" name="role" placeholder="Role" required><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </center>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $location = $_POST['location'];
        $role = $_POST['role'];

        $sql = "INSERT INTO `member_info`(`name`, `id`, `email`, `phone`, `location`, `role`)
                VALUES ('$name','$id','$email','$phone','$location','$role')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Data Inserted Successfully!";
            header('location:read.php');
        }
    }
?>
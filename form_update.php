<?php
include_once('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM f1 WHERE id='$id'";


$data = mysqli_query($connection,$sql);

$row = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fname" value="<?php echo $row['fname']; ?>">
        <input type="text" name="lname" value="<?php echo $row['lname']; ?>">
        <input type="text" name="email" value="<?php echo $row['email']; ?>">
        <input type="text" name="phone" value="<?php echo $row['phone']; ?>">
        <input type="text" name="age" value="<?php echo $row['age']; ?>">
        <input type="text" name="uaddress" value="<?php echo $row['uaddress']; ?>">
        <input type="submit" name="update">
    </form>

    <?php
    if(isset($_POST['update'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $uaddress = $_POST['uaddress'];

        $sql2 = "UPDATE f1 SET fname='$fname',lname='$lname',email='$email',phone='$phone',age='$age',uaddress='$uaddress',age='$age' WHERE id='$id'";

        $result = mysqli_query($connection,$sql2);

        if($result){
            echo "data udated";
            header('location:form_list.php');

        }else{
            echo "try again";
        }

        
        
    }

    ?>
    
</body>
</html>
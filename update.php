<?php
include_once('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM new_form WHERE id='$id'";


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
        <label for="">name</label><br>
        <input type="text" name="uname" value="<?php echo $row['uname']; ?>"><br><br>
        <label for="">email</label><br>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        <label for="">subject</label><br>
        <input type="text" name="subject" value="<?php echo $row['subject']; ?>"><br><br>
        <label for="">message</label><br>
        <input type="text" name="message" value="<?php echo $row['message']; ?>"><br><br>
        <input type="submit" name="update">
    </form>

    <?php
    if(isset($_POST['update'])){
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql2 = "UPDATE wordpress SET uname='$uname',email='$email', subject ='$subject, message='$message' WHERE id='$id'";

        $result = mysqli_query($connection,$sql2);

        if($result){
            echo "data updated";
            header('location:list.php');

        }else{
            echo "try again";
        }

        
        
    }

    ?>
    
</body>
</html>
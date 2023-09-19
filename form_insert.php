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
        <label for="">Firstname</label>
        <input type="text" name="fname"><br><br>
        <label for="">Lastname</label>
        <input type="text" name="lname"><br><br>
        <label for="">Email</label>
        <input type="email" name="email"><br><br>
        <label for="">Phone</label>
        <input type="number" name="phone"><br><br>
        <label for="">Age</label>
        <input type="text" name="age"><br><br>
        <label for="">Address</label>
        <input type="text" name="uaddress"><br><br>
        <input type="submit" name="btn">

    </form>

    <?php
    include_once("connection.php");
    if(isset($_POST['btn']))
    {
        $fname= $_POST['fname'];
        $lname= $_POST['lname'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $age= $_POST['age'];
        $address= $_POST['uaddress'];

        $sql="INSERT INTO f1(fname,lname,email,phone,age,uaddress) VALUES ('$fname','$lname','$email','$phone','$age','$address')";

        $data=mysqli_query($connection,$sql);

        if($data){
            echo'data inserted successfully';

        }else{
            echo 'not inserted';
        }
    }

?>









</body>
</html>
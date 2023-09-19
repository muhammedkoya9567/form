<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table_list.css">
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <label for="">name</label><br>
    <input type="text" name="uname"><br><br>
    <label for="">age</label><br>
    <input type="text" name="age"><br><br>
    <label for="">Address</label><br>
    <input type="text" name="s_address"><br><br>
    <input type="file" name="img"><br><br>
    <input type="submit" name="ok">
</form>

<?php
include_once('connection.php');
if(isset($_POST['ok'])){
    $img_name=$_FILES['img']['name'];
    $img_tmp_name=$_FILES['img']['tmp_name'];
    $uname = $_POST['uname'];
    $age= $_POST['age'];
    $uaddress=$_POST['s_address'];

    $sql = "INSERT INTO new_form(uname,age,s_address,img)VALUES('$uname','$age','$uaddress','$img_name')";

    $data = mysqli_query($connection,$sql);

    if($data){
        move_uploaded_file($img_tmp_name,$img_name);
    }

    if($data){
        echo "data inserted";
        header("location:table_list.php");
    }else{
        echo "not inserted";
    } 
}
?>

    
</body>
</html>
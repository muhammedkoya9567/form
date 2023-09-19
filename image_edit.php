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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
  
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    
    <img src="<?php echo $row['img'] ?>" alt="" width="100px"><br>

    <input type="file" name="img" value="<?php echo $row['img'] ?>"><br>
        

    <input type="submit" value="update" name="update">

    </form>

    <?php
    if(isset($_POST['update'])){
        $img_name = $_FILES['img']['name'];
        $img_tmp_name = $_FILES['img']['tmp_name'];
       
        
        

        $sql2 = "UPDATE new_form SET img='$img_name' WHERE id='$id'";
        $result=mysqli_query($connection,$sql2);
        if($result){
            move_uploaded_file($img_tmp_name,$img_name);
        }
        if($result){
            echo"success";
            header("location: table_list.php");

        }else{
            die("could not updated");
        }
        
    }
    ?>
</body>
</html>
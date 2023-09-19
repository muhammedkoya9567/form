<?php
include_once('connection.php');

$id=$_GET['id'];

$sql="DELETE FROM f1 WHERE id='$id'";

$data=mysqli_query($connection,$sql);

if($data){
    ?>

    <script type="text/javascript">
        alert("data deleted successfully")
        window.open("localhost/php/new/form_list.php");
    </script>
    <?php
}
    else{
        ?>
        <script type="text/javascript">
            alert("please try again");
        </script>
        <?php
    }
?>
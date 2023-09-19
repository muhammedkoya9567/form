<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <center>
    <?php
    include_once('connection.php');

    $sql="select * from f1";

    $data=mysqli_query($connection,$sql);

    $total=mysqli_num_rows($data);

    if($total){
        ?>
        <table border="2">
            <tr>
                
                <th>
                    id
                </th>
                <th>
                    fname
                </th>
                <th>
                    lname
                </th>
                <th>
                    email
                </th>
                <th>
                    phone
                </th>
                <th>
                    age
                </th>
                <th>
                    address
                </th>
                <th colspan="2">Actions
                    
                </th>
            </tr>
        

        <?php
        while($result = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td>
                        <?php echo $result['id'];?>
                    </td>
                    <td>
                        <?php echo $result['fname'];?>
                    </td>
                    <td>
                        <?php echo $result['lname'];?>
                    </td>
                    <td>
                        <?php echo $result['email'];?>
                    </td>
                    <td>
                        <?php echo $result['phone'];?>
                    </td>
                    <td>
                        <?php echo $result['age'];?>
                    </td>
                    <td>
                        <?php echo $result['uaddress'];?>
                    </td>
                    <td>
                        <a href="form_update.php?id=<?php echo $result['id']; ?>">EDIT</a>
                        <a href="form_delete.php?id=<?php echo $result['id']; ?>">DELETE</a>
                    </td>

                </tr>
                <?php

            }
    
    }else{
        echo "no records found";
    }
    ?>

</center>
</body>
</html>

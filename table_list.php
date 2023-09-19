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
    <center>
    <?php
    include_once('connection.php'); 
    
    $sql = "SELECT * FROM new_form";

    $data = mysqli_query($connection,$sql);

    $total = mysqli_num_rows($data);

    if($total){
        ?>
        <table border="2">
            <tr>
                <th>
                    id
                </th>
                <th>
                    name
                </th>
                <th>
                    age
                </th>
                <th>
                    address
                </th>
                <th colspan="2">options

                </th>
                <th>
                    image
                </th>
                <th>
                    Edit
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
                        <?php echo $result['uname'];?>
                    </td>
                    <td>
                        <?php echo $result['age'];?>
                    </td>
                    <td>
                        <?php echo $result['s_address'];?>
                    </td>
                    <td>
                        <a id="edit" href="update.php?id=<?php echo $result['id']; ?>">EDIT</a>
                        
                    </td>
                    <td>
                    <a  id="delete" href="delete.php?id=<?php echo $result['id']; ?>">DELETE</a>
                    </td>
                    <td>
                       <img src=" <?php echo $result['img'];?>" alt="" srcset="" width="100px">
                    </td>
                    <td>
                    <a  id="edit" href="image_edit.php?id=<?php echo $result['id']; ?>">EDIT</a>
                        
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
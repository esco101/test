<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <!-- <button class="btn">Add</button> -->


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">age</th>
                    <th scope="col">operations</th>
                </tr>
            </thead>
        <?php
            $sql="select * from users";
            $results=mysqli_query($con,$sql);

            if($results){
                while($row=mysqli_fetch_assoc($results)){
                    $name=$row['name'];
                    $age=$row['age'];

                    echo '<tr>
                    <td>'.$name.'</td>
                    <td>'.$age.'</td>
                    <td>
                    <button class="btn btn-primary">update</button>
                    <button class="btn btn-danger">delete</button>
                    </td>
                    </tr>
                    ';
                }
            }

        ?>


        </table>
    </div>




<!-- <style>
    .btn{
        color:wheat;
        background-color: black;
        border: none;
        border-radius: 5px;
        padding: 5px 12px;
    }

    table{
        border: 1px solid black;
    }
</style> -->
</body>
</html>


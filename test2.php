<?php

include 'connection.php';

?>

<html>
<head>

</head>
    <body>
        <form method="POST" action="test2.php">
            <label for="name">name</label>
            <input type="text" name="first_name" required><br>
            <label for="age">age</label>
            <input type="number" name="age" required><br>
            <!-- <label for="sex">sex</label>
            <input type="text" name="sex" required><br>
            <label for="usertype">usertype</label>
            <input type="text" name="usertype" required><br> -->
            <input type="submit" name="submit" value="submit">
        </form>
    </body>

</html>

<?php


if(isset($_POST['submit'])){
    $fname = $_POST['first_name'];
    $age  =$_POST['age'];

    // $sql="INSERT INTO `users`(`name`,`age`) VALUES('$fname','$age')";
    $sql="insert into `users`(name, age) values('$fname','$age')";

    echo $sql;
    $results=mysqli_query($con,$sql);

    if($results){
        echo "data inserted successfully";
        header('location:test3.php');
    }else{
        die(mysqli_error($con));


    }

}



?>

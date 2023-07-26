<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script src="test.js"></script>
    <style>
        h1 {
            text-transform: capitalize;
            color: gray;

        }
    </style>

    <form action="test.php" method="post">
        <!-- hash:<input type="text" name="username"><br> -->
        <!-- <input type="submit" value="click" name="click"> -->
    </form></label>


    <form action="test.php" method="post">
        <!-- <input type="text" name="enter">
        <input type="submit"> -->
        num1<input type="number" name="int1"><br>
        operation<input type="text" name="sign"><br>
        num2<input type="number" name="int2"><br>
        <input type="submit" name="submit" value="ans">

    </form>
    <?php

    if($_POST['']){
        switch ($_POST['ans']) {
            case '+':
                $result = $_POST['num1'] +$_POST['num2'];
                echo $result;
        }
    }


    // if($_POST["username"]!=12){
    //     echo "<h1>that's not it</h1>";
    // }else{
    //     echo "<h1>that's it</h1>";
    // }

    // if(empty($_POST['username'])){
    //     echo "there is no variable set";
    // }else{
    //     echo "variable is set";
    // }


    // $pass=$_POST['username'];

    // $pass="1234";
    // $hash=password_hash($pass,PASSWORD_DEFAULT);
    // echo $hash ."<br>";

    // if (password_verify("1234",$hash)){
    //     echo "correct password";
    // }else{
    //     echo" incorrect password";
    // }




    // $fruits = array(['mango', 'banana', 'oranges']);

    // print_r($fruits[0]);
    // echo "<br>";
    // $saying= "i am the best programmer that will ever exist";
        // echo $saying;
    // $i=0;
    // for($i;$i<=10;$i++){
        // echo "$i".'<br>';
    // }

    //   if($_POST["enter"]!='end'){
    //     echo "thats not it";
    //   }else{
    //     echo "thats it";
    //   }
    ?>


</body>

</html>

<?php
$insert = false;
if(isset($_POST['name'])){

$server = "localhost";
$name = "root";
$password = "";


$mysql = mysqli_connect($server,$name,$password);
if (!$mysql){
    die("you are wrong".mysqli_connect_error());
}


$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];


$forms = "INSERT INTO `school`.`forms`(`name`, `email`, `gender`, `age`, `phone`, `DES`) VALUES ('$name','$email','$gender','$age','$phone','$desc')";
// echo $forms;

if($mysql->query($forms) == true){
 $insert = true;
}
else{
    echo  $mysql->error;
}
$mysql->close();
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>REGISTRATION FORM</h1>
        <h2>Enter your details submit the form to participation in the picnic</h2>
       <?php
       if($insert == true){
         echo "<p class='paragraph'>thanks for participation</p>";
       }
       ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="write down in our name">
            <input type="email" name="email" id="email" placeholder="write down in our email">
            <input type="text" name="gender" id="gender" placeholder="write down in our gender">
            <input type="text" name="age" id="age" placeholder="write down in our age">
            <input type="phone" name="phone" id="phone" placeholder="write down in our number">
        <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        <button class="btn">submit</button>
        </form>
    </div>
</body>
</html>





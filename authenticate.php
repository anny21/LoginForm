<?php
include('connect.php');
// $authUsers = '{
//     "users":[
//         {
//             "email":"honyinye3@gmail.com",
//             "password":"ndggf"
//         },
//         {
//             "email":"honyinye2@gmail.com",
//             "password":"jondhd"
//         },
//         {
//             "email":"calebolojo@gmail.com",
//             "password":"Caleb007"
//         }
//     ]
// }';

// $json = json_decode($authUsers);

if(isset($_POST['signup'])){

$name = $_POST['email'];
$password = $_POST['password'];
$fullName = $_POST['fullName'];
$confirm_password = $_POST['confirm_password'];

if(empty($name) || empty($password) || empty($confirm_password) || empty($fullName)){
    header("Location: signup.php?error=OOps!!! i think one or more of your fields are empty");
    exit();
}elseif($confirm_password != $password){
    header("Location: signup.php?error=password doesnt match");
    exit();
    }else{
//     foreach($json->users as $item){
//         if($item->email == $name && $item->password == $password){
//            // $var_dump($item);
//         session_start();
//     $_SESSION['name'] = $name;
//     header("Location: ./index.php");
//     exit(); 
//     }else{
//         header("Location: ./index.php?error=Email or Password doesn't exist");
//     }
    
// }
$sql = "INSERT INTO users(email, password, confirm_password, fullName) VALUES ('$name', '$password', '$confirm_password', '$fullName')";

if (mysqli_query($conn, $sql)) {
    header("Location: ./index.php?success=You have succesfullfull created your account, please log in");
 } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
 }
}
}

if(isset($_POST['signin'])){
    $name = $_POST['email'];
$password = $_POST['password'];


if(empty($name) || empty($password) ){
    header("Location: index.php?error=email field or password field is empty");
}else{
  $sql =  "SELECT * FROM users WHERE email = '$name' and password = '$password'";

  $result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
    session_start();
$_SESSION['name'] = $name; // Initializing Session
header("location: home.php?success=you are logged in");
}else{
    header("location: index.php?error=invalid email or password");
}
}
}


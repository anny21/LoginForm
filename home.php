<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="logout.php" method="post">
<input type="submit" name="logout" value="Logout">
</form>

<?php
// echo session_status();
if(count($_SESSION)< 1){
    header("Location: index.php");
    exit();
}
 echo 'welcome ' . $_SESSION['name']; ?>
</body>
</html>

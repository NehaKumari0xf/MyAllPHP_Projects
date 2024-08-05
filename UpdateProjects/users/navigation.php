<?php
session_start();
if(!isset($_SESSION['uid']))
header("location:signin.php");
?>

<nav>
    <ul>
        <li>
            <a href="changePassword.php">password</a>
        </li>
        <li>
            <a href="signin.php">login</a>
        </li>
        <li>
            <a href="logout.php">logout</a>
        </li>
    </ul>
</nav>
<!doctype html>
<html>
<head>
<title>Ricla Home</title>
</head>
<body>
<h1>Welcome <?= $_SESSION['uid'] ?> (<?php 
if($_SESSION['gender']=='m')
{
    echo "Mr. ";
}
else 
{
    echo "Miss ";
}
echo $_SESSION['uname'];
?>)</h1>
</body>
</html>
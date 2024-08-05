<!doctype html>
<html>
<head>
<title>Ricla Home</title>
</head>
<body>
    <?php include 'navigation.php' ?>;
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
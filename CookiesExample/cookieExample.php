<?php
   $accessCount=1;
   if (isset($_COOKIE['counter'])) {
    $accessCount=intval($_COOKIE['counter']);
    $accessCount++;
    setcookie("counter", $accessCount."", time()+(86400*30));
   } else {
    $accessCount=1;
    setcookie("counter",$accessCount."",time()+(86400*30));
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
</head>
<body>
    <h1>Page Access count:<?=$accessCount?></h1>
</body>
</html>
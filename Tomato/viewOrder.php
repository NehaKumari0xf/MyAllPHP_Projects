<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>View oder details</title>

</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
          <?php include 'navigation.php';?>     
          </div>
        </div><hr><br/>

        <div class="row">
            <div class="col-sm-12">
          <?php include 'bootstrap.php';?>     
          </div>
        </div>
    
<div class="container-fluid">
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
            <h1>All Customers Details</h1><br>
    <?php
    /* create connection*/
    $conn=new PDO("mysql:host=localhost;dbname=ricla;","root","");

    /*preapre statement*/
    $stmt=$conn->prepare("select * from tomato");
    
    //Execute statement
    $stmt->execute();

    //Fetch record
    $tomatos=$stmt->fetchAll();
  ?>
  <table class="table table-striped" >
    <?php
    foreach($tomatos as $tomato )
    {
        echo "<tr><td>".$tomato['id'].'</td><td>'.$tomato['name']."</td><td>".'</td><td>'.$tomato['quantity']."</td><td>".$tomato['contactnumber'].'</td><td>'.$tomato['email']."</td><td>".$tomato['address']."</td><td>".$tomato['pay']."</td><td>"."</td></tr>";
    }
    ?>

</table>
            </div>
        </div>
    </div>
    

</body>
</html>
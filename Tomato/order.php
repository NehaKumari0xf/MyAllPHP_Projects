<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Order Confirmed</title>
    
    <style>
        img{
            height: auto; width: 450px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php include 'bootstrap.php';?>     
            </div>
        </div>
    

        <div class="row">
            <div class="col-sm-12">
                <?php include 'navigation.php';?>     
            </div>
        </div>
    

    <div class="container-fluid">
        
</div>

<div class="row">
            <div class="col-sm-12">
            <?php

try{
    /* 1. Create connection*/
    $conn=new PDO(dsn: "mysql:host=localhost;dbname=ricla",username: "root",password: "");
    $conn->setAttribute(attribute: PDO::ATTR_ERRMODE,value: PDO::ERRMODE_EXCEPTION);

    /* 2. Create prepare statement*/
    $stmt=$conn->prepare(query: "insert into tomato(name,quantity,contactnumber,email,address,pay) values(:name,:quantity,:contactnumber,:email,:address,:pay)");

    /*3. Bind values to statement*/
   
    $stmt->bindValue(param: ':name',value: $_GET['name']);
    $stmt->bindValue(param: ':quantity',value: $_GET['quantity']);
    $stmt->bindValue(param: ':contactnumber',value: $_GET['contactnumber']);
    $stmt->bindValue(param: ':email',value: $_GET['email']);
    $stmt->bindValue(param: ':address',value: $_GET['address']);
    $stmt->bindValue(param: ':pay',value: $_GET['pay']);
   


    /*4. Execute statement*/
    $stmt->execute();

    echo "<img src='images/ok.jpg'><h1> Your Order Confirmed </h1>";
}
catch(Exception $ex)
{
    echo "<h1 >". $ex->getMessage()."</h1>";
}

?>
    <a href="home.php"><button>Add Another Order</button></a>
    <a href="viewOrder.php"><button>View Your Order Details</button></a>
    <a href="dlete.php"><button>Cancel Your Order </button></a>
    <a href="update.php"><button>Update Your Order </button></a>

</div>
</div>
</div>
    
</body>
</html>



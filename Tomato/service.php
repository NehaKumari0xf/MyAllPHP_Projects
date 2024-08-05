<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaya College Gaya</title>
    
    <style>
        img{
            height: auto;
            width:350px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <?php include 'navigation.php';?>      
          </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
            <?php include 'bootstrap.php';?>      
          </div>
        </div>
    </div>
        
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php
                if (isset($_GET['name'])) {
                    try {
                        /* 1. Create connection*/
                        $conn = new PDO("mysql:host=localhost;dbname=ricla", "root", "");
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        /* 2. Create prepare statement*/
                        $stmt = $conn->prepare("insert into tomato(name,quantity,contactnumber,email,address,pay) values(:name,:quantity,:contactnumber,:email,:address,:pay)");

                        /*3. Bind values to statement*/

                        $stmt->bindValue(':name', $_GET['name']);
                        $stmt->bindValue(':quantity', $_GET['quantity']);
                        $stmt->bindValue(':contactnumber', $_GET['contactnumber']);
                        $stmt->bindValue(':email', $_GET['email']);
                        $stmt->bindValue(':address', $_GET['address']);
                        $stmt->bindValue(':pay', $_GET['pay']);



                        /*4. Execute statement*/
                        $stmt->execute();

                        echo "<img src='images/ok.jpg'><h1> Your Order Confirmed </h1>";
                    } catch (Exception $ex) {
                        echo "<h1 >" . $ex->getMessage() . "</h1>";
                    }
                }

            ?>
        


        </div>
    </div>


    <div class="row  my-5">
        <div class="col-sm-5 img text-center">
            <img src="images/order.png">   
        </div>

            <div class="col-sm-7 text-left">
                <h1 >Order your favourite food</h1>
                <div class="py-5">
                <form action="orderDetails.php" method="post">
                <label>Name: </label>     
                    <input type="text" id="name" required name="name" placeholder="Enter your name"/><br/>
                <label>Quantity: </label>     
                    <input type="text" id="quantity"required  name="quantity" placeholder="Enter your quantity"/><br/>
                <label>Phone number: </label>
                    <input type="text" id="contactnumber" required name="contactnumber"placeholder="Enter your phone number"/><br/>               
                <label>Email: </label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email"/><br/>
                <label>Address: </label>   
                    <input type="text" id="address" required name="address" placeholder="Enter your address"/><br/>
                    <div><tr><td>
                <label>Payment Method: </label>
                    <select id="pay" name="pay">
                            <option value="Cash on deleviry">Cash on deleviry</option>
                            <option value="wallet">Wallet</option>
                            <option value="UPI">UPI</option>
                            <option value="Coupons">Coupons</option>
                        </select>
                <div>
                    <br/><tr><td><input type="reset" value=" Cancel " class="btn btn-outline-danger"/></td><td><input class="btn btn-outline-success"  type="Submit" value="Confirmed"/></td></tr>
                </div>
                </form>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tomato</title>

</head>
<style>
    
img{
    max-width: 100%;
    width: 400px;
   height: auto;
}
</style>
<body >
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
          <?php include 'navigation.php';?>     
          </div>
        </div><hr/>

        <div class="row">
            <div class="col-sm-12">
          <?php include 'bootstrap.php';?>     
          </div>
        </div><hr/>
    
<form action="order.php" method="get">
    <div class="container-fluid ">
        <div class="row ">
        <div class="col-sm-5 text-center">
            <img src="images/order.png">   
</div>
            <div class="col-sm-7 text-left">
                <h1 >Order your favourite food</h1>
                <div class="py-5">
                <form action="home.php" method="get">
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
</form>
</body>
</html>


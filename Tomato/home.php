<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomato</title>
    <style>
  body{
    background:  #ff702a;
    color: #fff;
    overflow-x: hidden;
  }  
img{
    max-width: 100%;
    width: 460px;
   height: auto;
}
.box:hover{
    transform: scale(1.02)translateY(10px);
    transition: .4s; 
}
.s-img{
    max-width: 100%;
    width: 100px;
   height: auto;
   text-align: center;
}
.s-img:hover{
    transform: scale(1.2) translateY(10px);
    transition: .4s;
}
.btn:hover{
    transform: scale(1.2) translateY(10px);
    transition: .4s;
}
.col ul li {
    color: white;
    font-size: 1.2rem;
}
i{
    font-size: 40px;}
    
.col a{
    color:grey;}

.col a:hover{
    color: grey;}

.social{
    display:inline-flex;
}
.social .bx{
    margin:0.20px;
    height: 40px;
    width:40px;
    box-shadow: 0 2.5px 2.5px;
}
.social :hover{
    transform: scale(1.2);}

</style>

</head>

<body>
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
        </div>
    
<!--Home start-->
    <section>
       <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 text-center py-5 my-5">
                <h1>Welcome</h1>
                <h3 class="py-5">Food the <br> most precious things</h3>
                <a href="#" class="btn  btn-outline-success">Today's Menu</a>
            </div>
            <div class=" box col-sm-7 text-center">
                <img src="images/home.png">
            </div>
       </div>
    </section>

    <section class="my-5 " id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="box col-lg-6 col-md-6 col-12 ">
                    <img  src="images/about.png">
                </div>
        
                <div class="col-lg-6 col-md-6 col-12 py-5">
                    <h5 >About us</h5>
                    <h2 >We speak the good <br> food language</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis quasi magni nesciunt dolor rerum corrupti tenetur sunt in ut ab deserunt autem ex explicabo ipsa accusantium minima, dicta expedita provident!</p>
                    <a href="#" class="btn btn-outline-success">Learn more</a>
                </div>        
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h5>Today's hot menu</h5>
                    <h2>Fresh taste and great price</h2>
                </div>
            </div>
        </div>
    </section>

    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class=" box text-center ">
                <img src="images/food1.png">

                <div class="text-center ">
                    <h2>Chicken Burger</h2>
                    <h3>Tasty food</h3>
                    <h5><a href="userinfo.php" class="text-success ">$11.00</a></h5>
                    <i class='bx bx-cart-alt '></i>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="box text-center ">
                <img src="images/food2.png">
                
                <div class="text-center ">
                    <h2>Special Beef Burger</h2>
                    <h3>Tasty food</h3>
                    <h5 ><a href="userinfo.php" class="text-success ">$11.00</a></h5>
                    <i class='bx bx-cart-alt'></i>
                </div>
            </div>
        </div>
        
        <div class="carousel-item ">
            <div class="box    text-center ">
                <img src="images/food3.png">
                    
                <div class="text-center ">
                    <h2>Chicken Fry Pack</h2>
                    <h3>Tasty food</h3>
                    <h5 ><a href="userinfo.php" class="text-success">$11.00</a></h5>
                    <i class='bx bx-cart-alt'></i>
                </div>
            </div>
        </div>
    </div>
        <a class="carousel-control-prev " href="#carouselExampleIndicators"  data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" ></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators"  data-slide="next">
          <span class="carousel-control-next-icon bg-dark"></span>
        </a>
    </div>
    </div>    

    <section class="my-5 ">
        <div class="container-fluid ">
            <div class="row ">
                <div class="text-center col-sm-12">
                    <h5>Services</h5>
                    <h2>We provide best quality food service</h2>
                </div>

            <div class=" col-lg-4 col-md-4 col-12 text-center py-5">
                <div class="s-img">
                    <img src="images/s1.png">
                </div>
                    <h3>Order</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum exercitationem quibusdam reiciendis ea! Eaque eum ullam soluta vitae corrupti, esse aut magni ut impedit perspiciatis harum accusantium commodi sint hic.</p>
            </div>
        
            <div class=" col-lg-4 col-md-4 col-12 text-center py-5">
                <div class="s-img">
                    <img src="images/s2.png">
                </div>
                    <h3>Shipping</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum exercitationem quibusdam reiciendis ea! Eaque eum ullam soluta vitae corrupti, esse aut magni ut impedit perspiciatis harum accusantium commodi sint hic.</p>
            </div>
        
            <div class=" col-lg-4 col-md-4 col-12 text-center py-5">
                <div class="s-img">
                    <img src="images/s3.png">
                </div>
                    <h3>Delivered</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum exercitationem quibusdam reiciendis ea! Eaque eum ullam soluta vitae corrupti, esse aut magni ut impedit perspiciatis harum accusantium commodi sint hic.</p>
            </div>
            </div>
        </div>
    </section>

    <!--Call to action-->
    <section class="my-5">
        <div class="container-fluid">
            <div class="row">
                <div class=" col-sm-12 text-center">
                    <h2>We make<br> quality food everyday</h2>
                    <a href="userinfo.php" class="btn btn-outline-success">Let's Talk</a>
                </div>
            </div>
        </div>
    </section>

    <!--Footer start-->
    <section>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-2 col-md- col-12 col text-center py-5">
                    <h4 >Menu links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-12 col text-center py-5">
                    <h4 >Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-12col col text-center py-5">
                    <h4 >Information</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-12 text-center py-5">
                    <h4>Contact Us</h4>
                        <div class="social ">
                            <a class="btn btn-outline-light" href="#">facebook<i class='bx text-primary bxl-facebook'></i></a>
                            <a class="btn btn-outline-light" href="#">instagram<i class='bx text-warning bxl-instagram'></i></a>
                            <a class="btn btn-outline-light" href="#">twitter<i class='bx text-primary bxl-twitter'></i></a>
                            <a class="btn btn-outline-light" href="#">youtube<i class='bx text-danger bxl-youtube'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
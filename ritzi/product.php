 <?php
            
              session_start();
              $_SESSION["img"]='9782a9befcc4f50514dd3153e33419cc.jpg';

               ?>
  

<html>
<head>
 

<title>LOGIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        .btn{
            width:150px;
            font-family:"Cambria";
        }
        .list{
            list-style: none;
            font-family:"Cambria";
        }
        .list a{
            color:gray;
            text-decoration: none;
        }
        .list a:hover{
            color:white;
        }
        .list li h3{
            color:white;
            
        }
        .image1,.image2,.image3,.image4,.image5,.image6,.image7,.image8{
            border-radius: 20px;
            background: white;
            width:50px;
            height:50px;
            padding:12px;
            margin:20px;
            transition: all ease 0.75s;
        }
        .image1{
            margin-left:350px;
        }
        .image1:hover{
            background:linear-gradient(#3025FF,#FF007A,#FFEA00);
        }
        .image2:hover{
            background:#3250FF;
        }
        .image3:hover{
            background: #2AADFF;
        }
        .image4:hover{
            background: #3AF833;
        }
        .image5:hover{
            background:red;
        }
        .image6:hover{
            background: #4A61A6;
        }
        
        .image7:hover{
            background: #C7FA3B;
        }
        .image8:hover{
            background: #1FD7FA;
        }
        .img1,.img2,.img3,.img4{
            margin:20px;
        }
        .img1{
            margin-left: 370px;
        }
        .head{
            margin-left: 450px;
            margin-top: 50px;
            color: white;
            font-size: 25px;
            font-family: "Cambria";
        }
        .navbar-brand{
            font-size: 30px;
            font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
        }
        .form-inline{
            margin-right:10px;
        }
        .box{
            width:90%;
            height:720px;
            background: rgba(0,0,300,0.5);
            margin: 70px auto;
            padding: 50px;
            border-radius: 20px;
            
        }
        .add,.buy{
            margin:20px 0px 10px 70px;
        }
        .dress{
            width:300px;
            height:500px;
            border-radius: 20px;
        }
        .address{
            margin:0px 10px 0px 10px;
        }
        .welcome{
            color:black;
            font-family:Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, "sans-serif";
            margin:0px auto;
            font-size: 40px;
        }
        .btn a{
            text-decoration: none;
            color: White;
        }
        .register{
            margin:-38px 0px 0px 200px;
        }
        .forgot{
            margin:-35px 0px 0px 500px;
        }
        .forgot a{
            color: white;
            font-size: 20px;
        }
        .forgot a:hover{
            color:#0B3BA2;
        }
    </style>
</head>

<body>
   
        <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#060029">
              <a class="navbar-brand" href="#">RitzyAttire</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Men
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Kurta</a>
                      <a class="dropdown-item" href="#">Sherwani</a>
                      <a class="dropdown-item" href="#">Nehru Jackets</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">More Styles</a>
                    </div>
                  </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Women
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Saree</a>
                      <a class="dropdown-item" href="#">Salwar Kameez</a>
                      <a class="dropdown-item" href="#">Lehenga</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">More Styles</a>
                    </div>
                  </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Kids & baby
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">For Girls</a>
                      <a class="dropdown-item" href="#">For Boys</a>
                      
                    </div>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" size="90">
                  
                </form>
                  <div class="icon2"><a href="#"><img class="image6" src= "search_40px.png"/></a></div>
                  <div class="icon"><a href="#"><img class="image7" src="shopping_cart_40px.png"/></a>
                  </div>
                  <div class="icon1"><a href="#"><img class="image8" src="user_male_circle_filled_40px.png"/></a></div>
              </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
            <div class="media">
                <div>
              <img src="9782a9befcc4f50514dd3153e33419cc.jpg" name= "dress "class="mr-3 dress" alt="..." >
                     
                  
                 <form method="post " action="cust_orders.php">
                <div class="add">
                    <button type="submit" class="btn btn-primary "name="cart">Add To Cart</button>
                </div>
                
              </form>
                    <form action="cart.html">
                <div class="buy">
                    <button type="submit" class="btn btn-primary">Buy Now</button>
                </div>
                </form>
                </div>
              <div class="media-body">
                <h3 class="mt-0">White Sherwani</h3>
                <h4>Rs.4999</h4>
                  <ul>
                  Available offers
                    <li><b>Bank Offer</b> 10% Instant Discount on Mastercard on Fashion for First 3 Prepaid Payments<a href="#">T&C</a></li>
                    <li><b>Bank Offer</b> 5% Unlimited Cashback on Flipkart Axis Bank Credit Card<a href="#">T&C</a></li>
                    <li><b>Bank Offer</b> 10% off* with Axis Bank Buzz Credit Card<a href="#">T&C</a></li>
                    <li><b>Special Price</b> Get extra 43% off (price inclusive of discount)<a href="#">T&C</a></li>
                    
                  </ul>
                  <form class="form-inline">
                  <div class="form-group mb-2">
                    <h5>Deliver to:</h5>
                    <label for="inputAddress2" class="sr-only">pincode</label>
                    <input type="number" class="form-control address" id="inputAddress2" placeholder="Pincode">
                  </div>
                  <button type="submit" class="btn btn-primary mb-2">Check Delivery</button>
                </form>
                  <h5>Size:</h5>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">S</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">M</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                  <label class="form-check-label" for="inlineRadio3">L</label>
                </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                  <label class="form-check-label" for="inlineRadio4">XL</label>
                </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                  <label class="form-check-label" for="inlineRadio5">XXL</label>
                </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                  <label class="form-check-label" for="inlineRadio6">XXXL</label>
                </div><br/><br/>
                  <h5>Specifications</h5>
                  <ul>
                  <li><h6>General Details</h6>
                      <ul><li>Ideal For: Men</li>
                      <li>Pattern: Solid</li></ul>
                      </li>
                  <li><h6>Sherwani Details</h6>
                      <ul><li>Fabric: Polyster Viscose Blend</li></ul>
                  </li>
                <li><h6>Additional Details</h6>
                    <ul><li>Style Code: Sherwani</li></ul>
                </li>
                <li><h6>In The Box</h6>
                    <ul><li>TOP,BOTTOM</li></ul>
                </li>
                  </ul>
              </div>
            </div>
            </div>
                
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron jumbotron-fluid " style="background-color:#060029">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <ul class="list">
                      <li><h3>Information</h3></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li><a href="#">IN MEDIA</a></li>
                    <li><a href="#">TERMS AND CONDITIONS</a></li>
                    <li><a href="#">CONTACT US</a></li>
                  </ul>
            
                  
                      <ul class="list">
                          <li><h3>Need Help</h3></li>
                        <li><a href="#">USER LOGIN</a></li>
                        <li><a href="#">SELLER LOGIN</a></li>
                        <li><a href="#">MY CART</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">OFFERS AND DISCOUNTS</a></li>
                        <li><a href="#">SUPPLIES</a></li>
                      </ul>
                    
                    </div>
                    <div class="col-md-8">
                        <form>
                            <font face="Cambria" color="white" size="5">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">To know more about recent arrivals, sales, and breathtaking combo offers - SUBSCRIBE!</small>
                          </div>
                          
                          
                          <button type="submit" class="btn btn-primary">Subscribe</button>
                                </font>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#"><img class="image1" src="instagram_filled_30px.png"></a>
                            <a href="#"><img class="image2" src="facebook_circled_filled_30px.png"></a>
                            <a href="#"><img class="image3" src="twitter_circled_filled_30px.png"></a>
                            <a href="#"><img class="image4" src="whatsapp_filled_30px.png"></a>
                            <a href="#"><img class="image5" src="gmail_filled_30px.png"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="head">PAYMENT OPTIONS</h3>
                            <img class="img1" src="visa.png">
                            <img class="img2" src="paytm.png">
                            <img class="img3" src="rupay.png">
                            <img class="img4" src="mastercard.png">
                        </div>
                    </div>
                  
                  </div>
                
                 
              </div>
            </div>
        </div>
    </div>
    
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
 
</html>
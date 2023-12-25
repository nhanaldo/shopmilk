
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="anh/milk.png">
    <script src="https://kit.fontawesome.com/10dfeb6bc7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assert/font/themify-icons/themify-icons.css">
    
    <link rel="stylesheet" href="Dk.css">

</head>
<body>
    <?php
   
        if(isset($_POST["btnRegister"])){
            $username = $_POST["name"];
            $email = $_POST["email"];
            $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
            
            require_once("connect.php");
    
            $sql = "insert into user(userid, email, pass) values('$username','$email', '$pass')";
            $result = mysqli_query($conn, $sql);
            if($result){
            //   mysqli_close($conn);
              header("location: DN.php");
            }else{
              echo mysqli_error($conn);
            }
          }
    ?>
    <div class="Logo_chinh">
        <img src="anh/LOGOO_chinh.png" alt="logo"><span>MILK</span>
        <p>Need help?</p>
    </div>
    <div class="body">
        <div class="Logo">
            <img src="anh/LOGOO_chinh.png" alt="logo">
            <p>Hãy uống sữa vì sữa rất tốt cho sức khỏe</p>
   
        </div>
        <div class="container">
            <div class="SignUp"> <img src="anh/LOGOO_chinh.png" alt="logo"><p>Sign Up</p></div>
            <form action="" class="form" method="post">
                <input  type="text" name="name" id="name" placeholder="Name">
                <input  type="text" name="email" id="email" placeholder="E-Mail">
                <input  type="password" name="password" id="password" placeholder="Password">
                <input type="submit" value="Sign In" name="btnRegister">
            </form>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="customer">
                <p>CUSTOMER SERVICE</p>
                <ul>
                    <li><a href="http://">Help Center</a></li>
                    <li><a href="http://">Payment Methods</a></li>
                    <li><a href="http://">Order Tracking</a></li>
                    <li><a href="http://">Free Shipping</a></li>
                    <li><a href="http://">Return & Refund</a></li>
                    <li><a href="http://">Shopee Guarantee</a></li>
                    <li><a href="http://">Contact Us</a></li>
                </ul>
            </div>
            <div class="aboutShop">
                <p>ABOUT SHOPPE</p>
                <ul>
                    <li><a href="http://">About Us</a></li>
                    <li><a href="http://">Shopee Blog</a></li>
                    <li><a href="http://">Shopee Careers</a></li>
                    <li><a href="http://">Privacy Policy</a></li>
                    <li><a href="http://">Seller Centre</a></li>
                    <li><a href="http://">Flash Deals</a></li>
                    <li><a href="http://">Media Contact</a></li>
                </ul>
            </div>
            <div class="payment">
                <p>PAYMENT</p>
                <div class="bank">
                    <img src="anh/logo-mb-bank.png" alt="Mbbank">
                    <img src="anh/logoArg.webp" alt="arg">
                    <img src="anh/vcb-logo.jpg" alt="VCB">
                </div>
                <div class="bank1">
                    <img src="anh/logo-vietinbank.png" alt="VTB">
                    <img src="anh/tech.jfif" alt="Tech">
                    <img src="anh/BIDV-Logo.png" alt="BIDV">
                </div>
            </div>
            <div class="follow">
                <p>FOLLOW ME</p>
                <div class="icon">
                    <ul>
                        <li><a href="http://"><i class="fa-brands fa-facebook fa-2x" style="color: #0f67ff;"></i><span>Facebook</span></a></li>
                        <li><a href="http://"><i class="fa-brands fa-instagram fa-2x" style="color: #fa4218;"></i><span>Intagram</span></a></li>
                        <li><a href="http://"><i class="fa-brands  fa-tiktok fa-2x" style="color: #000000;"></i><span>Tiktok</span></a></li>
                        <li><a href="http://"><i class="fa-brands fa-twitter fa-2x" style="color: #2807e2;"></i><span>Twitter</span></a></li>
                        <li><a href="http://"><i class="fa-brands fa-linkedin fa-2x" style="color: #327dff;"></i><span>Linkedin</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="hr">
            <hr>
        </div>
        <div class="footer2">
            <p>2023 MILK All Rights Reserved .</p>
            <ul class="contry">
                <p>Country & Region:</p>
                <li><a href="http://">VietNam |</a></li>
                <li><a href="http://">Singapo |</a></li>
                <li><a href="http://">ThaiLand |</a></li>
                <li><a href="http://">TaiWan |</a></li>
                <li><a href="http://">Indonesia |</a></li>
                <li><a href="http://">Campuchia </a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
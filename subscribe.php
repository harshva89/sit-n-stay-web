<?php

    $email = $_POST['email'];
    
    $con = mysqli_connect("localhost","Harsh1254","harsh");
    mysqli_select_db($con,"jproject");
    $sql = "insert into subscribers values('".$email."' );";
    $result = mysqli_query($con,$sql);

?>

<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <title>Subscribed!</title>
    </head>

    <body>
        <header id="header12">
            <div class="container">
                <div id="branding">
                    <h1>Sit & Stay</h1>
                </div>
                <nav>
                    <ul>
                    <a href="index.html"><li>Home</li></a>
                        <a href="cart.html"><li>Cart - <span class="cartcount">0</span></li></a>
                        <a href="about.html"><li>Why us?</li></a>
                        <a href="contactus.html"><li>Contact Us</li></a>
                        <a href="account.php"><li>Account</li></a>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="submitted">
            <p>Thankyou for subscribing!</p>
            <p>You will be recieving latest news and offers from us.</p>
            <p>Head to:</p>
            <section class="container content-section">
            <div class="shop-items">
                <a href="about.html" style="text-decoration:none; color:black;">
                <div class="submitted-items-item">
                    <img class="shop-item-image-custom2" src="Images/about_us.png" height="200px" width="500px">
                    <div class="shop-item-details">
                        <span class="shop-item-price">About us</span>
                        
                    </div>
                    <span class="item-on-hover"><div style="word-wrap: break-word;"><p>About our website & our aim.</p></div></span>
                </div>
                </a>
                <a href="index.html" style="text-decoration:none; color:black;">
                <div class="submitted-items-item">
                    <img class="shop-item-image-custom2" src="Images/home_page.PNG" height="100px" width="500px">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Home Page</span>
                        
                    </div>
                    <span class="item-on-hover"><div style="word-wrap: break-word;"><p>All our products! Browse through them.</p></div></span>
                </div>
                </a>
            </div>

        </section>
        </section>
        <script src="vanilla-tilt.min.js"></script>
        <script>
            VanillaTilt.init(document.querySelectorAll(".submitted-items-item"), {
		max: 18,
		speed: 400
	});
        </script>
            
        </section>

        <footer id="footer12">
            Reserved <br>
            <a href="#">
            <div id="backTop">
                    <img src="Images/back-to-top.png" alt="Top" height="20px" width="20px">
            </div></a>
        </footer>
        <script src="cartjs.js"></script>
    </body>
</html>


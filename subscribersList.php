
<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <title>Sit & Stay - Subscribers</title>
        
    </head>

    <body id="ordersShow" style="margin-bottom:200px">
        
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
                        <a href="account.php"><li class="current">Account</li></a>
                    </ul>
                </nav>
            </div>
        </header>
        <br>
        <h1>List of all subscribers to our newsletter:</h1>
        <?php
$con = mysqli_connect("localhost","Harsh1254","harsh");
mysqli_select_db($con,"jproject");
$sql = "select * from subscribers;";
$result = mysqli_query($con,$sql);
$i=1;
$emails="";
while($row = mysqli_fetch_array($result)){
    if($row['email']!='')
    {echo "<p>$i. ".$row['email']."</p>";
        $emails.=strval($row['email']);
        $emails.=";";
    $i+=1;}
    }
    echo "<BR><BR>";
    echo "<a style='text-decoration:none; color: white;' href='mailto:".$emails."'><button class='button_1'> Send email to all </button></a>";
        ?>

        <footer id="footer12">
            Project
            <a href="#">
            <div id="backTop">
                    <img src="Images/back-to-top.png" alt="Top" height="18px" width="18px">
            </div></a>
        </footer>
        <script src="cartjs.js"></script>
    </body>
</html>
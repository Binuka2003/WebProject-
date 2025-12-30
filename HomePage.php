<?php

session_start();

if(isset($_SESSION['userId'])){
    $userId = $_SESSION['userId'];
    $username = $_SESSION['username'];
}
else{
    //header("Location:../Login.php");
}

?>

<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Stock Manager</title>
    <link rel="stylesheet" href="Stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar">
        <div class="logo">Smart Stock Manager</div>
        <ul class="nav-links">
            <li><a href="HomePage.php" class="active">Home</a></li>
            <li><a href="AboutUs.php" >About Us</a></li>         
            <li><a href="ContactUs.php">Contact</a></li>
            <li><a href="Login.php" class="btn-signin">Login/Signup</a></li>

        </ul>
    </nav>

    <section class="hero">
        <div class="hero-content">
            <h1><span>Project &Stock</span><br>Invenroty System</h1>
            <p>Streamline inventory management with real-time tracking, automated<br>
            stock monitoring, and supplier management. Optimize procurement,<br>
            reduce waste,and improve efficiency with our <span>Smart Stock Manager.</span></p>
            <div class="hero-buttons">
                <a href="signup.php" class="btn">Get Started Here</a>
                <a href="AboutUs.php" class="btn-outline">More About Us</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="./images/financial_advisor.png" alt="Financial Advisor"/>
        </div>
    </section>


    <section class="SSM-Features">
        <h2>What we <span>Offer</span></h2>
        <p>The Smart Stock Manager is an integrated dashboard designed to streamline inventory and procurement processes. With dedicated modules for Sales, <br>
            Production, Procurement, Storekeeping, Finance, and more, it ensures seamless stock tracking, purchase management, and workflow optimization.</p>
        <div class="features">
            <div class="feature">
                <img src="./images/real-time-monitoring.png" alt="IconOne">
                <h3>Inventory Tracking</h3>
                <p>Monitor stock levels in real-time for accurate inventory management.</p>                
            </div>
            <div class="feature">
                <img src="./images/supply-chain.png" alt="IconTwo">
                <h3>Supplier Management</h3>
                <p>Streamline procurement processes and maintain supplier relationships.</p>                
            </div>
            <div class="feature">
                <img src="./images/analysis.png" alt="IconThree">
                <h3>Financial Reporting</h3>
                <p>Gain insights into financial performance with detailed reports.</p>                
            </div>
            <div class="feature">
                <img src="./images/access.png" alt="IconFour">
                <h3>Role-Based Access</h3>
                <p>Provide tailored access to different teams based on roles and responsibilities.</p>                
            </div>
        </div>
    </section>


    <footer>
        <div class="footer-container">
            <div class="footer-left">
                <h3>Smart Stock Manager</h3>
                <p>Streamline Inventory Management<br>and improve with SSM.</p>
                <a href="#" class="email-link">smartstockmanager@gmail.lk</a>
                <div class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>                    
                </div>
            </div>
            <div class="footer-right">
                <h3>Navigate</h3>
                <ul>
                    <li><a href="HomePage.php">Home</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <li><a href="ContactUs.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© Copyright 2025 — Smart Stock Manager</p>
        </div>
    </footer>


</body>
</html>



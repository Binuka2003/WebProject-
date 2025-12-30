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
    <link rel="stylesheet" href="Stylesheet.css" /> <style>

        .team-section {
            display: flex;
            justify-content: center;
            background-color: #fff;
            padding: 80px 40px;
        }

        .team-member {
            text-align: center;
            margin: 0 20px;
            background-color: white; /* Add white background */
            padding: 20px; /* Add padding inside the box */
            border-radius: 8px; /* Add rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add subtle shadow */
        }

        .team-member img {
            width: 200px; /* Adjust image size */
            height: 200px;
            border-radius: 5%;
            object-fit: cover; /* Maintain aspect ratio */
            margin-bottom: 10px;
        }

        .team-member h3 {
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 1em;
            color: #777;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar">
        <div class="logo">Smart Stock Manager</div>
        <ul class="nav-links">
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="AboutUs.php"class="active">About Us</a></li>         
            <li><a href="ContactUs.php">Contact</a></li>
            <li><a href="Login.php" class="btn-signin">Login/Signup</a></li>

        </ul>
    </nav>

        <section class="hero">
            <div class="hero-content">
                <h1>Fuel Your Business <br><span>with Advanced Tech</span></h1>
                <p>Smart Stock Manager offers a comprehensive system to efficiently <br>
                manage projects and inventory, developed by experienced professionals <br>
                passionate about your success.</p>
                <div class="hero-buttons">
                    <button class="btn">Get Started for Free</button>
                    <div class="rating">
                        <span class="star">&#9733;</span> 4.5
                    </div>
                </div>
                <div class="hero-image">
                    <img src="./images/Startup.png" alt=""/>
                </div>
            </div>
        </section>

    <section class="team-section">
        <div class="team-member">
            <img src="./images/Yathara.png" alt="yathara">
            <h3>Sayuri Yathara</h3>
            <p>Development Manager</p>
        </div>
        <div class="team-member">
            <img src="./images/Afla.png" alt="afla">
            <h3>Afla Zain</h3>
            <p>Database Engineer</p>
        </div>
        <div class="team-member">
            <img src="./images/Hafsa.png" alt="hafsa">
            <h3>Hafsa Ayurudeen</h3>
            <p>Full-Stack Developer</p>
        </div>
        <div class="team-member">
            <img src="./images/Shameem.png" alt="shameem">
            <h3>Shameem Jamalon</h3>
            <p>UI/UX Engineer</p>
        </div>
        <div class="team-member">
            <img src="./images/Binuka.png" alt="binuka">
            <h3>Binuka Yojitha</h3>
            <p>System Analyst</p>
        </div>
    </section>

    <section class="stats-section">
    <div class="stats-text">
        <h2><span>Empowering</span><br> your success <br>with our solutions</h2>
    </div>
    <div class="stats-grid">
        <div class="stat">
            <span class="stat-value">35+</span>
            <span class="stat-label">TASKS COMPLETED</span>
        </div>
        <div class="stat">
            <span class="stat-value">1002+</span>
            <span class="stat-label">NIGHTMARE ERRORS</span>
        </div>
        <div class="stat">
            <span class="stat-value">2000+</span>
            <span class="stat-label">HRS OF CODING</span>
        </div>
        <div class="stat">
            <span class="stat-value">05</span>
            <span class="stat-label">GREAT CO-WORKERS</span>
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

<?php
session_start();
require_once('dbconn.php');



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // SQL query to get the user by email
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $users = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $users['password'])) {

            $_SESSION['username'] = $users['username'];
            header("Location: ./Dashboard/dashboard.php");
            exit();
        } else {
            $message = "<p class='error-message'>Invalid email or password.</p>";
        }
    } else {
        $message = "<p class='error-message'>Invalid email or password.</p>";

    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Stock Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="StyleSheet.css">
</head>

<style>
    .error-message {
        color: red;
    }
</style>

<body>



    <section id="login">
        <div class="login-container">
            <h2>Login</h2>

            <!-- Display error message if any -->
            <?php
            if (!empty($message)) {
                echo $message;
            }
            ?>

            <form action="login.php" method="POST" class="login-form">
                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                    <option value="" disabled selected>Select Role</option>
                <option value="Admin">Admin</option>
                <option value="Production_Manager">Production_Manager</option>
                <option value="Procurement_Team">Procurement_Team </option>
                <option value="Store_Keeper ">Store_Keeper </option>
                <option value="Production_Team">Production_Team</option>
                <option value="Finance_Team">Finance_Team</option>
                <option value="Sales_Management">Sales_Management</option>
                    </select>
                </div>
                <input type="submit" value="Login" class="submit-btn">
                
            </form>
        </div>
    </section>



</body>

</html>
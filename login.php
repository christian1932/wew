<?php

require '../../dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Reservation System</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <div class="form-box admin" id="admin">
            <form method="post" action="loginAPI.php">
                <i class='bx bx-user-circle fa-10x' ></i>
                <h1>Admin Login</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Admin Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock'></i>
                </div>
                <button name="adminLogin" type="submit" class="btn">Login</button>
            </form>
        </div>

        <div class="form-box staff" id="staff">
            <form method="post" action="loginAPI.php">
                <i class='bx bx-user-circle' ></i>
                <h1>Staff Login</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Staff Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock'></i>
                </div>
                <button name="staffLogin" type="submit" class="btn">Login</button>
            </form>
        </div>
        
        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello, Welcome!</h1>
                <p>Login as a Staff?</p>
                <button class="btn staff-btn">Staff Login</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>Hello, Welcome!</h1>
                <p>Login as an Admin?</p>
                <button class="btn admin-btn">Admin Login</button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    
</body>
</html>
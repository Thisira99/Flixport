<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "my";

// Establish the database connection
$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Not connected");
}

// Handle user registration
if (isset($_POST["register"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into 'login' table
    $query = "INSERT INTO login (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashed_password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<span style="color: white;">Registration successful!</span>';
    } else {
        echo '<span style="color: white;">Error registering user.</span>';
    }
    

    mysqli_stmt_close($stmt);
}

// Handle user login
if (isset($_POST["login"])) {
    $login_email = $_POST["login_email"];
    $login_password = $_POST["login_password"];

    // Fetch user from the 'login' table based on email
    $query = "SELECT * FROM login WHERE email = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $login_email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        // Verify password
        if (password_verify($login_password, $row["password"])) {
            echo "Login successful!";
            // Here, you can set session or cookie to track logged-in user
            
            // Redirect to index.php
            header("Location: index.php");
            exit(); // Make sure to exit after redirection
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    mysqli_stmt_close($stmt);
}

// Close the database connection
mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <title>Ludiflex | Login & Registration</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <a href="#" class="logo">Flix <span> Port</span>.</a>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="index.php" class="link active">Home</a></li>
                <li><a href="index.php#about" class="link">About</a></li>
                <li><a href="index.php#services" class="link">Services</a></li>
                <li><a href="index.php#contact" class="link">Contact</a></li>
                
               
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
    <div class="form-box">
        
        <!------------------- login form -------------------------->


<div class="login-container" id="login">
    <div class="top">
        <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
        <header>Login</header>
    </div>
    <form action="log.php" method="POST">
        <div class="input-box">
            <input type="text" class="input-field" name="login_email" placeholder="Username or Email">
            <i class="bx bx-user"></i>
        </div>
        <div class="input-box">
            <input type="password" class="input-field" name="login_password" placeholder="Password">
            <i class="bx bx-lock-alt"></i>
        </div>
        <div class="input-box">
            <input type="submit" class="submit" name="login" value="Sign In">
        </div>
    </form>
    <div class="two-col">
        <!-- ...remember me and forgot password options... -->
    </div>
</div>



        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
            <form action="log.php" method="POST"> <!-- Updated form action -->
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" name="firstname" class="input-field" placeholder="Firstname"> <!-- Added 'name' attribute -->
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" name="lastname" class="input-field" placeholder="Lastname"> <!-- Added 'name' attribute -->
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="email" name="email" class="input-field" placeholder="Email"> <!-- Added 'name' attribute -->
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" class="input-field" placeholder="Password"> <!-- Added 'name' attribute -->
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" name="register" class="submit" value="Register">
                </div>
                <div class="two-col">
                    <div class="one">
                        <input type="checkbox" id="register-check">
                        <label for="register-check"> Remember Me</label>
                    </div>
                    
                </div>
            </form>
        </div>
        


<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

</body>
</html>
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "my";

$con = mysqli_connect($host, $username, $password, $database);

if (!$con) {
    die("Not connected");
}

$errors = [];

if (isset($_POST["sub"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["msg"];

    // Validate inputs
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        $query = "INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            $success_message = "Data sent successfully";
        } else {
            $errors[] = "Error inserting data.";
        }

        mysqli_stmt_close($stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FlixPort - Personal Portfolio Website </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   
</head>

<body> 

<!-- Navbar  Section Start -->
<header>
    <a href="index.php" class="logo">Flix <span> Port</span>.</a>

    <div class="bx bx-menu" id="menu-icon"></div>

    <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a class="login-button" href="log.php">Login</a></li>
        <div class="bx bx-moon" id="darkmode"></div>
</ul>
</ul>
    </ul>
</header>
<!-- Navbar Section End -->


<!-- Home Section Start -->
<section class="home" id="home">
    <div class="social">
        <a href="#"><i class='bx bxl-github'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-facebook'></i></a>
    </div>
    <div class="home-img">
        <img src="main.png" alt="">
    </div>
    <div class="home-text">
        <span>Hello, I'm</span>
        <h1>Thisira Jayasekara</h1>
        <h2>Web Developer</h2>
        <p>"Unleashing the Power of Pixels: <br>Crafting Exquisite Web Experiences"</p>
        <a href="#contact" class="btn">Download CV</a>
    </div>
</section>
<!-- Home Section End -->
<!-- About Section Start -->

<section class="about" id="about">
    <div class="heading">
        <h2>About Me</h2>
        <span>Introduction</span>
    </div>

    <div class="about-container">
        <div class="about-img">
            <img src="main.png" alt="" class="animated-image">
        </div>
        <div class="about-text">
            <p>A creative problem-solver with a passion for marketing, UI/UX design, web development and maths tutoring. Ready to help you reach your goals!</p>
                     <button class="btns" onclick="toggleAchievements()">Show more</button>

            <div id="achievements" style="display: none;">
                <h4>Achievements</h4>
                <ul>
                    <li>Award 1</li>
                    <li>Award 2</li>
                    <li>Award 3</li>
                </ul>
            </div>  
          <div class="information">
                <div class="info-box">
                    <i class='bx bxs-user'></i>
                    <span>Thisira Jayasekara</span>
                </div>

                <div class="info-box">
                    <i class='bx bxs-phone'></i>
                    <span>+94 710444325</span>
                </div>

                <div class="info-box">
                    <i class='bx bxs-envelope'></i>
                    <span>thilakshanathisira@gmail.com</span>
                </div>
            </div>
            <a href="#" class="btn">Download Cv</a>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Skills Section Start -->

<section class="skills" id="skills">
    <div class="heading">
        <h2>Skills</h2>
        <span>My Skills</span>
    </div>

    <div class="skills-container">
        <div class="bars">

            <div class="bars-box">
                <h3>HTML</h3>
                <span>94%</span>
                <div class="light-bar"></div>
                <div class="percent-bar html-bar"></div>
            </div>

            <div class="bars-box">
                <h3>CSS</h3>
                <span>84%</span>
                <div class="light-bar"></div>
                <div class="percent-bar css-bar"></div>
            </div>

            <div class="bars-box">
                <h3>JavaScript</h3>
                <span>74%</span>
                <div class="light-bar"></div>
                <div class="percent-bar js-bar"></div>
            </div>

            <div class="bars-box">
                <h3>Figma</h3>
                <span>80%</span>
                <div class="light-bar"></div>
                <div class="percent-bar react-bar"></div>
            </div>
        </div>
        <div class="skills-img">
            <img src="main.png" alt="Skill">
        </div>
    </div>
</section>
<!-- Skills Section End -->
<!-- Services Section Start -->
<section class="services" id="services">
    <div class="heading">
        <h2>Services</h2>
        <span>Our Services</span>
    </div>
    <div class="services-content">

        <div class="services-box">
            <i class='bx bx-code-alt'></i>
            <h3>Web Development</h3>
            <a href="#">Learn More</a>
        </div>

        <div class="services-box">
            <i class='bx bx-server'></i>
            <h3>Backend Development</h3>
            <a href="#">Learn More</a>
        </div>
        <div class="services-box">
            <i class='bx bxl-figma'></i>
            <h3>UI/UX Design</h3>
            <a href="#">Learn More</a>
        </div>

        <div class="services-box">
            <i class='bx bxl-android'></i>
            <h3>App Development</h3>
            <a href="#">Learn More</a>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Contact Section Start -->
<section class="contact" id="contact">
    <div class="heading">
        <h2>Contact</h2>
        <span>Connect With Us</span>
        <div class="contact-form">
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Your Name">
        <input type="email" name="email" placeholder="Your Email">
        <textarea name="msg" cols="30" rows="10" placeholder="Write Message Here..."></textarea>
        <input type="submit" name="sub" value="Send Message" class="contact-button">
    </form>
    <?php
    if (!empty($errors)) {
        echo '<div class="error-message">';
        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }
        echo '</div>';
    } elseif (isset($success_message)) {
        echo '<div class="success-message">' . $success_message . '</div>';
    }
    ?>
</div>
</section>
<!-- Contact Section End -->
<div class="footer">
    <h2>Follow Us</h2>
    <div class="footer-social">
        <a href="#"><i class='bx bxl-facebook'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-youtube'></i></a>
        
    </div>

</div>

<div class="copyright">
    &#169;  All Right Reserved.</p>
</div>

<script>
    function toggleAchievements() {
        var achievements = document.getElementById('achievements');
        if (achievements.style.display === 'none') {
            achievements.style.display = 'block';
        } else {
            achievements.style.display = 'none';
        }
    }
</script>
<script>
	const heroImage = document.querySelector('#heroImg');
	let currentFrame = 0;
	const endFrame = 60; // Number of frames in the animation
	heroImage.style.backgroundImage = `url(path/to/animation/frames/frame-${currentFrame}.jpg)`;
	function animateHeroImage() {
		currentFrame++;
		if (currentFrame > endFrame) {
			clearInterval(animation);
			return;
		}
		heroImage.style.backgroundImage = `url(path/to/animation/frames/frame-${currentFrame}.jpg)`;
	}
	const animation = setInterval(animateHeroImage, 60); // 60 milliseconds per frame
</script>
<script src="script.js"></script>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


// honey pot field
    $honeypot = $_POST['phoneNum'];
    if (!empty($honeypot)) {
        echo 'Honeypot field was filled out. Request ignored.';
        return;
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($message)) {

        $to = "dev.dfledesma@gmail.com";
        $subject = "Contact form submission from $firstName $lastName";
        $body = "You have received a new message from your website contact form.\n\n" . "Here are the details:\n\nName: $firstName $lastName\n\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: noreply@yourdomain.com\n";
        $headers .= "Reply-To: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "<script>alert('Message sent successfully');</script>";
        } else {
            echo 'Failed to send message';
        }
    } else {
        echo 'All fields are required';
    }
}
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio 2024</title>
    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/style/hero.css">
    <link rel="stylesheet" href="assets/style/about.css">
    <link rel="stylesheet" href="assets/style/skills.css">
    <link rel="stylesheet" href="assets/style/classes.css">
    <link rel="stylesheet" href="assets/style/contact.css">
    <script src="assets/js/script.js"></script>
    <script src="assets/js/createJSON.js"></script>
</head>
<body onload="pageSetup()">
    <div class="container">
        <div class="color-bar"></div>
    <!-- Header Section -->
    <header>
        <div class="navbar">
            <div class="nav-logo"><a href="#">Devin L.</a></div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#classes">Classes</a></li>
                <li><a href="#">Homework</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
    <!--        <a href="#" class="login-btn">Login</a>-->
            <div class="toggle-btn" onclick="toggleMenu(); changeIcon()">
                <img src="assets/media/menu_lines_hamburger_icon.png" id="toggle-icon" alt="menu icon">
            </div>
        </div>

        <div class="dropdown-menu" id="dropdown-menu">
            <li><a href="#about">About</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#classes">Classes</a></li>
            <li><a href="#">Homework</a></li>
            <li><a href="#contact">Contact</a></li>
    <!--        <li><a href="#" class="login-btn">Login</a></li>-->
        </div>
    </header>

    <section id="hero">
        <div class="intro-left">
            <h3>Welcome,</h3>
            <h1>I'm <span style="color: #80ed99;">Devin</span></h1>
            <h2>Inspiring UX UI & Web Developer</h2>

            <div class="mobile-headshot">
                <img src="assets/media/devin_ledesma_2024.png" alt="a close up head shot of myself">
            </div>

            <a href="#contact">
            <button type="button">Let's Talk <img src="assets/media/chat-solid-24.png" alt="chat icon">
                </button>
            </a>
        </div>

        <div class="intro-right">
            <div class="headshot">
                <img src="assets/media/devin_ledesma_2024.png" alt="a close up head shot of myself">
            </div>
        </div>
    </section>


    <section id="about">
        <h2>About <span>Me</span></h2>
        <div class="flex">
            <div class="left">
                <div class="resume">
                    <img src="assets/media/Personal-Resume.png" alt="QR code to my personal resume">
                </div>
            </div>
            <div class="right">
<!--                <p class="welcome-title">Welcome to <br> <span class="green">my portfolio!</span></p>-->
                <p>I'm a student at Des Moines Area Community College, <span class="underline">studying Web Development.</span></p>
                <p>I plan to continue learning by taking Udemy course online. I am also currently working on a <span class="underline">UX Design Certificate</span> through Google.</p>
                <p>I also have experience with <span class="underline">Photoshop, Illustrator, InDesign, and Typography</span> as well.</p>

                <h3>Email: <a href="mailto:dev.dfledesma@gmail.com">dev.dfledesma@gmail.com</a></h3>
                <h3>Location: Ankeny, Iowa - 50021</h3>
            </div>
        </div>
        <a href="resume.html">
            <button type="button">Resume <img src="assets/media/paperclip-regular-24.png" alt="chat icon">
            </button>
        </a>
    </section>

    <section id="skills">
        <h2>My <span>Skills</span></h2>
            <div class="skills-div">
                <template id="skills-template">
                <div class="skills-card">
                    <div class="img-bg">
                        <img src="assets/media/icons8-html.svg" alt="html logo">
                    </div>
                    <p>HTML 5</p>
                </div>
                </template>
            </div>

        <button id="viewAllBtn">
            View All
        </button>
    </section>

    <section id="classes">
        <h2>My <span>Classes</span></h2>
        <div class="classes-div">
            <template id="classes-template">
                <h3></h3>
                <p></p>
            </template>
        </div>
    </section>

    <section id="contact">
        <div class="left">
            <div class="contact-card"></div>
        </div>
        <div class="right">
            <h3>Get in <span>touch . . .</span></h3>
            <form method="POST" action="index.php">
                <label for="firstName"></label>
                <input type="text" id="firstName" name="firstName" placeholder="First Name*" required>

                <label for="lastName"></label>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name*" required>

                <label for="email"></label>
                <input type="email" id="email" name="email" placeholder="Email*" required>

                <label for="phoneNum"></label>
                <input type="tel" id="phoneNum" name="phoneNum" placeholder="Phone*" required>

                <label for="message"></label>
                <textarea id="message" name="message" placeholder="Message*" required></textarea>

                <button>Say Hello</button>
            </form>
        </div>
    </section>









</div>  <!-- End Container -->
</body>
</html>
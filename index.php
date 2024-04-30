<?php
$errorMsg = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // honey pot field
    $honeypot = $_POST['phoneNum'];
    if(!empty( $honeypot )) {
        echo 'Honeypot field was filled out. Request ignored.';
        return;
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($message)) {

        $to = "test@devinfledesma.com, dev.dfledesma@gmail.com";
        $subject = "Contact form submission from $firstName $lastName";
        $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $firstName $lastName\n\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: noreply@yourdomain.com\n";
        $headers .= "Reply-To: $email";

        if(mail($to, $subject, $body, $headers)) {
            echo "<script>alert('Message sent successfully');</script>";
        } else {
            echo 'Failed to send message';
        }
    } else {
        $errorMsg = 'All fields are required';
    }
}
?>





<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio 2024</title>
    <link rel="icon" type="image/png" sizes="48x48" href="assets/media/LEDESMA_DEVIN_Monogram.png">
    <link rel="stylesheet" href="assets/style/main.css">
    <link rel="stylesheet" href="assets/style/hero.css">
    <link rel="stylesheet" href="assets/style/about.css">
    <link rel="stylesheet" href="assets/style/skills.css">
    <link rel="stylesheet" href="assets/style/projects.css">
    <link rel="stylesheet" href="assets/style/classes.css">
    <link rel="stylesheet" href="assets/style/contact.css">
    <script src="assets/js/createJSON.js"></script>
    <script src="assets/js/script.js"></script>
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
                <li><a href="../index.html" target="_blank">Homework</a></li>
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
            <li><a href="../index.html" target="_blank">Homework</a></li>
            <li><a href="#contact">Contact</a></li>
    <!--        <li><a href="#" class="login-btn">Login</a></li>-->
        </div>
    </header>

    <div class="social-media-bar">
        <a href="https://github.com/B4IGit" target="_blank" id="gitHub"><img src="assets/media/github.png" alt="GitHub icon"></a>
        <a href="https://www.linkedin.com/in/devin-f-ledesma/" target="_blank" id="linkedIn"><img src="assets/media/linkedin.png" alt="LinkedIn icon"></a>
    </div>

    <section id="hero">
        <div class="intro-left">
            <h3>Hi,</h3>
            <h1>I'm <span style="color: #80ed99;">Devin</span></h1>
            <h2>An Inspiring UI/UX <br>Web Developer</h2>

            <div class="mobile-headshot">
                <img src="assets/media/devin_ledesma_2024.png" alt="a close up head shot of myself">
            </div>

            <a href="#contact">
            <button type="button">Let's Chat <img src="assets/media/chat-solid-24.png" alt="chat icon">
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
                <p>I am currently a student at Des Moines Area Community College <span><em>studying Web Development</em></span>.</p>
                <p>My plan after graduation is to continue taking courses online (which includes design certifications) and finding <span><em>full-time employment</em></span>.
                <p>Developed a strong capability for leveraging <span><em>Adobe Creative Cloud Design Tools</em></span>.</p> <br>

                <p><strong>Email: <a class href="mailto:dev.dfledesma@gmail.com">dev.dfledesma@gmail.com</a></strong></p>
                <p><strong>Location: Ankeny, IA 50021</strong></p>

                <a href="resume.html">
                    <button class="mobile-hide" type="button">Resume <img src="assets/media/paperclip-regular-24.png" alt="chat icon">
                    </button>
                </a>
            </div>
        </div>
        <a href="resume.html">
            <button class="hide" type="button">Resume <img src="assets/media/paperclip-regular-24.png" alt="chat icon">
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

    <section id="projects">
        <div class="projects-div">
            <template id="projects-template">
                <div class="projects-card">
                    <img src="assets/media/WOW_DESIGN.jpg" alt="">
                    <h3></h3>
                    <h4></h4>
                    <p></p>
                </div>
            </template>
        </div>
    </section>

    <section id="classes">
        <h2>My <span>Classes</span></h2>
        <div class="classes-div">
            <template id="classes-template">
                <div class="wrap">
                    <h3></h3>
                    <p></p>
                </div>
            </template>
        </div>
        <a href="../index.html" target="_blank"><button type="button">Homework <img src="assets/media/code-block-regular-24.png" width="26px" alt="code logo"></button></a>
    </section>

    <section id="contact">
        <h2>Let's get <span>in touch</span></h2>
        <div class="flex">
            <div class="left">
                <div class="contact-card">
                    <img src="assets/media/me.jpg" alt="">
                </div>
            </div>
            <div class="right">

                <form method="POST" action="index.php" id="contactForm">

                    <?php if ($errorMsg): ?>
                        <style>
                            #firstName::placeholder,
                            #lastName::placeholder,
                            #email::placeholder,
                            #message::placeholder {
                                color: red;
                            }
                        </style>

                        <div style="color: red; text-align: center; margin-bottom: 1rem" class="error-message">
                            <?php echo $errorMsg; ?>
                        </div>

                        <script type="text/javascript">
                            // It will run 'pageSetup' function and then scroll to the error.
                            window.onload = function(){
                                pageSetup();
                                location.hash = "#contactForm";
                            };
                        </script>
                    <?php endif; ?>

                    <label for="firstName"></label>
                    <input type="text" id="firstName" name="firstName" placeholder="First Name*">

                    <label for="lastName"></label>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name*">

                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder="Email*">

                    <label for="phoneNum"></label>
                    <input type="tel" id="phoneNum" name="phoneNum" placeholder="Phone*">

                    <label for="message"></label>
                    <textarea id="message" name="message" placeholder="Message*"></textarea>


                    <button type="submit">Let's Chat <img src="assets/media/face-regular-24.png" width="26px" alt="face icon"></button>
                </form>
            </div>
        </div>
    </section>









</div>  <!-- End Container -->
</body>
</html>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Contact Me</title>
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<body>
<header>
    <div class="wrapper">
    <div class="nav-bar">
    <div id="nav-container">
        <nav>
            <a href="index.html" class="logo">Hanan Osman</a>
            <div class="openMenu">
                <i class="fa fa-bars"></i>
            </div>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="projects.html">Projects</a></li>
                <li><a href="resume.html">Resume</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.php" class="current">Contact</a></li>
                <li><div class="closeMenu"><i class="fa fa-times"></i></div></li>
            </ul>
        </nav>
    </div>
    </div>
    </div>
</header>
<div id="wrapper">
<main>
    <h3 class="heading">Contact me</h3><hr>
        <p></p>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "hanaaneooo@gmail.com";  //place your/your client's email address here
        $toName = "Hanan Osman"; //place your client's name here
        $website = "Hanan Osman's Portfolio";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements
	   ?>
</main>
<aside>
<h3>Contact Info</h3><hr>
<p>Contact me with any concerns or questions you may have! </p>
<div class="links">
    <a href="mailto:hanaaneooo@gmail.com" target="_blank" class="link"> 
    <i class="fas fa-envelope"></i><p>hanaaneooo@gmail.com</p></a>
</div>
<div class="links">
    <a href="https://github.com/heosman" target="_blank" class="link"> 
    <i class="fab fa-github"></i><p>Github</p></a>
</div>
<div class="links">
    <a href="https://www.linkedin.com/in/hanan-osman/" target="_blank" class="link"> 
    <i class="fab fa-linkedin"></i><p>LinkedIn</p></a>
</div>
</aside>
<footer>
    <ul>
    <li>Copyright &copy;
    2021 by Hanan Osman, </li>
    <li> All Rights Reserved</li>
    </ul>
</footer>
</div>
<script src="js/menu.js"></script>
</body>
</html>
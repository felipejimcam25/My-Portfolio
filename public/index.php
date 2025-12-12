<?php
    require_once __DIR__ .  "/../includes/db.php";

    $query = $pdo->query("SELECT * FROM banner WHERE id = 1");
    $banner = $query->fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Full Stack developer Felipe Jimenez's portfolio web. ">
    <title>Felipe Jimenez</title>
    <link rel="shortcut icon" href="F" type="image/x-icon">
    <link rel="stylesheet" href="assets/icons/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!------------ HEADER STRUCTURE ------------------->
    <header>

        <!------------ NAV STRUCTURE ------------------->
        <nav id="nav">
            
            <!------------ NAVIGATION STRUCTURE ------------------->
            <div class="navigation container">
                
                <!------------ LOGO DEV ------------------->
                <a href="#" class="logo">FelipeDev</a>
                <!------------ LOGO DEV ------------------->
                
                
                <!------------ NAV OPTIONS LIST ------------------->
                <ul class="navList" id="navList">

                    <li class="navOption">
                        <!-- BUTTON TO CLOSE NAV IN MOBILE SIZE -->
                        <button id="closeNav"><i class="fa-solid fa-xmark"></i></button>
                        <!-- BUTTON TO CLOSE NAV IN MOBILE SIZE -->
                    
                    </li>
                    
                    <li><a href="#" class="navLink">Home</a></li>
                    <li><a href="#" class="navLink">About Me</a></li>
                    <li><a href="#" class="navLink">Projects</a></li>
                    <li><a href="#" class="navLink">Contact</a></li>
                </ul>
                <!------------ NAV OPTIONS LIST ------------------->
                
                <!-- BUTTON TO DISPLAYS THE NAV IN MOBILE SIZE -->
                <button id="openNav"><i class="fa-solid fa-bars-staggered"></i></button>
                <!-- BUTTON TO DISPLAYS THE NAV IN MOBILE SIZE -->

            </div>
            <!------------ NAVIGATION STRUCTURE ------------------->
            
        </nav>
        <!------------ NAV STRUCTURE ------------------->
        
        <!------------ BANNER STRUCTURE ------------------->
        <div class="banner container">
            
            <!------------ BANNER TEXT ------------------->
            <div class="bannerText">
                <span class="bannerTextUpper"><?= $banner["banner_upper_text"] ?></span>
                <h1 class="principalTitle"><?= $banner["banner_h1"] ?> <span class="lastName"><?= $banner["banner_h1_span"] ?></span></h1>
                <span class="BannerTextBelow"><?= $banner["banner_below_text"] ?></span>
            </div>
            <!------------ BANNER TEXT ------------------->

            <!------------ BANNER IMAGE ------------------->
            <div class="bannerImage">
                <img src="../imgFile/<?= $banner['banner_image'] ?>" alt="Felipe Jimenez photo edited with a soft blue shadow on his face" title="Felipe Jimenez">
            </div>
            <!------------ BANNER IMAGE ------------------->
        </div>
        <!------------ BANNER STRUCTURE ------------------->
    </header>
    <!------------ HEADER STRUCTURE ------------------->
    
    
    <!------------ MAIN STRUCTURE ------------------->
    <main>
        <!------------ LANGUAGES CAROUSEL SECTION STRUCTURE ------------------->
        <section class="carouselSection">
            <article class="carouselContent container">
                <div class="slideTrack" id="slider">
                    <img class="codeIcon" src="assets/languagesIcons/html.png" alt="html icon">
                    <img class="codeIcon" src="assets/languagesIcons/css.png" alt="css icon">
                    <img class="codeIcon" src="assets/languagesIcons/js.png" alt="Javascript icon">
                    <img class="codeIcon" src="assets/languagesIcons/React.png" alt="React icon">
                    <img class="codeIcon" src="assets/languagesIcons/php.png" alt="Php icon">
                    <img class="codeIcon" src="assets/languagesIcons/mysql.png" alt="MySql icon">
                    <img class="codeIcon" src="assets/languagesIcons/node.png" alt="Node icon">
                    <img class="codeIcon" src="assets/languagesIcons/git.png" alt="git icon">
                    <img class="codeIcon" src="assets/languagesIcons/github.png" alt="GitHub icon">
                    <img class="codeIcon" src="assets/languagesIcons/wordpress.png" alt="html icon">
                    <img class="codeIcon" src="assets/languagesIcons/figma.png" alt="Figma icon">
                    <img class="codeIcon" src="assets/languagesIcons/photoshop.png" alt="photoshop icon">
                </div>
            </article>
        </section>
        <!------------ LANGUAGES CAROUSEL SECTION STRUCTURE ------------------->
        
        <!------------ ABOUT ME SECTION STRUCTURE ------------------->
        <section class="aboutSection">
            <article class="aboutContainer container">
                <div class="aboutHead">
                    <h2>About Me</h2>
                </div>
            </article>
                <article class="aboutContent container">
                    <div class="aboutText">
                        <span class="WhoTitle">Who I am </span>
                        <p class="aboutText">I’m a passionate Web Developer with experience creating responsive and engaging web applications using HTML, CSS, JavaScript, PHP, and Node.js. I enjoy building intuitive interfaces, clean architecture, and solving problems through efficient, reliable code.</p>
                        <p class="aboutText">I proved my ability to perform under pressure by achieving 1st place in the WorldSkills Costa Rica National Web Development competition, and later earning a Bronze Medal at WorldSkills Americas, competing against the best developers of the continent. These accomplishments strengthened my adaptability, speed, problem-solving mindset, and commitment to high-quality work.</p>
                        <p>I’m driven to keep improving, building scalable applications, and growing as a Fullstack Developer ready for real-world challenges.</p>
                        <a href="public/externalFiles/CV_FELIPE JIMENEZ-Eng.pdf" class="cvBtn" download="Felipe's Cv"><span class="cvText">Download CV</span></a>
                    </div>
                    <div class="aboutImg">
                        <img src="assets/images/AboutPhoto.png" alt="">
                    </div>
                </article>
            </section>
            <!------------ ABOUT ME SECTION STRUCTURE ------------------->
            
            <!------------ PROJECTS SECTION STRUCTURE ------------------->
            <section class="projectSection">
                <article class="projectsHead container">
                    <h2>Projects</h2>
                </article>

                <article class="projectsBody container">
                    <div class="projectCard">
                            <iframe src="https://tic-tac-toe-game-coral-rho.vercel.app/" frameborder="0" title="tic tac toe game"></iframe>
                            <div class="projectDescrip">
                                <h3>Tic-Tac-Toe</h3>
                                <p>This project was developed with React</p>
                                <div class="options">
                                    <a href="https://tic-tac-toe-game-coral-rho.vercel.app/" class="exploreBtn" target="_blank"><span class="btnIcon"><i class="fa-solid fa-arrow-right"></i></span><span class="btnText">Explore</span></a>
                                    <a href="https://github.com/felipejimcam25/Tic-Tac-Toe-game" target="_blank" class="codeBtn"><span class="btnIcon"><i class="fa-brands fa-github"></i></span><span class="btnText">Code</span></a>
                                </div>
                            </div>
                    </div>
                    <div class="projectCard">
                            <iframe src="https://tic-tac-toe-game-coral-rho.vercel.app/" frameborder="0" title="tic tac toe game"></iframe>
                            <div class="projectDescrip">
                                <h3>Tic-Tac-Toe</h3>
                                <p>This project was developed with React</p>
                                <div class="options">
                                    <a href="#" class="exploreBtn"><span class="btnIcon"><i class="fa-solid fa-arrow-right"></i></span><span class="btnText">Explore</span></a>
                                    <a href="#" class="codeBtn"><span class="btnIcon"><i class="fa-brands fa-github"></i></span><span class="btnText">Code</span></a>
                                </div>
                            </div>
                    </div>
                    <div class="projectCard">
                            <iframe src="https://national-coffee-congress.vercel.app/" frameborder="0" title="tic tac toe game"></iframe>
                            <div class="projectDescrip">
                                <h3>Tic-Tac-Toe</h3>
                                <p>This project was developed with React</p>
                                <div class="options">
                                    <a href="#" class="exploreBtn"><span class="btnIcon"><i class="fa-solid fa-arrow-right"></i></span><span class="btnText">Explore</span></a>
                                    <a href="#" class="codeBtn"><span class="btnIcon"><i class="fa-brands fa-github"></i></span><span class="btnText">Code</span></a>
                                </div>
                            </div>
                    </div>
                    <div class="projectCard">
                            <iframe src="https://national-coffee-congress.vercel.app/" frameborder="0" title="tic tac toe game"></iframe>
                            <div class="projectDescrip">
                                <h3>Tic-Tac-Toe</h3>
                                <p>This project was developed with React</p>
                                <div class="options">
                                    <a href="#" class="exploreBtn"><span class="btnIcon"><i class="fa-solid fa-arrow-right"></i></span><span class="btnText">Explore</span></a>
                                    <a href="#" class="codeBtn"><span class="btnIcon"><i class="fa-brands fa-github"></i></span><span class="btnText">Code</span></a>
                                </div>
                            </div>
                    </div>
                    
                </article>

            </section>
            <!------------ PROJECTS SECTION STRUCTURE ------------------->

            <!------------ CONTACT SECTION STRUCTURE ------------------->
            <section class="contactSection">
                <article class="contactHead container">
                    <h2>Contact Me</h2>
                </article>
                <article class="contactContent container">
                    <div class="contactInfo">
                        <h3 class="contactTitle">Contact Information</h3>
                        <div class="contactData">
                            <div class="contactItem">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=andreyfelipejimcam@gmail.com" target="_blank">
                                    <i class="fa-regular fa-envelope"></i>
                                    <span>andreyfelipejimcam@gmail.com</span>
                                </a>
                            </div>
                            <div class="contactItem">
                                <i class="fa-solid fa-phone"></i>
                                <span>+506 8778 6050</span>
                            </div>
                        </div>
                        <div class="socialInfo">
                            <span>Check out my socials</span>
                            <ul class="wrapper">
                                <li class="icon facebook">
                                    <span class="tooltip">Github</span>
                                    <i class="fa-brands fa-github"></i>
                                </li>
                                <li class="icon twitter">
                                    <span class="tooltip">LinkedIn</span>
                                    <i class="fa-brands fa-linkedin"></i>
                                </li>
                                <li class="icon instagram">
                                    <span class="tooltip">Instagram</span>
                                    <i class="fa-brands fa-instagram"></i>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="contactForm">
                        <form action="#" class="formContainer">
                            <div class="formSpaces nameSpace">
                                <div class="formControl">
                                    <label for="fName">First Name</label>
                                    <input type="text" id="fName">
                                </div>
                                <div class="formControl">
                                    <label for="lName">Last Name</label>
                                    <input type="text" id="lName">
                                </div>
                            </div>

                            <div class="formSpaces">
                                <div class="formControl">
                                    <label for="email">Email</label>
                                    <input type="email" id="email">
                                </div>
                                <div class="formControl">
                                    <label for="phone">Phone Number</label>
                                    <div class="phoneControl">
                                        <select name="countryCode "  id="countryCode">
                                            <!-- HERE WILL APPEAR ALL THE COUNTRIES INTERNATIONAL PREFIX -->
                                        </select>
                                        <input type="text" id="phone">
                                    </div>
                                </div>
                            </div>
                            <div class="formControl">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" cols="90" class="message"></textarea>
                            </div>
                            <button type="submit" class="contactBtn"> <span class="cvText">Send</span></button>

                        </form>
                    </div>
                </article>
            </section>
            <!------------ CONTACT SECTION STRUCTURE ------------------->
    </main>
    <!------------ MAIN STRUCTURE ------------------->


    <!------------ FOOTER STRUCTURE ------------------->

    <footer>
        <div class="footerContainer container">
            <div class="optionsFooter">
                <ul class="footerList">
                    <li><a href="#" class="footerLink">Home</a></li>
                    <li><a href="#" class="footerLink">About Me</a></li>
                    <li><a href="#" class="footerLink">Projects</a></li>
                    <li><a href="#" class="footerLink">Contact</a></li>
                </ul>
            </div>
            <div class="footerSocial">
                <ul class="socialList">
                    <li><a href="" class="socialLink"><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href="" class="socialLink"><i class="fa-brands fa-discord"></i></a></li>
                    <li><a href="" class="socialLink"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="" class="socialLink"><i class="fa-brands fa-github"></i></a></li>
                </ul>
            </div>
            <div class="footerCopy">
                <p>&copy Felipe Jimenez, Developer Website. All rights reserved</p>
            </div>
        </div>
    </footer>

    <!------------ FOOTER STRUCTURE ------------------->



    <script src="js/main.js"></script>
</body>
</html>
<?php
?>

<!DOCTYPE html>
<html lang="en">
<head style="border-left-width: 0  ; border-left-style: solid;">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="Assets/Logohead.png">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"  rel="stylesheet"  type='text/css'>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\brands.js"></script>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\solid.js"></script>
    <script defer src="node_modules\@fortawesome\fontawesome-free\js\fontawesome.js"></script>
    <link rel="stylesheet" href="Assets/Style.css">
    <link rel="stylesheet" href="Assets/Stylecourse.css">
    <link rel="stylesheet" href="Assets/styleAboutUs.css">
    <link rel="stylesheet" href="Assets/membersStories.css">
    <link rel="stylesheet" href="Assets/learningPath.css">

    <title> HTML Course</title>
</head>

<body>
<!-- The Nav bar -->
<section>
    <div class="container-fluid">
        <div class="row">
            <img src="../Assets/Logohead.png" alt="logo">
        </div>
        <div class="row">
            <h1><span>L </span>
                <span>e</span>
                <span>a</span>
                <span>r</span>
                <span>n</span>
                <span>-</span>
                <span>T</span>
                <span>O</span>
                <span>-</span>
                <span>C</span>
                <span>r</span>
                <span>e</span>
                <span>a</span>
                <span>t</span>
                <span>e</span>
            </h1>
        </div>
    </div>
</section>

<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light scrolled">
        <a class="navbar-brand" href="#">
            <img src="../Assets/images/SiteName.png" alt="WebsiteLogo" id="SiteName" width="200px" height="auto"/>
            <img src="../Assets/Logohead.png" alt="WebsiteLogo" id="Logo" width="100px" height="auto"/>
        </a>

        <button class="navbar-toggler collapsed border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <div class="close-icon py-1">✖</div>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul id="navMenu" class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="#">HOME</a>
                </li>
                <li class="nav-item" id="header">
                    <a class="nav-link" href="#about_us" style="text-align: center;">ABOUT US</a>
                </li>
                <li class="nav-item" id="header">
                    <a class="nav-link" href="#courses">COURSES</a>
                </li>

                <li><a class="btn-grad" id="LoginIn" href="login.php">Login</a></li>


        </div>
        </div>
        </li>
        </ul>
        </div>

    </nav>
</header>

<script>
    <div class="sidebar">
        <div class="menu">
            <h2> HTML jhzdflds</h2>
            <a href="HTMLhistory.php"> History</a>
            <a href="variables"> variables</a>
            <a href="variables"> variables</a>
            <a href="variables"> variables</a>
            <a href="variables"> variables</a>
            <a href="variables"> variables</a>
            <a href="variables"> variables</a>

        </div>

    </div>

    <div class="sidebar">
        <section>

            <div class="container-ms" id="FirstSection">
                <div class="Introduction">
                    <div class="container-ms">
                        <div class="row" id="IntroText">
                            <div class="col-6 .col-md-4">
                                <h1> HTML </h1>
                                <p> </p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <section id="about_us">


            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="row">

                                Our partners with more than 200 leading universities and companies to bring flexible,
                                affordable, job-relevant online learning to individuals and organizations worldwide. We offer a
                                range of learning opportunities—from hands-on projects and courses to job-ready certificates and
                                degree programs.
                            </div>
                            <div class="row justify-content-center">
                                <button class="btn btn-primary "><a href="login.php" style="color: white;"> login for free </a>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <img src="../Assets/images/students.webp" class="img-student" alt="student images">
                        </div>
                    </div>


                </div>
            </div>


        </section>
        <section>
            <div class="container">
                <div class="row ">
                    <h1> HTML </h1>
                    <div>
                        ::before
                        <a class="boutton" href=""> < Home </a>
                        <a class="boutton" href=""> Next ></a>
                        ::after
                    </div>
                    <div class="row-cols-xl-auto">
                        <div>
                            <p class="aalisar">

                            </p>
                        </div>
                        <div>
                            <p> The HyperText Markup Language, or simply HTML in
                                his last versionHTML5, is the langage
                                of markup used in creating web pages.
                            </p>
                            <p> HTML is easy to learn - You will enjoy it!</p>
                            <a class="boutton" href="page1"> Start now!  </a>
                        </div>

                    </div>


                </div>

            </div>
        </section>

        <section id="quiz">

            <h1><strong> HTML Quiz </strong></h1>
            <div class="container">
                    <p> test your HTML knowledge </p>
                    <p>
                        <a href="html/quiz" class="boutton"> Start Quiz
                        </a>
                    </p>
            </div>
        </section>

        <div class="container justify-items-end">
             <a class="boutton" href="home"> < Home </a>
             <a class="boutton" href="next"> Next > </a>
        </div>
    </div>

</script>





<footer>
    <div class="container-fluid">
        <div class="col-12">
            <img src="../Assets/Logohead.png" alt="">
            <div>
                Learn in-demand skills in half the time
            </div>
        </div>

        <div class="row offset-1">
            <div class="col">
                <div class="row"><h3>Learn</h3></div>
                <div class="row"><a href="#"> Courses</a></div>
                <div class="row"><a href="#"> Forum</a></div>
                <div class="row"><a href="#"> Classes </a></div>
                <div class="row"><a href="#"> Tests </a></div>
            </div>
            <div class="col">
                <div class="row"><h3>Legal</h3></div>
                <div class="row"><a href="#"> Privacy Policy </a></div>
                <div class="row"><a href="#"> Terms of service </a></div>

            </div>
            <div class="col">
                <div class="row"><h3>More</h3></div>
                <div class="row"><a href="#"> Our team</a></div>
                <div class="row"><a href="#"> for bootcamps</a></div>
                <div class="row"><a href="#"> FAQ </a></div>
                <div class="row"><a href="#"> Contact Us </a></div>
            </div>
        </div>
        <div class="row contactUsIcons justify-content-between">
            <div class="col-4">
                <a href="">
                    <img width="32" height="32" src="../Assets/Icons/contactUsIcons/envelope-fill.svg" alt="">
                </a>
                <a href="">
                    <img width="32" height="32" src="../Assets/Icons/contactUsIcons/facebook.svg" alt="">
                </a>
                <a href="">
                    <img width="32" height="32" src="../Assets/Icons/contactUsIcons/linkedin.svg" alt="">
                </a>
                <a href="">
                    <img width="32" height="32" src="../Assets/Icons/contactUsIcons/instagram.svg" alt="">
                </a>

            </div>
            <div class="col-4">
                Copyright ©2021 LTC, Inc. All rights reserved

            </div>
        </div>
    </div>
</footer>
</body>
</html>

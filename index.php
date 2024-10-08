<?php require("script.php"); ?>

<?php

$response = '';

if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'] || empty($_POST['name']))) {
        $response = "All fields are required.";
    } else {
        $response = sendMail($_POST['email'], $_POST['subject'], $_POST['message'], $_POST['name']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDH</title>

    <link rel="icon" type="image/x-icon" href="NdhLogo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./refactoredStyle.css">
</head>

<body>

    <!-- header area -->
    <header id="header">
        <div class="row m-0">
            <div class="col-3 bgcolor-black">
                <nav class="primary-nav navbar-expand-md">
                    <div class="site-title text-center text-light py-5">
                        <a href="#home" class="navbar-brand font-staat font-size-40"><img class="ndhLogo" src="./NdhLogo.png" alt="NDH logo"></a>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#home" class="nav-item nav-link text-white-50 font-os font-size-16 active">Home</a>
                        <a href="#about_me" class="nav-item nav-link text-white-50 font-os font-size-16 active">About</a>
                        <a href="#services" class="nav-item nav-link text-white-50 font-os font-size-16 active">Services</a>
                        <a href="#portfolio" class="nav-item nav-link text-white-50 font-os font-size-16 active">Portfolio</a>
                        <a href="#footer" class="nav-item nav-link text-white-50 font-os font-size-16 active">Contact me</a>
                    </div>
                </nav>
            </div>
        </div>
        <button class="toggle-button"><span class="fas fa-bars fa-2x"></span></button>

    </header>
    <!-- #header area -->

    <main id="site-main">
        <div class="row m-0">
            <div class="col-md-9 offset-md-3 px-0">

                <!-- site-banner-area -->
                <section class="site-banner" id="home">
                    <div class="banner-area">
                        <div class="author text-center">
                            <div class="author-img"></div>
                            <h1 class="text-white font-staat font-size-40 text-uppercase py-3">Nathan David Hill</h1>
                            <h5 class="text-white font-ram font-size-27">I'm a <span id="typed"></span></h5>
                        </div>
                    </div>
                </section>
                <!-- #site-banner-area -->

                <!-- about-me-area -->
                <section class="about px-4 my-5" id="about_me">
                    <div class="me py-5">
                        <h5 class="text-uppercase font-os font-size-16 text-muted">information</h5>
                        <h1 class="text-uppercase font-staat font-size-34">about me</h1>
                    </div>
                    <div class="row m-0">
                        <div class="col-sm-5 pl-0">
                            <img src="./assets/natedavehill.jpg" alt="profile image" class="img-fluid">

                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-uppercase font-os font-size-16 text-muted">about me</h6>
                            <h5 class="font-ram font-size-20 py-2">My name is Nathan David Hill & I value <span id="typed_2"></span></h5>
                            <p class="front-ram text-black-50 py-2">
                                I am an enthusiastic and professional person who enjoys being part of a successful and productive team.
                                I can communicate effectively with people from diverse cultural backgrounds, at all levels within an organisation.
                                In short, I'm reliable, hardworking and keen to learn and develop my skills in a practical environment.
                                Coding has grown from an “interest” into a deep passion.
                                I have found this journey to be an entire shift in my mindset, perspective and approach to different areas of life.
                                Within a short time, I have grown exponentially and with each day
                                I am grateful and filled with excitement to embrace new challenges and find a solution to the problems
                                I face. I am hungry to continue to grow as a person and a software developer.
                            </p>
                            <div class="d-flex flex-row flex-wrap justify-content-between py-4">
                                <div class="d-flex flex-column">
                                    <p class="font-ram"><b>Birthdate: <span class="text-black-50">15 January 1997</span></b></p>
                                    <p class="font-ram"><b>E-mail: <span class="text-black-50">natedavehill@gmail.com</span></b></p>
                                    <p class="font-ram"><b>Phone: <span class="text-black-50">+1 647 761 8447</span></b></p>
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="font-ram"><b>Degree: <span class="text-black-50">Bsc Computer Science IN PROGRESS</span></b></p>
                                    <p class="font-ram"><b>Tech Stack: <span class="text-black-50">Full Stack</span></b></p>
                                    <p class="font-ram"><b>LinkedIn: <span class="text-black-50">www.linkedin.com/in/nathandavidhill/</span></b></p>
                                </div>
                            </div>
                            <button style="position: relative;" class="btn btn-dark text-uppercase m-3" onclick="window.open('./Documents/LebenslaufNathanDavidHill.pdf', '_blank');">download cv</button>
                            <button style="position: relative;" class="btn btn-dark text-uppercase m-3" onclick="location.href='#footer';">hire me</button>
                        </div>
                    </div>
                </section>
                <!-- #about-me-area -->

                <!-- ability -->
                <section class="skill px-4 py-5 bg-light">
                    <div class="ability py-3">
                        <h5 class="text-uppercase font-os font-size-16 text-muted">abilities</h5>
                        <h1 class="text-uppercase font-staat font-size-34">my skills</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 p-4">
                            <p class="font-ram font-size-16 text-black-50">
                                The process of learning software development has significantly
                                increased my capacity and skills in clear communication and problem-solving.
                                My background in photography has cultivated a meticulous attention to detail
                                and a creative approach to challenges.
                            </p>
                            <p class="font-ram font-size-16 text-black-50">
                                Through various roles, I have honed my ability to learn quickly and adapt, seamlessly transferring
                                skills from past experiences into new contexts.This adaptability allows me to
                                implement actionable steps efficiently and effectively. My dedication to
                                continuous learning and my ability to integrate diverse skills into my work
                                enable me to deliver innovative and impactful solutions.
                            </p>
                        </div>
                        <div class="col-sm-6 bars">
                            <div class="bar-1 m-3">
                                <div class="d-flex d-flex-row justify-content-between">
                                    <p class="font-ram font-size-16">Developer</p>
                                    <span class="font-ram font-size-16">89%</span>
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar bgcolor-black" role="progressbar" style="width: 89%;"></div>
                                </div>
                            </div>
                            <div class="bar-1 m-3">
                                <div class="d-flex d-flex-row justify-content-between">
                                    <p class="font-ram font-size-16">Photography</p>
                                    <span class="font-ram font-size-16">85%</span>
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar bgcolor-black" role="progressbar" style="width: 85%;"></div>
                                </div>
                            </div>
                            <div class="bar-1 m-3">
                                <div class="d-flex d-flex-row justify-content-between">
                                    <p class="font-ram font-size-16">Communication</p>
                                    <span class="font-ram font-size-16">90%</span>
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar bgcolor-black" role="progressbar" style="width: 90%;"></div>
                                </div>
                            </div>
                            <div class="bar-1 m-3">
                                <div class="d-flex d-flex-row justify-content-between">
                                    <p class="font-ram font-size-16">Problem Solving</p>
                                    <span class="font-ram font-size-16">88%</span>
                                </div>
                                <div class="progress" style="height: 3px;">
                                    <div class="progress-bar bgcolor-black" role="progressbar" style="width: 88%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- #ability -->

                <!-- service -->
                <section class="services-are px-4 py-5" id="services">
                    <div class="do py-5">
                        <h5 class="text-uppercase font-os font-size-16 text-muted">what i do</h5>
                        <h1 class="text-uppercase font-staat font-size-34">services</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-4 text-center">
                            <div class="panel border p-4">
                                <span class="icon text-secondary"><i class="fas fa-laptop fa-3x"></i></span>
                                <h4 class="font-ram py-4">Web Design</h4>
                                <p class="font-ram font-size-16 text-black-50">
                                    HTML | CSS | JS | Bootstrap | C# Blazor
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4 text-center">
                            <div class="panel border p-4">
                                <span class="icon text-secondary"><i class="fas fa-lightbulb fa-3x"></i></span>
                                <h4 class="font-ram py-4">Desktop Application</h4>
                                <p class="font-ram font-size-16 text-black-50">
                                    C# Windows Forms | C# WPF | Python Tkinter
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4 text-center">
                            <div class="panel border p-4">
                                <span class="icon text-secondary"><i class="fas fa-camera fa-3x"></i></span>
                                <h4 class="font-ram py-4">Photography</h4>
                                <p class="font-ram font-size-16 text-black-50">
                                    Landscape | Cityscape | Contemporary Art | Portrait
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- #service -->

                <!-- reference -->
                <section class="bg-light py-5 px-4">
                    <div class="refer py-3">
                        <h5 class="text-uppercase font-os font-size-16 text-muted">companies i worked at</h5>
                        <h1 class="text-uppercase font-staat font-size-34">references</h1>
                        <h6 class="text-uppercase font-os font-size-16 text-muted">why don't you try the drag and drop feature here?</h6>
                    </div>
                    <div class="row mb-5 d-flex justify-content-center text-center align-items-center" id="references" style="position: relative;">
                        <div class="col-sm-4 my-3">
                            <img src="./assets/shopify.png" alt="refer0" class="logo img-fluid" draggable="true">
                        </div>
                        <div class="col-sm-4 my-3">
                            <img src="./assets/medienfabrik.png" alt="refer1" class="logo img-fluid" draggable="true">
                        </div>
                        <div class="col-sm-4 my-3">
                            <img src="./assets/relay.png" alt="refer2" class="logo img-fluid" draggable="true">
                        </div>
                        <div class="col-sm-4 my-3">
                            <img src="./assets/giessweinsws.png" alt="refer3" class="logo img-fluid" draggable="true">
                        </div>
                        <div class="col-sm-4 my-3">
                            <img src="./assets/pixelproject.png" alt="refer4" class="logo img-fluid" draggable="true">
                        </div>
                        <div class="col-sm-4 my-3">
                            <img src="./assets/alpdest.png" alt="refer5" class="logo img-fluid" draggable="true">
                        </div>

                    </div>
                </section>
                <!-- #reference -->

                <!-- work -->
                <section class="work py-5 px-4" id="portfolio">
                    <div class="py-3">
                        <h5 class="text-uppercase font-os font-size-16 text-muted">portfolio</h5>
                        <h1 class="text-uppercase font-staat font-size-34">recent</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/ToDoApp.Blazor" target="_blank">
                                    <img src="./assets/toDoApp.png" alt="toDoApp" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">To Do App</div>
                                        <p class="image__description">
                                            C# | Blazor | Sqlite
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/ReceipePage" target="_blank">
                                    <img src="./assets/receipePage.png" alt="receipePage" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">Receipe Page</div>
                                        <p class="image__description">
                                            HTML | CSS
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/LastChance/tree/master/LastChance" target="_blank">
                                    <img src="./assets/newToDo.png" alt="newTodo" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">To Do App 2.0</div>
                                        <p class="image__description">
                                            C# | Blazor
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/TheGameOfLife.py" target="_blank">
                                    <img src="./assets/gameOfLife.png" alt="gameOfLife" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">Game Of Life</div>
                                        <p class="image__description">
                                            Python | ML | Tkinter
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/SocialLinksProfile" target="_blank">
                                    <img src="./assets/social.png" alt="social" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">Social Links</div>
                                        <p class="image__description">
                                            HTML | CSS
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/Tanken" target="_blank">
                                    <img src="./assets/tankenApp.png" alt="tankenApp" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">Gas Price Calc</div>
                                        <p class="image__description">
                                            HTML | CSS | PHP
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/BlogPreviewCard" target="_blank">
                                    <img src="./assets/blog.png" alt="blog" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">Blog Card</div>
                                        <p class="image__description">
                                            HTML | CSS
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4 pb-4" style="position: relative;">
                            <div class="image">
                                <a href="https://github.com/NateDaveHill/QrCodeComponent" target="_blank">
                                    <img src="./assets/qrCode.png" alt="qrCode" class="img-fluid image__img">
                                    <div class="image__overlay">
                                        <div class="image__title">Qr Code Card</div>
                                        <p class="image__description">
                                            HTML | CSS
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- #work -->

                <!-- footer -->
                <footer id="footer" class="pt-5 px-3">
                    <div id="contact_us">
                        <div class="py-3 px-2">
                            <h5 class="text-uppercase font-os font-size-16 text-muted">location</h5>
                            <h1 class="text-uppercase font-staat font-size-34">contact me</h1>
                        </div>
                        <div class="row py-5">
                            <div class="col-sm-6">
                                <h6 class="text-uppercase font-ram font-size-16 text-dark">NDH</h6>
                                <p class="font-ram w-50 font-size-16 text-black-50 pt-3">Let's connect! <br> Feel free to reach out to me through the following channels and also any social media account linked. </p>
                                <p class="font-ram w-50 font-size-16 text-black-50 pt-3">EMAIL: natedavehill@gmail.com</p>
                                <p class="font-ram w-50 font-size-16 text-black-50">PHONE: +1 647 761 8447</p>
                            </div>
                            <div class="col-sm-6 py-4 px-4">
                                <h6 class="text-uppercase font-ram font-size-16">get in touch:</h6>
                                <form action="" method="post" enctype="multipart/form-data" class="py-3">
                                    <div class="col">
                                        <input type="text" name="subject" style="position: relative;" required class="form-control" placeholder="Subject" value="">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="name" required class="form-control" placeholder="Name" value="">
                                        </div>
                                        <div class="col">
                                            <input type="email" name="email" required class="form-control" placeholder="E-Mail" value="">
                                        </div>
                                    </div>
                                    <textarea id="" name="message" required cols="30" rows="3" class="form-control my-4" placeholder="Message"></textarea>
                                    <button type="submit" name="submit" style="position: relative;" class="btn btn-dark">Say Hello!</button>


                                    <?php if ($response != '') : ?>
                                        <div class="alert alert-info mt-3"><?php echo $response; ?></div>
                                    <?php endif; ?>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row bg-light py-5">
                        <div class="col-sm-4 my-5 text-center">
                            <h6 class="font-ram font-size-16 text-black-50">&copy; 2024 NDH All rights reserved</h6>
                        </div>
                        <div class="col-sm-4 my-4 text-center">
                            <div class="footer-title">
                                <a href="#home" style="position: relative;" class="navbar-brand font-staat font-size-40 text-dark">NDH</a>
                                <p class="description font-os font-size-16 text-black-50 text-uppercase">Nathan David Hill</p>
                            </div>
                        </div>
                        <div class="social-icon col-sm-4 my-5 text-center">
                            <a class="social-icon text-black-50 m-1" href="https://www.linkedin.com/in/nathandavidhill/" target="_blank">
                                <span class="mr-3"><i style="position: relative;" class="fab fa-linkedin"></i></span>
                            </a>
                            <a class="social-icon text-black-50 m-1" href="https://www.instagram.com/ndh.jpg/" target="_blank">
                                <span class="mr-3"><i style="position: relative;" class="fab fa-instagram"></i></span>
                            </a>
                            <a class="social-icon text-black-50 m-1" href="https://github.com/NateDaveHill" target="_blank">
                                <span class="mr-3"><i style="position: relative;" class="fab fa-github"></i></span>
                            </a>
                        </div>
                    </div>
                </footer>
                <!-- #footer -->
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js" integrity="sha512-6sSYJqDreZRZGkJ3b+YfdhB3MzmuP9R7X1QZ6g5aIXhRvR1Y/N/P47jmnkENm7YL3oqsmI6AK+V6AD99uWDnIw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="./vendor/typed/typed.min.js"></script>

    <script src="./index.js"></script>

</body>

</html>
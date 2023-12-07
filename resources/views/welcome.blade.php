<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Sylainx </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Sylainx</a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
                data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="navbar-collapse collapse" id="ftco-nav">
                <ul class="navbar-nav nav ml-auto">
                    <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                    <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                    <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                    <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                    <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
                    <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                    <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url(images/brand/sylainx_bg_black.png);">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>
                                <h1 class="mb-4 mt-3">I'm <span>Mario Sylainx Gauthier</span></h1>
                                <h2 class="mb-4">A Fullstack web & Mobile developer</h2>
                                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Hire me</a>
                                    <a href="#projects-section" class="btn btn-white btn-outline-white px-4 py-3">
                                        My works
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-flex no-gutters slider-text align-items-end justify-content-end"
                        data-scrollax-parent="true">
                        <div class="one-third js-fullheight order-md-last img"
                            style="background-image:url(images/brand/sylainx_bg_black.png);">
                            <div class="overlay"></div>
                        </div>
                        <div class="one-forth d-flex align-items-center ftco-animate"
                            data-scrollax=" properties: { translateY: '70%' }">
                            <div class="text">
                                <span class="subheading">Hello!</span>

                                <h1 class="mb-4 mt-3">Co<span>founder</span> HaitianDeveloper</h1>
                                <p><a href="#contact-section" class="btn btn-primary px-4 py-3">Hire me</a>
                                    <a href="#projects-section" class="btn btn-white btn-outline-white px-4 py-3">
                                        My works
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="img-about img d-flex align-items-stretch">
                        <div class="overlay"></div>
                        <div class="img d-flex align-self-stretch align-items-center"
                            style="background-image:url(images/brand/sylainx.png);">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h1 class="big">About</h1>
                            <h2 class="mb-4">About Me</h2>
                            <p>I am a computer engineer passionate about web and mobile
                                programming, and co-founder of Haitian Developers.</p>
                            <ul class="about-info px-md-0 mt-4 px-2">
                                <li class="d-flex"><span>Name:</span> <span>Mario Sylainx S. GAUTHIER</span></li>
                                <li class="d-flex"><span>Date of birth:</span> <span>May 05, 1999</span></li>
                                <li class="d-flex"><span>Address:</span> <span>45 Rte de Cazeau, Fermate 45,
                                        Haiti</span></li>
                                <li class="d-flex"><span>Zip code:</span> <span>06141</span></li>
                                <li class="d-flex"><span>Email:</span> <span>sylainx7@gmail.com</span></li>
                                <li class="d-flex"><span>Phone: </span> <span>+509 4386-6055</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="counter-wrap ftco-animate d-flex mt-md-3">
                        <div class="text">
                            <p class="mb-4">
                                <span class="number" data-number="12">0</span>
                                <span>Project complete</span>
                            </p>
                            <p>
                                <a href="docs/sylainx-informaticien-cv.pdf" target="_blank"
                                    class="btn btn-primary px-3 py-3">
                                    Download CV
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-10 heading-section ftco-animate text-center">
                    <h1 class="big big-2">Resume</h1>
                    <h2 class="mb-4">Resume</h2>
                    <p>
                        A computer engineer passionate about web and mobile programming, and co-founder of Haitian
                        Developers.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2022 - Present</span>
                        <h2>Web developer</h2>
                        <span class="position">ShippEx</span>
                        <p class="mt-4">
                            As a web developer at ShippEx, my role centered around developing and maintaining platform
                            functionalities using Php, MySql, HTML/CSS. I focused on designing and implementing new
                            features while ensuring the ongoing maintenance of the entire system.
                        </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2022 - Present</span>
                        <h2>Mobile developer</h2>
                        <span class="position">ShippEx</span>
                        <p class="mt-4">
                            I co-developed the mobile application for iOS and Android to showcase the company's
                            services. My role was pivotal in crafting an intuitive interface while ensuring seamless
                            communication with the existing infrastructure.
                        </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2021-2023</span>
                        <h2>Fullstack developer</h2>
                        <span class="position">Heartbook</span>
                        <p class="mt-4">
                            As a fullstack developer, I developed a web application showcasing the company and its range
                            of books, combining user-friendliness and attractive design for an optimal user experience.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2018-2022</span>
                        <h2>Computer Engineer</h2>
                        <span class="position">Université INUKA</span>
                        <p class="mt-4">
                            This program focuses on programming, web technologies, databases, and
                            computer security. It delves deeper into skills related to networks and telecommunications.
                            These crucial elements have effectively prepared me to meet the needs of the professional
                            market.
                        </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2019-Present</span>
                        <h2>Online courses</h2>
                        <span class="position">Openclassrooms / LinkedIn Learning</span>
                        <p class="mt-4">
                            My continuous learning on platforms like OpenClassrooms, LinkedIn Learning, and YouTube has
                            refined my skills in web development, cybersecurity, and digital marketing, ensuring
                            industry relevance.
                        </p>
                    </div>
                    <div class="resume-wrap ftco-animate">
                        <span class="date">2011-2018</span>
                        <h2>High School</h2>
                        <span class="position">Collège Saint-Martin de Porrès, Hinche</span>
                        <p class="mt-4">
                            I have developed a strong foundation of skills in leadership, teamwork, and time management.
                            These experiences have shaped my critical thinking, problem-solving abilities, and capacity
                            to adapt to new challenges.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 ftco-animate text-center">
                    <p><a href="docs/sylainx-informaticien-cv.pdf" class="btn btn-primary px-5 py-4">Download CV</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container">
            <div class="row justify-content-center mt-5 py-5">
                <div class="col-md-12 heading-section ftco-animate text-center">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <p>Providing tailor-made solutions, I commit to guiding you toward digital success.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex ftco-animate text-center">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-analysis"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Web development</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 d-flex ftco-animate text-center">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-analysis"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">Moble development</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 d-flex ftco-animate text-center">
                    <a href="#" class="services-1">
                        <span class="icon">
                            <i class="flaticon-analysis"></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">IT Consultant</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    @component('components.sections.skills-section', [
        'skills' => $skills,
    ])
    @endcomponent


    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section ftco-animate text-center">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">My contributions</h2>
                    <p>Explore the realm of my creations, where each project tells a unique story.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/projects/03_shippex_android.jpg);">
                        <div class="overlay"></div>
                        <div class="text p-4 text-center">
                            <h3><a href="https://play.google.com/store/apps/details?id=com.app.shippex"
                                    target="_blank">
                                    ShippEx &amp; Android application</a></h3>
                            <span>Mobile development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/projects/02_creaticshub.png);">
                        <div class="overlay"></div>
                        <div class="text p-4 text-center">
                            <h3><a href="#">CreaticsHub &amp; Web application</a></h3>
                            <span>Web development</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/projects/05_pos.png);">
                        <div class="overlay"></div>
                        <div class="text p-4 text-center">
                            <h3><a href="https://shop.haitianticket.com/">POS &amp; Web application</a></h3>
                            <span>Web development</span>
                        </div>
                    </div>

                    <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                        style="background-image: url(images/projects/07_kreyafin.png);">
                        <div class="overlay"></div>
                        <div class="text p-4 text-center">
                            <h3><a href="#">Kreyafin &amp; Web application</a></h3>
                            <span>Web development</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url(images/projects/04_shippex_ios.jpg);">
                                <div class="overlay"></div>
                                <div class="text p-4 text-center">
                                    <h3><a href="https://apps.apple.com/us/app/shippex/id1616926087">ShippEx &amp; IOS
                                            application</a></h3>
                                    <span>Mobile development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="project img ftco-animate d-flex justify-content-center align-items-center"
                                style="background-image: url(images/projects/01_heartbook.png);">
                                <div class="overlay"></div>
                                <div class="text p-4 text-center">
                                    <h3><a href="https://heartbook-ht.com/">Heartbook &amp; Web application</a></h3>
                                    <span>Web development</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="ftco-section" id="blog-section">
  <div class="container">
   <div class="row justify-content-center mb-5 pb-5">
    <div class="col-md-7 heading-section ftco-animate text-center">
     <h1 class="big big-2">Blog</h1>
     <h2 class="mb-4">Our Blog</h2>
     <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    </div>
   </div>
   <div class="row d-flex">
    <div class="col-md-4 d-flex ftco-animate">
     <div class="blog-entry justify-content-end">
      <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
      </a>
      <div class="text d-block float-right mt-3">
       <div class="d-flex align-items-center meta mb-3">
        <p class="mb-0">
         <span class="mr-2">June 21, 2019</span>
         <a href="#" class="mr-2">Admin</a>
         <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
        </p>
       </div>
       <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
       </h3>
       <p>A small river named Duden flows by their place and supplies it with the necessary
        regelialia.</p>
      </div>
     </div>
    </div>
    <div class="col-md-4 d-flex ftco-animate">
     <div class="blog-entry justify-content-end">
      <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
      </a>
      <div class="text d-block float-right mt-3">
       <div class="d-flex align-items-center meta mb-3">
        <p class="mb-0">
         <span class="mr-2">June 21, 2019</span>
         <a href="#" class="mr-2">Admin</a>
         <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
        </p>
       </div>
       <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
       </h3>
       <p>A small river named Duden flows by their place and supplies it with the necessary
        regelialia.</p>
      </div>
     </div>
    </div>
    <div class="col-md-4 d-flex ftco-animate">
     <div class="blog-entry">
      <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
      </a>
      <div class="text d-block float-right mt-3">
       <div class="d-flex align-items-center meta mb-3">
        <p class="mb-0">
         <span class="mr-2">June 21, 2019</span>
         <a href="#" class="mr-2">Admin</a>
         <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
        </p>
       </div>
       <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a>
       </h3>
       <p>A small river named Duden flows by their place and supplies it with the necessary
        regelialia.</p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </section> --}}

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center">
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="2">0</strong>
                            <span>Awards</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="12">0</strong>
                            <span>Complete Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text">
                            <strong class="number" data-number="3">0</strong>
                            <span>Happy Customers</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>I'm <span>Available</span> for work</h2>
                    <p>
                        Enthusiastic and ready to contribute my skills to a new work environment, drawing inspiration
                        from the flowing river of Duden.
                    </p>
                    <p class="mb-0"><a href="#contact-section" class="btn btn-primary px-5 py-3">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>

    @component('components.sections.contact-section')
    @endcomponent


    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>I am a computer engineer passionate about web and mobile
                            programming, and co-founder of Haitian Developers.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                            <li class="ftco-animate">
                                <a href="https://www.linkedin.com/in/mario-sylainx-gauthier"><span
                                        class="icon-linkedin"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.linkedin.com/in/mario-sylainx-gauthier"><span
                                        class="icon-linkedin"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="https://www.facebook.com/sylainx"><span class="icon-facebook"></span>
                                </a>
                            </li>
                            <li class="ftco-animate">
                                <a href="instagram.com/sylainx7"><span class="icon-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget ml-md-4 mb-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">
                                    <span class="icon-long-arrow-right mr-2"></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#about-section">
                                    <span class="icon-long-arrow-right mr-2"></span>
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="#services-section">
                                    <span class="icon-long-arrow-right mr-2"></span>
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="#projects-section">
                                    <span class="icon-long-arrow-right mr-2"></span>
                                    Projects
                                </a>
                            </li>
                            <li>
                                <a href="#contact-section">
                                    <span class="icon-long-arrow-right mr-2"></span>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a>
                            </li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Mobile
                                    Development</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business
                                    Strategy</a></li>
                            <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>IT Consultant</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">
                                        45 Rte de Cazeau, Fermate 45, Kenscoff, Haïti</span></li>
                                <li>
                                    <a href="#"><span class="icon icon-phone"></span><span class="text">
                                            +509 4386-6055
                                        </span>
                                    </a>
                                </li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">sylainx7@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | Sylainx
                        <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
                            href="https://haitiandevelopers.com" target="_blank">HaitianDeveloper</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>

    <script src="js/main.js"></script>

</body>

</html>

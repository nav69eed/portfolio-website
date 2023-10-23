<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Comment: Update the title of the page
     -->
    <title>Naveed | Portfolio</title>
    <!-- Comment: Include the necessary CSS and JS files -->
    <script src="assets/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer>
    </script>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <!-- <link rel="stylesheet" href="assets/css/fontawesome.css"> -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css" />



    <link rel="stylesheet" href="assets/css/form.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/utilities.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        new WOW().init();
    </script>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
    <div class="loader-container">
        <div class="custom-loader" id="loader"></div>
    </div>

    <nav class="navbar navbar-expand-md shadow sticky-md-top" id="nav">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="images/logo.png" class="logo" alt="logo image" />
                <span class="c-s logo-text">aveed</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home <i
                                class="fa-duotone fa-house"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skill">Skills <i class="fa-duotone fa-gear-code"></i></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#profile">Profile <i class="fa-duotone fa-user"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio
                            <i class="fa-duotone fa-rectangle-vertical-history"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Education <i class="fa-duotone fa-user-graduate"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact <i class="fa-duotone fa-phone"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="home" class="intro container-fluid row mx-auto">
        <div class="col-md-7 intro-left mt-5 ps-5 animate__animated">
            <h2>Hi, I am <span class="c-s name">Naveed Akhtar</span></h2>
            <h3>I am a Specialist <span id="skills" class="c-s"></span></h3>
            <div class="buttons mt-3">
                <a href=""><button class="btn m-2">
                        Hire Me <i class="fa-duotone fa-paper-plane"></i></button></a>
                <a href="images/cv/cv.pdf" download>
                    <button class="btn m-2">
                        Download CV
                        <i class="fa-duotone fa-arrow-down-to-line fa-fade"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="col-md-5 intro-right mt-2 animate__animated"></div>
    </section>

    <section id="skill" class="skills">
        <div class="section-heading text-center mt-2 c-s">
            <h2>Skills</h2>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-skill-content">
                        <div class="barWrapper">
                            <span class="progressText">HTML 5</span>
                            <div class="single-progress-txt">
                                <div class="progress">
                                    <div class="progress-bar wow" role="progressbar" style="--pw: 90%"></div>
                                </div>
                                <h3>90%</h3>
                            </div>
                        </div>
                        <!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">Javascript</span>
                            <div class="single-progress-txt">
                                <div class="progress">
                                    <div class="progress-bar wow" role="progressbar" aria-valuenow="85"
                                        aria-valuemin="10" aria-valuemax="100" style="--pw: 55%"></div>
                                </div>
                                <h3>55%</h3>
                            </div>
                        </div>
                        <!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">C Language</span>
                            <div class="single-progress-txt">
                                <div class="progress">
                                    <div class="progress-bar wow" role="progressbar" aria-valuenow="97"
                                        aria-valuemin="10" aria-valuemax="100" style="--pw: 85%"></div>
                                </div>
                                <h3>85%</h3>
                            </div>
                        </div>
                        <!-- /.barWrapper -->
                        <div class="barWrapper">
                            <span class="progressText">Laravel (PHP)</span>
                            <div class="single-progress-txt">
                                <div class="progress">
                                    <div class="progress-bar wow" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="10" aria-valuemax="100" style="--pw: 70%"></div>
                                </div>
                                <h3>70%</h3>
                            </div>
                        </div>
                        <!-- /.barWrapper -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="barWrapper">
                        <span class="progressText">CSS</span>
                        <div class="single-progress-txt">
                            <div class="progress">
                                <div class="progress-bar wow" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="10" aria-valuemax="100" style="--pw: 85%"></div>
                            </div>
                            <h3>85%</h3>
                        </div>
                    </div>
                    <!-- /.barWrapper -->
                    <div class="barWrapper">
                        <span class="progressText">Wordpress</span>
                        <div class="single-progress-txt">
                            <div class="progress">
                                <div class="progress-bar wow" role="progressbar" aria-valuenow="85"
                                    aria-valuemin="10" aria-valuemax="100" style="--pw: 75%"></div>
                            </div>
                            <h3>75%</h3>
                        </div>
                    </div>
                    <!-- /.barWrapper -->
                    <div class="barWrapper">
                        <span class="progressText">C++</span>
                        <div class="single-progress-txt">
                            <div class="progress">
                                <div class="progress-bar wow" role="progressbar" aria-valuenow="97"
                                    aria-valuemin="10" aria-valuemax="100" style="--pw: 75%"></div>
                            </div>
                            <h3>75%</h3>
                        </div>
                    </div>
                    <!-- /.barWrapper -->
                    <div class="barWrapper">
                        <span class="progressText">Git</span>
                        <div class="single-progress-txt">
                            <div class="progress">
                                <div class="progress-bar wow" role="progressbar" aria-valuenow="90"
                                    aria-valuemin="10" aria-valuemax="100" style="--pw: 95%"></div>
                            </div>
                            <h3>95%</h3>
                        </div>
                    </div>
                    <!-- /.barWrapper -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- <section id="profile" class="profile container-fluid "> -->
    <section id="profile" class="profile container-fluid">
        <div class="profile-title mt-5 mb-3 text-center c-s">
            <h2>My Profiles</h2>
        </div>
        <div class="profile-list mt-5 container">
            <div class="profile-container">
                <div class="profile-item card wow animate__animated animate__fadeInLeft">
                    <div class="first-content">
                        <a href="https://www.linkedin.com/in/naveed-akhtar-b386b2291/" target="_blank">
                            <i class="fa-brands fa-linkedin" style="color: rgb(54, 54, 189)"></i>
                            <h5>LinkedIn</h5>
                        </a>
                    </div>
                    <div class="second-content">
                        <a href="https://www.linkedin.com/in/naveed-akhtar-b386b2291/" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                            <h5>LinkedIn</h5>
                        </a>
                    </div>
                </div>
                <div class="profile-item card wow animate__animated animate__fadeInDown">
                    <div class="first-content">
                        <a href="https://github.com/nav69eed" target="_blank">
                            <i class="fa-brands fa-github" style="color: black"></i>
                            <h5>Github</h5>
                        </a>
                    </div>
                    <div class="second-content">
                        <a href="https://github.com/nav69eed" target="_blank">
                            <i class="fa-brands fa-github"></i>
                            <h5>Github</h5>
                        </a>
                    </div>
                </div>
                <div class="profile-item card wow animate__animated animate__fadeInRight">
                    <div class="first-content">
                        <a href="https://www.facebook.com/profile.php?id=100083276452151" target="_blank">
                            <i class="fa-brands fa-square-facebook" style="color: rgb(54, 54, 189)"></i>
                            <h5>Facebook</h5>
                        </a>
                    </div>
                    <div class="second-content">
                        <a href="https://www.facebook.com/profile.php?id=100083276452151" target="_blank">
                            <i class="fa-brands fa-square-facebook"></i>
                            <h5>Facebook</h5>
                        </a>
                    </div>
                </div>

                <div class="profile-item card wow animate__animated animate__fadeInLeft">
                    <div class="first-content">
                        <a href="https://www.instagram.com/naveedakhtar.56/" target="_blank">
                            <i class="fa-brands fa-instagram" style="color: rgb(236, 33, 57)"></i>
                            <h5>Instagram</h5>
                        </a>
                    </div>
                    <div class="second-content">
                        <a href="https://www.instagram.com/naveedakhtar.56/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                            <h5>Instagram</h5>
                        </a>
                    </div>
                </div>
                <div class="profile-item card wow animate__animated animate__fadeInUp">
                    <div class="first-content">
                        <a href="https://wa.me/+923076594752" target="_blank">
                            <i class="fa-brands fa-whatsapp" style="color: rgb(16, 239, 0)"></i>
                            <h5>Whatsapp</h5>
                        </a>
                    </div>
                    <div class="second-content">
                        <a href="https://wa.me/+923076594752" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                            <h5>Whatsapp</h5>
                        </a>
                    </div>
                </div>
                <div class="profile-item card wow animate__animated animate__fadeInRight">
                    <div class="first-content">
                        <i class="fa-brands fa-twitter" style="color: rgb(111, 197, 231)"></i>
                        <h5>Twitter</h5>
                    </div>
                    <div class="second-content">
                        <a href="">
                            <i class="fa-brands fa-twitter"></i>
                            <h5>Twitter</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio mt-5 mb-3" id="portfolio">
        <!-- Portfolio Section Heading-->
        <h4 class="c-s text-center mb-5">My Work</h4>
        <div class="container project-container">
            <div class="project-item">
                <div class="myCard">
                    <div class="innerCard wow animate__animated animate__fadeInLeft">
                        <div class="frontSide">
                            <img src="https://images.pexels.com/photos/1181449/pexels-photo-1181449.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                alt="Website" class="img-fluid" />
                        </div>
                        <div class="backSide"
                            style="
                  background: url('https://images.pexels.com/photos/1181449/pexels-photo-1181449.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')
                    no-repeat center center/cover;
                ">
                            <p class="h4 title">SEO Website</p>
                            <button class="btn">View Project</button>
                            <p>Category :- HTML,CSS,Js</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="myCard">
                    <div class="innerCard wow animate__animated animate__fadeInDown">
                        <div class="frontSide">
                            <img src="https://images.pexels.com/photos/5940841/pexels-photo-5940841.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                alt="Website" class="img-fluid" />
                        </div>
                        <div class="backSide"
                            style="
                  background: url('https://images.pexels.com/photos/5940841/pexels-photo-5940841.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')
                    no-repeat center center/cover;
                ">
                            <p class="h4 title">Student Management System</p>
                            <a href="https://github.com/nav69eed/CPP-CODE/tree/main/CPP%20PROGRAMMING"
                                target="_blank">
                                <button class="btn">View Project</button>
                            </a>
                            <p>Category:- C++ (OOP)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="myCard">
                    <div class="innerCard wow animate__animated animate__fadeInRight">
                        <div class="frontSide">
                            <img src="https://images.pexels.com/photos/6550162/pexels-photo-6550162.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                alt="Website" class="img-fluid" />
                        </div>
                        <div class="backSide"
                            style="
                  background: url('https://images.pexels.com/photos/6550162/pexels-photo-6550162.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')
                    no-repeat center center/cover;
                ">
                            <p class="h4 title">Library Management System</p>
                            <button class="btn">View Project</button>
                            <p>Category: - C++ (OOP)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="myCard">
                    <div class="innerCard wow animate__animated animate__fadeInLeft">
                        <div class="frontSide">
                            <img src="https://images.pexels.com/photos/1398431/pexels-photo-1398431.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                alt="Website" class="img-fluid" />
                        </div>
                        <div class="backSide"
                            style="
                  background: url('https://images.pexels.com/photos/1398431/pexels-photo-1398431.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')
                    no-repeat center center/cover;
                ">
                            <p class="h4 title">Bank Management System</p>
                            <a href="https://github.com/nav69eed/CPP-CODE/tree/main/bank" target="_blank">
                                <button class="btn">View Project</button></a>
                            <p>Category:- C++(OOP)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="myCard">
                    <div class="innerCard wow animate__animated animate__fadeInUp">
                        <div class="frontSide">
                            <img src="https://imagedelivery.net/CWKmKRBT_UKEnKE7IlUMCg/geekflare.com/2023/06/Astra-starter-template.png/w=1500,h=728"
                                alt="Website" class="img-fluid" />
                        </div>
                        <div class="backSide"
                            style="
                  background: url('https://imagedelivery.net/CWKmKRBT_UKEnKE7IlUMCg/geekflare.com/2023/06/Astra-starter-template.png/w=1500,h=728')
                    no-repeat center center/cover;
                ">
                            <p class="h4 title">Portfolio (Full Stack)</p>
                            <button class="btn">View Project</button>
                            <p>Category :- Laravel (PHP)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-item">
                <div class="myCard">
                    <div class="innerCard wow animate__animated animate__fadeInRight">
                        <div class="frontSide">
                            <img src="https://images.pexels.com/photos/1089306/pexels-photo-1089306.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                alt="Website" class="img-fluid" />
                        </div>
                        <div class="backSide"
                            style="
                  background: url('https://images.pexels.com/photos/1089306/pexels-photo-1089306.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')
                    no-repeat center center/cover;
                ">
                            <p class="h4 title">Flight Reservation System</p>
                            <button class="btn">View Project</button>
                            <p>Category :- C Language</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="education" class="education container-fluid">
        <div class="education-title mt-5 mb-3 text-center c-s">
            <h2>Education</h2>
        </div>
        <div class="row education-timeline-container">
            <div class="education-timeline mt-5 container col-md-8">
                <div class="timeline-item">
                    <span class="timeline-content-line"></span>
                    <div class="">
                        <div class="timeline-content">
                            <h4>Daanish School Chishtian, Bahawalnagar</h4>
                            <p class="c-a">Middle, Matric and ICS</p>
                            <p>2015 - 2022</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <span class="timeline-content-line"></span>
                    <div class="">
                        <div class="timeline-content">
                            <h4>DigiSkill</h4>
                            <p class="c-a">Wordpress Expert</p>
                            <p>2022 - 2022</p>
                        </div>
                    </div>
                </div>

                <div class="timeline-item">
                    <span class="timeline-content-line"></span>
                    <div class="">
                        <div class="timeline-content">
                            <h4>
                                Pakistan Institute of Engineering<br />and Applied Sciences
                                Islamabad
                            </h4>
                            <p class="c-a">BS Computer and Informaton Science</p>
                            <p>2022 - 2026</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <span class="timeline-content-line"></span>
                    <div class="">
                        <div class="timeline-content">
                            <h4>LinkedIn Learning</h4>
                            <p class="c-a">Laravel (PHP) Expert</p>
                            <p>2023 - 2023</p>
                        </div>
                    </div>
                </div>
                <!-- Add more timeline items for each education experience -->
            </div>
        </div>
    </section>

    <!-- <section class="" id="Contact"></section> -->

    <section class="ftco-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section c-s">Lets Connect with me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="">
                        <div class="row no-gutters">
                            <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">

                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    @if (Session::has('fail'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ Session::get('fail') }}
                                        </div>
                                    @endif
                                    <h3 class="mb-4 c-s">Get in touch</h3>
                                    <form action="{{ route('form') }}" method="POST" id="contactForm"
                                        class="contactForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="name">Full Name</label>
                                                    <input type="text" value="{{ old('name') }}"
                                                        class="form-control" name="name" id="name"
                                                        placeholder="Name" />
                                                </div>
                                                @error('name')
                                                    <div class="alert alert-danger" role="alert"
                                                        style="padding: 2px 5px; margin-top:3px">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label" for="email">Email Address</label>
                                                    <input type="email" value="{{ old('email') }}"
                                                        class="form-control" name="email" id="email"
                                                        placeholder="Email" />
                                                </div>
                                                @error('email')
                                                    <div class="alert alert-danger" role="alert"
                                                        style="padding: 2px 5px; margin-top:3px">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="subject">Phone Number</label>
                                                    <input type="text" value="{{ old('subject') }}"
                                                        class="form-control" name="subject" id="subject"
                                                        placeholder="Phone Number" />
                                                </div>
                                                @error('subject')
                                                    <div class="alert alert-danger" role="alert"
                                                        style="padding: 2px 5px; margin-top:3px">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="label" for="#">Message</label>
                                                    <textarea name="message" value="{{ old('message') }}" class="form-control" id="message" cols="30"
                                                        rows="4" placeholder="Message"></textarea>
                                                </div>
                                                @error('message')
                                                    <div class="alert alert-danger" role="alert"
                                                        style="padding: 2px 5px; margin-top:3px">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn mt-4">Submit</button>
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap w-100 p-md-5 p-4">
                                    <h3>Let's get in touch</h3>
                                    <p class="mb-4">
                                        We're open for any suggestion or just to have a chat
                                    </p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa-duotone fa-location-dot"> </span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Address:</span> Nilore, Islamabad Capital
                                                Teritory Pakistan
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-duotone fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Phone:</span>
                                                <a href="tel://+923024512709">+92 302 4512709</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-duotone fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Email:</span>
                                                <a>
                                                    <span>
                                                        naveedakhtarnaveed<br />69@gmail.com
                                                    </span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-duotone fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p>
                                                <span>Website</span>
                                                <a href="#">nav69eed.github.io</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="" id="footer">
        <div class="container mb-5">
            <footer class="pt-5">
                <div class="d-flex justify-content-evenly flex-column flex-sm-row">
                    <div class="col-6 col-md-2 mb-3 justify-content-center">
                        <h5 class="c-s">Links</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="/index.html" class="nav-link p-0 text-body-secondary">Home</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#skill" class="nav-link p-0 text-body-secondary">Skills</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 offset-md-1 mb-3">
                        <form method="POST" action="{{ route('form2') }}">
                            @csrf
                            <h5 class="c-s">Lets Connect</h5>
                            @if (Session::has('success2'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success2') }}
                            </div>
                        @endif
                        @if (Session::has('fail2'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('fail2') }}
                            </div>
                        @endif
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Message</label>
                                <input id="newsletter1" type="text" class="form-control  border-0"
                                    placeholder="Message Here" name="message2" />
                                <button class="btn btn-primary" type="submit">Contact</button>

                            </div>
                            @error('message2')
                                <div class="alert alert-danger" role="alert" style="padding: 2px 5px; margin-top:3px">
                                    {{ $message }}
                                </div>
                            @enderror
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© Copyright by Naveed Akhtar</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="#"><i
                                    class="fa-brands fa-github fa-2xl"></i></a>
                        </li>
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="#"><i
                                    class="fa-brands fa-facebook fa-2xl"></i></a>
                        </li>
                        <li class="ms-3">
                            <a class="" href="#">
                                <i class="fa-brands fa-whatsapp fa-2xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </section>







    <script>
        var typed = new Typed("#skills", {
            strings: [
                "Web Developer",
                "Wordpress Developer",
                "C++ Programmer",
                "C Programmer",
                "Laravel Programmer",
            ],
            typeSpeed: 50,
            smartBackspace: true,
            loop: true,
            loopCount: Infinity,
        });
    </script>

</body>

</html>

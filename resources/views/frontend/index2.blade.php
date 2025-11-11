<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>NexisDev Solution</title>
    <meta name="description" content="NexisDev Solution ">
    <meta name="keywords"
        content="agency, business, corporate, company, clean, modern, personal, portfolio, professional, startup, studio">

    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple_touch_icon.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- All CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>

            <div class="covers">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- =========================== 1. Top Header Section =========================================== -->

    <div class="top-header d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-6 col-md-7 col-12">
                    <div class="top-header-contact">
                        <a href="tel:+1(718)73493">
                            <i class="fas fa-phone-alt"></i>+92 314 4139072
                        </a>
                    </div>
                    <div class="top-header-contact">
                        <a href="mailto:info@example.com">
                            <i class="fas fa-envelope"></i>info@nexisdevsolution.com
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-0 text-right top-header-social">
                    <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://linkedin.com/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- =========================== 2. Menu Section =========================================== -->

    <div class="menu-header d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-2 d-flex align-items-center">
                    <a href="{{ route('home') }}"><img class="logo"
                            src="{{ asset('frontend/images/logo/nexlogo.svg') }}" alt="nexis"></a>
                </div>
                <div class="col-10 d-flex align-items-center">
                    <nav id="mobile-menu" class="menu-area d-lg-flex align-items-center ml-auto">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#process-area">Process</a></li>
                            <li><a href="#services-area">Services</a></li>
                            <li><a href="#portfolio-area">Portfolio</a></li>
                            {{-- <li><a href="#pricing-area">Pricing</a></li> --}}
                            <li><a href="#contact-area">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="mobile-menu"></div>
                    <a href="#contact-area" class="large-blue-button menu-button">Get a quote</a>
                </div>
            </div>
        </div>
    </div>


    <section class="banner">

        <div class="shape-03 text-center">
            <img src="{{ asset('frontend/images/shapes/shape-03.png') }}"
                class="wow animate__animated animate__fadeInDown animate__delay-1s" alt="nexis">
        </div>

        <div class="home-slider">
            <div class="home-slider-content">
                <div class="container position-relative">

                    <div class="banner-floating-text">
                        <h1>Nexis Dev</h1>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-md-6">
                            <div class="banner-text">
                                <h1>Building Modern Websites & Smart Web Solutions</h1>
                                <p>We design and develop high-performing digital experiences that help your business
                                    grow. From stunning websites to scalable web applications — we deliver excellence at
                                    every step.</p>
                                <a href="#contact" class="large-blue-button">Let’s Talk</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6">
                            <div class="banner-image">
                                <img src="{{ asset('frontend/images/banner/home_banner.jpg') }}" class="w-100" alt="nexis">
                                <div class="shape-0">
                                    <img src="{{ asset('frontend/images/shapes/shape-0.png') }}" alt="nexis">
                                </div>
                                <div class="shape-02">
                                    <img src="{{ asset('frontend/images/shapes/shape-02.png') }}" alt="nexis">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-01">
            <img src="{{ asset('frontend/images/shapes/shape-01.png') }}"
                class="wow animate__animated animate__pulse animate__infinite" alt="nexis">
        </div>

        <div class="bottom-arrow text-center">
            <a href="#features-area">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                    style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <path style="fill:#1e2a78;" d="M440.437,301.781L266.656,475.584V10.667C266.656,4.776,261.88,0,255.989,0
               c-5.891,0-10.667,4.776-10.667,10.667v464.917L71.541,301.781c-4.237-4.093-10.99-3.975-15.083,0.262
               c-3.992,4.134-3.992,10.687,0,14.82l192,192c4.16,4.171,10.914,4.179,15.085,0.019c0.006-0.006,0.013-0.013,0.019-0.019l192-192
               c4.093-4.237,3.975-10.99-0.262-15.083c-4.134-3.993-10.687-3.993-14.821,0L440.437,301.781z" />
                    <path d="M255.989,512c-2.831,0.005-5.548-1.115-7.552-3.115l-192-192c-4.093-4.237-3.975-10.99,0.262-15.083
               c4.134-3.992,10.687-3.992,14.82,0l184.469,184.448l184.448-184.448c4.237-4.093,10.99-3.975,15.083,0.262
               c3.993,4.134,3.993,10.687,0,14.821l-192,192C261.521,510.879,258.813,511.999,255.989,512z" />
                    <path d="M255.989,512c-5.891,0-10.667-4.776-10.667-10.667V10.667C245.323,4.776,250.098,0,255.989,0
               c5.891,0,10.667,4.776,10.667,10.667v490.667C266.656,507.224,261.88,512,255.989,512z" />
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
            </a>
        </div>
    </section>

    <!-- =========================== 4. Features Section =========================================== -->

    <section class="features-area " id="process-area">
        <div class="container">
            <div class="section-heading">
                <h1>How It Works</h1>
                <p>From idea to launch — our process is simple, transparent, and focused on your business success.</p>
            </div>
            <div class="row">
                <!-- Step 01 -->
                <div class="col-md-4 col-sm-4 wow animate__animated animate__fadeInLeft">
                    <div class="feature-box">
                        <div class="f-point">
                            <h1>01</h1>
                        </div>
                        <div class="feature">
                            <div class="f-icon">
                                <svg enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                    width="512" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="256"
                                        x2="256" y1="512" y2="0">
                                        <stop offset="0" stop-color="#5558ff" />
                                        <stop offset="1" stop-color="#00c0ff" />
                                    </linearGradient>
                                    <g>
                                        <g>
                                            <path
                                                d="m266.606 4.393c-.001-.001-.002-.002-.003-.003-2.809-2.807-6.657-4.39-10.603-4.39h-210c-8.284 0-15 6.716-15 15v482c0 8.284 6.716 15 15 15h300c8.284 0 15-6.716 15-15v-392c0-3.922-1.562-7.775-4.394-10.607zm4.394 46.82 38.787 38.787h-38.787zm60 430.787h-270v-452h180v75c0 8.284 6.716 15 15 15h75zm105-392c-24.813 0-45 20.187-45 45v258.574c0 31.547 12.536 62.176 34.394 84.033 2.928 2.929 6.767 4.393 10.606 4.393s7.678-1.464 10.606-4.393c21.858-21.857 34.394-52.486 34.394-84.033v-258.574c0-24.813-20.187-45-45-45zm15 303.574c0 17.899-5.346 35.365-15 49.857-9.654-14.491-15-31.958-15-49.857v-92.574h30zm0-122.574h-30v-136c0-8.271 6.729-15 15-15s15 6.729 15 15zm-255-113.719c-9.194-4.029-19.336-6.281-30-6.281-41.355 0-75 33.645-75 75s33.645 75 75 75c10.664 0 20.806-2.252 30-6.281 9.194 4.029 19.336 6.281 30 6.281 41.355 0 75-33.645 75-75s-33.645-75-75-75c-10.664 0-20.806 2.252-30 6.281zm-29.96 113.718c-.014 0-.027.001-.04.001-24.813 0-45-20.187-45-45s20.187-45 45-45c.013 0 .027.001.04.001-9.437 12.544-15.04 28.128-15.04 44.999s5.603 32.455 15.04 44.999zm29.96-11.494c-9.199-8.245-15-20.208-15-33.505s5.801-25.26 15-33.505c9.199 8.245 15 20.208 15 33.505s-5.801 25.26-15 33.505zm75-33.505c0 24.813-20.187 45-45 45-.013 0-.027-.001-.04-.001 9.437-12.544 15.04-28.128 15.04-44.999s-5.603-32.455-15.04-44.999c.014 0 .027-.001.04-.001 24.813 0 45 20.187 45 45zm15 105h-180c-8.284 0-15 6.716-15 15s6.716 15 15 15h180c8.284 0 15-6.716 15-15s-6.716-15-15-15zm-30 60h-120c-8.284 0-15 6.716-15 15s6.716 15 15 15h120c8.284 0 15-6.716 15-15s-6.716-15-15-15z"
                                                fill="url(#SVGID_1_)" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="f-description">
                                <h1>Share Your Idea</h1>
                                <p>Tell us about your vision, goals, and what you want to build. We’ll analyze your
                                    needs and plan the best approach.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="col-md-4 col-sm-4 wow animate__animated animate__fadeInUp">
                    <div class="feature-box">
                        <div class="f-point">
                            <h1>02</h1>
                        </div>
                        <div class="feature">
                            <div class="f-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="44" height="50" viewBox="0 0 44 50">
                                    <image id="invoice" width="44" height="50"
                                        xlink:href="data:img/png;base64,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" />
                                </svg>
                            </div>
                            <div class="f-description">
                                <h1>Get a Proposal</h1>
                                <p>We’ll prepare a detailed project plan, timeline, and quote — so you know exactly what
                                    to expect before we begin.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="col-md-4 col-sm-4 wow animate__animated animate__fadeInRight">
                    <div class="feature-box">
                        <div class="f-point">
                            <h1>03</h1>
                        </div>
                        <div class="feature">
                            <div class="f-icon">
                                <svg id="f_box_3" enable-background="new 0 0 512 512" height="512"
                                    viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g>
                                        <g>
                                            <path
                                                d="m256 0c-124.065 0-225 101.383-225 226v121c0 8.284 6.716 15 15 15h47.58c6.192 17.458 22.865 30 42.42 30h30c8.284 0 15-6.716 15-15v-151c0-8.284-6.716-15-15-15h-30c-19.555 0-36.228 12.541-42.42 30h-32.58v-15c0-108.075 87.477-196 195-196s195 87.925 195 196v15h-32.58c-6.192-17.459-22.865-30-42.42-30h-30c-8.284 0-15 6.716-15 15v151c0 8.284 6.716 15 15 15h30c19.555 0 36.228-12.542 42.42-30h32.58v15c0 24.813-20.187 45-45 45h-90c-41.355 0-75 33.645-75 75 0 8.284 6.716 15 15 15s15-6.716 15-15c0-24.813 20.187-45 45-45h90c41.355 0 75-33.645 75-75 0-33.266 0-119.897 0-151 0-124.617-100.935-226-225-226zm-135 256c0-8.271 6.729-15 15-15h15v121h-15c-8.271 0-15-6.729-15-15zm-30 15v61h-30v-61zm300 76c0 8.271-6.729 15-15 15h-15v-121h15c8.271 0 15 6.729 15 15zm60-15h-30v-61h30z"
                                                fill="url(#SVGID_1_)" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="f-description">
                                <h1>Launch & Grow</h1>
                                <p>We design, develop, and deliver your project — and continue supporting you to ensure
                                    long-term success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="custom-projects">
        <div class="container d-lg-flex align-items-center">
            <div class="section-heading">
                <h1>Custom Projects</h1>
                <p>Have a unique idea or complex project? Our expert team builds tailored digital solutions that fit
                    your goals perfectly — from concept to launch.</p>
            </div>
            <div class="custom-project-button ml-auto">
                <a href="#contact-area" class="large-blue-button menu-button">Get a quote</a>
            </div>
        </div>

        <div class="custom-projects-shape-2">
            <img src="{{ asset('frontend/images/shapes/shape-02.png') }}" alt="nexis">
        </div>
        <div class="custom-projects-circle-1">
            <img src="{{ asset('frontend/images/shapes/shape-circle.png') }}"
                class="wow animate__animated animate__pulse animate__infinite" alt="nexis">
        </div>
        <div class="custom-projects-circle-2">
            <img src="{{ asset('frontend/images/shapes/shape-circle.png') }}" alt="nexis">
        </div>
        <div class="custom-projects-circle-3">
            <img src="{{ asset('frontend/images/shapes/shape-circle.png') }}"
                class="wow animate__animated animate__pulse animate__infinite" alt="nexis">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>

    <!-- =========================== 5. Companies Section =========================================== -->

    {{-- <div class="companies d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-between companies-logo">
                <div class="mx-auto"><img src="images/logo/company-logo/logo-kupa.png" class="mx-auto my-auto" alt="nexis"></div>
                <div class="mx-auto"><img src="images/logo/company-logo/logo-tarabara.png" class="mx-auto my-auto" alt="nexis"></div>
                <div class="mx-auto"><img src="images/logo/company-logo/logo-shiram.png" class="mx-auto my-auto" alt="nexis"></div>
                <div class="mx-auto"><img src="images/logo/company-logo/logo-codex.png" class="mx-auto my-auto" alt="nexis"></div>
                <div class="mx-auto"><img src="images/logo/company-logo/logo-kupa.png" class="mx-auto my-auto" alt="nexis"></div>
                <div class="mx-auto"><img src="images/logo/company-logo/logo-tarabara.png" class="mx-auto my-auto" alt="nexis"></div>
                <div class="mx-auto"><img src="images/logo/company-logo/logo-shiram.png" class="mx-auto my-auto" alt="nexis"></div>
                <div class="mx-auto"><img src="images/logo/company-logo/logo-codex.png" class="mx-auto my-auto" alt="nexis"></div>
            </div>
        </div>
    </div> --}}

    <!-- =========================== 6. Services Section =========================================== -->

    <section class="services-area" id="services-area">
        <div class="container">
            <div class="section-heading">
                <h1>Services we provide</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you.</p>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image text-center mb-3">
                            <i class="fas fa-handshake fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>Consultation</h1>
                            <p>We provide expert consultation to help you plan your project, define clear goals, and
                                choose the best technologies for your business success.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image mb-3">
                            <i class="fas fa-code fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>Web Development</h1>
                            <p>We build fast, scalable, and secure web applications using modern technologies to help
                                your business grow online.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image mb-3">
                            <i class="fas fa-pen-nib fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>Logo Design</h1>
                            <p>We craft unique and memorable logos that represent your brand’s identity and leave a
                                lasting impression.</p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image mb-3">
                            <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>Mobile Applications</h1>
                            <p>We design and develop high-performing Android and iOS apps that help businesses connect
                                with their users seamlessly.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image mb-3">
                            <i class="fas fa-gamepad fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>Game Development</h1>
                            <p>We create engaging and interactive mobile and web games that deliver exciting experiences
                                and strong performance across platforms.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image mb-3">
                            <i class="fas fa-bug fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>Bug Fixing</h1>
                            <p>We efficiently identify and fix system bugs or performance issues to ensure smooth,
                                error-free operation of your applications.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image mb-3">
                            <i class="fas fa-pencil-ruler fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>UI Design</h1>
                            <p>We create intuitive, attractive, and user-focused interfaces that elevate user experience
                                and brand identity.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box">
                        <div class="service-image mb-3">
                            <i class="fas fa-chart-line fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>Audit & Optimization</h1>
                            <p>We analyze and optimize your website or application for speed, SEO, and overall
                                performance.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mx-auto wow animate__animated animate__slideInUp">
                    <div class="service-box ">
                        <div class="service-image mb-3">
                            <i class="fas fa-shopping-cart fa-3x text-primary"></i>
                        </div>
                        <div class="service-text">
                            <h1>E-Commerce</h1>
                            <p>We build scalable and secure online stores with smooth checkout experiences and modern
                                designs.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================== 7. Projects Section =========================================== -->

    <section class="projects-area portfolio" id="portfolio-area">
        <div class="container">
            <div class="section-heading ">
                <h2>Our Portfolio</h2>
                <p>Explore our latest projects showcasing creativity, technology, and excellence. We deliver custom
                    solutions that help businesses grow and stand out online.</p>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="project-menu filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".design">Design</button>
                        <button data-filter=".marketing">Dashboards</button>
                        <button data-filter=".bug">Mobile Apps</button>
                        <button data-filter=".custom">UI/UX</button>
                        <button data-filter=".game">Game Development</button>
                    </div>
                </div>
            </div>

            <div class="row projects-holder grid">
                <div class="col-lg-4 col-6 grid-item design bug">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image01.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item marketing custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image06.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item design custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image04.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item design bug">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image02.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item marketing custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image05.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item marketing bug custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image03.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-6 grid-item design">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image07.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item design marketing">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image08.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item  game">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="{{ asset('frontend/images/projects/image08.png') }}" alt="nexis">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="text-center"><a href="portfolio.html"
                    class="wow animate__animated animate__flipInX large-blue-button">Load More</a></div> --}}
        </div>
    </section>

    <section class="contact-area">
        <div class="container">
            <div class="section-heading  mx-auto wow animate__animated animate__slideInUp">
                <h2>Let’s Work Together</h2>
                <p>Have an idea or project in mind? Let’s discuss how we can turn your vision into reality with our
                    expert team of developers and designers.</p>
            </div>

            <!-- Location -->
            <div class="location-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.9970179245997!2d90.37933665546187!3d23.764471837688824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c755f321f80b%3A0x5b87cdb2ee46b9a1!2sPresidential%20Plaza%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1605596229502!5m2!1sen!2sbd"
                    height="601" style="border:0; width: 100%;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <!-- Address -->
            <div class="address-container wow animate__animated animate__fadeIn">
                <div class="row">
                    <div class="col-sm-4 col-6 d-flex align-items-center">
                        <div class="address-box mx-auto">
                            <img class="mx-auto" src="{{ asset('frontend/images/svgs/map.png') }}" alt="map">
                            <p>Askari 11 Sector B and <br> nearby areas DHA</p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 d-flex align-items-center">
                        <div class="address-box mx-auto">
                            <img class="mx-auto" src="{{ asset('frontend/images/svgs/chatting.png') }}"
                                alt="map">
                            <a href="tel:+923144139072">+92 314 4139072</a>
                            <a href="tel:+923244531747">+92 324 4531747</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-6 mx-auto d-flex align-items-center">
                        <div class="address-box mx-auto">
                            <img class="mx-auto" src="{{ asset('frontend/images/svgs/message.png') }}"
                                alt="map">
                            <a href="mailto:info@nexisdevsolution.com">info@nexisdevsolution.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="contact-form-area wow animate__animated animate__fadeIn" id="contact-area">
                <h2>Leave a message</h2>
                <div class="row">
                    <form id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-4">
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="Your Message" required></textarea>
                                <input class="large-blue-button" type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== 5. Custom Project Section =========================================== -->



    <!-- =========================== 8. Speciality Section =========================================== -->

    <section class="speciality-area" style="background:#f6f6f6;padding-top: 120px;
  padding-bottom: 120px;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-5 col-lg-6 wow animate__animated animate__slideInLeft">
                    <div class="speciality-box sp-first-box">
                        <div class="sp-box-icon text-center">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="53" height="53"
                                viewBox="0 0 53 53">
                                <g>
                                    <g data-name="1">
                                        <image width="53" height="53"
                                            xlink:href="data:img/png;base64,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" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="sp-box-text text-center">
                            <h3><span class="counter">3200</span>+</h3>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                    <div class="speciality-box sp-second-box">
                        <div class="sp-box-icon text-center">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="55" height="49"
                                viewBox="0 0 55 49">
                                <g>
                                    <g data-name="2">
                                        <image id="calendar" width="55" height="49"
                                            xlink:href="data:img/png;base64,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" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="sp-box-text text-center">
                            <h3><span class="counter">08</span>+</h3>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                    <div class="speciality-box sp-third-box">
                        <div class="sp-box-icon text-center">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="55" height="55"
                                viewBox="0 0 55 55">
                                <g>
                                    <g data-name="3">
                                        <image id="verified" width="55" height="55"
                                            xlink:href="data:img/png;base64,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" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="sp-box-text text-center">
                            <h3><span class="counter">1200</span>+</h3>
                            <p>Projects Completed</p>
                        </div>
                    </div>
                    <div class="speciality-box sp-fourth-box">
                        <div class="sp-box-icon text-center">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="55" height="55"
                                viewBox="0 0 55 55">
                                <g>
                                    <g data-name="4">
                                        <image id="speed" width="55" height="55"
                                            xlink:href="data:img/png;base64,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" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="sp-box-text text-center">
                            <h3><span class="counter">900</span>+</h3>
                            <p>Websites Launched</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 speciality-text wow animate__animated animate__slideInRight">
                    <div class="section-heading w-100 mb-28 mt-0 ">
                        <h1>Why You Should Work <br>With Us?</h1>
                        <p>We have a team of experienced professionals in various fields — including Web Design, Web
                            Development, Graphic Design, Digital Marketing, and Mobile App Development. Together, we
                            create solutions that drive success.</p>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg>
                            <p>Innovative designs that bring your ideas to life.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg>
                            <p>We craft modern, fast, and scalable web apps.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg>
                            <p>Building brands with passion, precision, and power.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg>
                            <p>Transforming visions into digital experiences.</p>
                        </div>
                    </div>
                    <div class="speciality">
                        <div class="sp-text">
                            <svg data-name="Why Us" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="25"
                                viewBox="0 0 24 25">
                                <g>
                                    <image width="24" height="25"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAZCAYAAAArK+5dAAADN0lEQVRIiY2WTWhdRRTHf+fNtLGhlFZREaoUbLNwkexiFiliNcTEgJCSlESpECiFunIVsBgSKNqNH+DGjbUQkya6aBVTTcxzYWOC7ap1JVpK6wehKKRQ0JC5PTL3zs279+YmLxfuO2dmzvmf/zn3zMwT+V6p8zQCh4EW4ClgRZQzwH+pm2Qhgi7p2oYAur7YBLyBckrAFtafAJYL9nnwoFt5kDGoOYwBIxmHS8AVlDsCt2LwErBsJqluzYNcdBGoojwfnN9EOR+XJQOUBSgDDST7gUdsJcoxWQTaRFkAjgF/bQGQ1zWXTZ/AtNetidYNPxNoA+ZF6dgmUC2TLLjyeVjrSgIoRwReDbXtKAXYoiSZzAYEJgOJHpRvrXHx0ifB6OiGMhRlWakS2YcyGcY9AjNJiRzPCRxA+UlgsW4pymW/KNMhaLfAN6m/tY6jAeijbQDlZQIy4JmHuZeA2ayND9AZDKsZ1vsFvkD5UuDspuVSBkWZoFaW2aKND9CEsiqa7MwQvUE07ijfsreBCyUZ9KNMSElZgmxAabF2Lba/m0nZy5sC7SgLoSvuCVwuYy5KJzBXQmAYZcxn4B32lBj8CLwsygwwI0oryjWB11DGQyDf0vOlJdT4YMRncBflMYHdKPcLhpcFhlDOifId8IEoo+kmCptysybYG7epXaMaOqGtyCYYfoqyT+A9lNG6zGuyndBFX4syAAyJMr/JRnpfND6iXxdlsA5z/zSjPC7wszw7prsEVlB2CjyK8vcWjkaUaIvdnMq5kGVvxTr+NWsM+49t1pjy0ndWUZpERrF0YVx4w1yXcXRYx7JxXKwEow+t4xfreME6RrIAWSB/MJatmZp+0DhmTGLbG8/5n5Dui6L8hr/NFCv+RqtTCvLHtN+U1XBpvYWy5CcrGSZ/mIhW41i1EW8bR9U6mtfZRYFpVib6QybitIlYMhGNJuJsxfFuup4e1ymTG8AhUaaAI8D10FnTolwF/gQcysMCzwDdKCcEdoQsjwuMpxnHuD2nwmW88SI5gTIs8HTOoagn44+BdwR+z93b/n3lZJjZ/O+Hz8SfN80CT/rvA3Er/yrwA8pXwD/F4PED/A/0pq+mniCmxwAAAABJRU5ErkJggg==" />
                                </g>
                            </svg>
                            <p>Smart solutions that help your business grow.</p>
                        </div>
                    </div>
                    <a href="#contact-area"
                        class="wow animate__animated animate__flipInX large-blue-button mt-40 speciality-button">Contact
                        Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================== 9. Post Section =========================================== -->

    {{-- <section class="posts-area">
        <div class="container">
            <div class="section-heading text-center mx-auto">
                <h1>Latest Posts</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you.</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href="blog-details.html"><img src="images/blog/post-01.png" alt="nexis"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href="blog.html">News</a>
                            <h2><a href="blog-details.html">Why you should hire UI/UX Guy before work.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href="blog-details.html"><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href="blog-details.html"><img src="images/blog/post-02.png" alt="nexis"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href="blog.html">News</a>
                            <h2><a href="blog-details.html">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href="blog-details.html"><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 offset-lg-0 offset-md-2">
                    <div class="post">
                        <div class="post-thumbnail">
                            <a href="blog-details.html"><img src="images/blog/post-03.png" alt="nexis"></a>
                        </div>
                        <div class="post-excerpt">
                            <a href="blog.html">News</a>
                            <h2><a href="blog-details.html">A good website starts with a good idea and great people.</a></h2>
                            <p>Lorem ipsum, dolor sit amet conse cte tur adipisicing elit. Vitae ipsam provi dent ut
                                quod esse iste quam corrupti.</p>
                            <hr>
                            <div class="post-extra">
                                <p>Feb 22, 2017</p>
                                <a href="blog-details.html"><i class="fas fa-long-arrow-alt-right"></i> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- =========================== 10. Review Section =========================================== -->

    {{-- <section class="review-area">
        <div class="container">
            <div class="section-heading text-center mx-auto mb-28">
                <h1>Client Reviews</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you.</p>
            </div>
            <div class="rating text-center mx-auto mb-72">
                <p>Average rating <span>4.9 / 5 <i class="fas fa-star"></i></span></p>
            </div>
            <div class="row review-slider">
                <div>
                    <div class="review">
                        <div class="review-text">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEKElEQVRIiYWXXYhVVRTHf+vcY8kYmZI0kQxkEQkV9VKSFakQlIb4kJGmYVSM1UMPCT0EimFRD75E9VD4NNN3YYIGlVL2kqSGFfgQfVBRgmhZWpMz56xY++x979n77uscGGZ/ra//+rwi+5RpvruA+4AlwGXACWAUeDciU5A8n4tR1gOrBG4AZgBHgduL3GtRSlFGRTklym5RlolyUJQnpYaiZrho/kd/Eu9HipqdRcXxouaFomZWUTNW1Lzq7iouKO1h8s1GOQwsEHgN2Ar8EqwDHheo2hZ3le4t16CMA8eB9QJvAWf92xuBDUAdC1cWAJ8BpwSuBL4n8YpAmTkLStjyCWA78Kwom4GpFFX/WsuiivjsE/gR5bYBzMM3JZlQEWWpF7wK2NkXB9rl51bOcs/oJa/lyhxRa184+v43FwG7BJ4GPmgJigQbfTCm7DSgXCtNBC9D+SND1AGeEXgQZR5wOoPINjEfK9sSNMJ3Pcp2gZuB38zQslM5HqMCR1A+zRBdA3wiymxnEbwB7I1gV4YFl04rskgpTwlOqR9QngN2m6Jm+Uxp8nhthnAWyl6B74ClKGdzUIopqEz6YI0QEbjXo3E/MN6+K8uKeShzgP0Zpi+i/A7cYamSBl7L+gdQXm/HgPSifxzlMcGlXpu38/mdAodQ/ksIZ7h8VO4R+KcFcWS5Xy9HeSi1GtgkcAxlR+aOspxycB4CqoTpcmAS5b0cocTFZQ7Kz5m7daK8D0zkFDfh13nNNCFcJOpqsPYRxu/mo6jQZEkL1rko84GPBilediYZkaYMRv5AWQgczMRBuh4B/gbOSCxgLnAh8PUgxc3yISNOYDSmpYtw2ONLoruyRgO8HGq14IrLhGVCouiQNHDvsEyQhq2l3Z/A8wJfmnD7JpK8tZeWz6sNum4jUVdsrFAsQVnpXw9Jk2ZVgsyvpqQot3gEVBTrJFcBB1BWNMLV+zv2zZgoYxkfX41yVGAR8IVVP2no09g4ibIp6yrYgvJKWU66TZ0Q9g8Hvf1PKEeAxWLClX99plR97XVAdqB8KLDZ1XZpaT0doXRx6t7tsoj2fh/ckGLLJaRaY7nSEVxObvCQnQuFTkvhS20k8gNDPdCAeC+hwgXLzaI9LvjOTRj24WRYlDXAO8F9aa/PBLNjESwPkWqTy1SWKCbs4H0s8BVw9wCE2lC39252tJZqh7XA+cDHfto8MYAo7KVbEeEmlIeBja4cTw85vl50hwkNUExDFNAouhkCC0W5FTgvCM+O0fGZ9CxvRBSecTTVZWY1i9RCemp1QqDlBEaI9c5cxTThf9GMNjYuxwUnYeLPLweuAL7x599a4RG4xE8qiab9PMANqMdsgHzEdzX7NXJG4FHwvT0mMNeYlWtR9gOf+/MDfhB5E+Vtj1wfCB5Bc5U1oo3A6v8BZJW4ayu2muUAAAAASUVORK5CYII=" />
                                </g>
                            </svg>
                            <p>Li lingues differe solmen in li grammat
                                ca, li pronuncia tion e li plu commun vocabules. Omnicos directe al desi
                                lite de un nov lingua fusa.</p>
                            <svg class="float-right" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image data-name="quote copy" width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEJklEQVRIiY2XW4iVVRTHf+s732SIlZlJllFmEYZYiIZZRg9dhi5UL9GDFkp0oZcuYirYQ6IykHSleqmHLhBFkFQQgUZQmglqlBBRjEmKpTZpDjXNmbNi7b2/Ofvb3z7agcP51jp73f573T6RrQrwLPA4UHDqzyHgNmBXdPJ6lI8FzshKOxO0Bf7Gn3kaWFcCDwBPAiuA74GWaE8VBcqDAl8CEwP/bGArylvAewKSMewcFHgCeAx4HmVXWXQYAFYDm1KBupZx/g6BH4E7gI9Q7gR+Ah4S+DdjtNIzGXXcF4ArgVVmfApwsIdAjRf4wygngHMCa5rYVSid1NcEQYl4vwCLymKsbkLyBlNeIcpY9QzuWRvXpTX0isrBcDUdi5xIUU4opS1p7rc7C7yWKQqQNhCL6DbwR+CZI+2y1W4cytIJAjuBvyK6Qy/UuvRmlO1Br/spWz7mdiqYQpjQu0VZCmxzkSsqsXQeuUXAoyh3u4oiRP4/BFNUZkV0IR72HELx8w/AqzFaZelSJYItL5jSK11NK/sCW1Ona0j5/37Fvp5vkXcs8jGBs3pC3kRiosBTwCDKPoHjUQ2fzOH4ufCRtxlAednaZmgerWDQzh5FOZxRKqLj1Gax9qysAd4PZViJDIu6djyaBCKGthl/BuUK4JMk6o4oR13ftvvqChZJnf+MslRw7XV9JspHBF5LkLW2PlK2RhkRXAbORJnujPo7NCPbBPqSPOjDCx8PBuyft4EPRZkTGbAu+A4wIZMPk61ULfKKMejusev1DCtB4JjUvZ4EnOYaRr0STgh8nTh6pmvdzYqZLrA/Nh4nlR2+FjiC8lsiOCVEPxg51HWunhsXi7osT89djvK5N54vrSWiLpKRRPCi4NyfOeNRlDegDAP7k4y3azwXZU9ZjmYFL0XpF1PQ/O8qlG9SZzMlZom8BTiQODgnlOuOqsPFsBr9hnkGfJUIikA/ypuniPphYDHKhRndi0MJD43fOUqfwC1YWfgcXihNpbYCXWMLREapsS5B3Up2l8A9xPftz1qVLAFeFDdY2pTid7hlqMvOL1zpKUOJoH2eA7a4+65XwK3gGtVMYEiUm+xcBp3LUBYI7jwW+QTgRutOYoudhq2mOcnmoSwP6KQda75DRbla/LhNUanod4FXJMx1P1KV08V7erCHkK1aH4Qu9lmmd9vP4TDnc8lXhBZ+PrA2dE/iZaKgKWT0VGAvuAl2X26zFd8Nu00sHUbwEura7Nxqm6kil2rKJIptPVon6sanRdR/EuU2KMYy2+7NwOuh010HfBcHVxm3r/Xb2ZblwO3iXwyMvxF1UNWvoo6SVYo5a83DNhYrp3uBC8RvO5bAv6e+2QJpW4iNPRuJA+GtwxrDJpQNNhYbhpvQ2z43A+Vb4DzgH+DT8GZiLyKNtQzgP84OpYtpBIQgAAAAAElFTkSuQmCC" />
                                </g>
                            </svg>
                        </div>
                        <div class="client-profile">
                            <img src="images/clients/client.png" alt="nexis">
                            <div class="client-details">
                                <h2>Nathaneal Down</h2>
                                <p>HD Manager</p>
                                <span class="client-rating">5 / 5 <i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review">
                        <div class="review-text">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEKElEQVRIiYWXXYhVVRTHf+vcY8kYmZI0kQxkEQkV9VKSFakQlIb4kJGmYVSM1UMPCT0EimFRD75E9VD4NNN3YYIGlVL2kqSGFfgQfVBRgmhZWpMz56xY++x979n77uscGGZ/ra//+rwi+5RpvruA+4AlwGXACWAUeDciU5A8n4tR1gOrBG4AZgBHgduL3GtRSlFGRTklym5RlolyUJQnpYaiZrho/kd/Eu9HipqdRcXxouaFomZWUTNW1Lzq7iouKO1h8s1GOQwsEHgN2Ar8EqwDHheo2hZ3le4t16CMA8eB9QJvAWf92xuBDUAdC1cWAJ8BpwSuBL4n8YpAmTkLStjyCWA78Kwom4GpFFX/WsuiivjsE/gR5bYBzMM3JZlQEWWpF7wK2NkXB9rl51bOcs/oJa/lyhxRa184+v43FwG7BJ4GPmgJigQbfTCm7DSgXCtNBC9D+SND1AGeEXgQZR5wOoPINjEfK9sSNMJ3Pcp2gZuB38zQslM5HqMCR1A+zRBdA3wiymxnEbwB7I1gV4YFl04rskgpTwlOqR9QngN2m6Jm+Uxp8nhthnAWyl6B74ClKGdzUIopqEz6YI0QEbjXo3E/MN6+K8uKeShzgP0Zpi+i/A7cYamSBl7L+gdQXm/HgPSifxzlMcGlXpu38/mdAodQ/ksIZ7h8VO4R+KcFcWS5Xy9HeSi1GtgkcAxlR+aOspxycB4CqoTpcmAS5b0cocTFZQ7Kz5m7daK8D0zkFDfh13nNNCFcJOpqsPYRxu/mo6jQZEkL1rko84GPBilediYZkaYMRv5AWQgczMRBuh4B/gbOSCxgLnAh8PUgxc3yISNOYDSmpYtw2ONLoruyRgO8HGq14IrLhGVCouiQNHDvsEyQhq2l3Z/A8wJfmnD7JpK8tZeWz6sNum4jUVdsrFAsQVnpXw9Jk2ZVgsyvpqQot3gEVBTrJFcBB1BWNMLV+zv2zZgoYxkfX41yVGAR8IVVP2no09g4ibIp6yrYgvJKWU66TZ0Q9g8Hvf1PKEeAxWLClX99plR97XVAdqB8KLDZ1XZpaT0doXRx6t7tsoj2fh/ckGLLJaRaY7nSEVxObvCQnQuFTkvhS20k8gNDPdCAeC+hwgXLzaI9LvjOTRj24WRYlDXAO8F9aa/PBLNjESwPkWqTy1SWKCbs4H0s8BVw9wCE2lC39252tJZqh7XA+cDHfto8MYAo7KVbEeEmlIeBja4cTw85vl50hwkNUExDFNAouhkCC0W5FTgvCM+O0fGZ9CxvRBSecTTVZWY1i9RCemp1QqDlBEaI9c5cxTThf9GMNjYuxwUnYeLPLweuAL7x599a4RG4xE8qiab9PMANqMdsgHzEdzX7NXJG4FHwvT0mMNeYlWtR9gOf+/MDfhB5E+Vtj1wfCB5Bc5U1oo3A6v8BZJW4ayu2muUAAAAASUVORK5CYII=" />
                                </g>
                            </svg>
                            <p>Li lingues differe solmen in li grammat
                                ca, li pronuncia tion e li plu commun vocabules. Omnicos directe al desi
                                lite de un nov lingua fusa.</p>
                            <svg class="float-right" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image data-name="quote copy" width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEJklEQVRIiY2XW4iVVRTHf+s732SIlZlJllFmEYZYiIZZRg9dhi5UL9GDFkp0oZcuYirYQ6IykHSleqmHLhBFkFQQgUZQmglqlBBRjEmKpTZpDjXNmbNi7b2/Ofvb3z7agcP51jp73f573T6RrQrwLPA4UHDqzyHgNmBXdPJ6lI8FzshKOxO0Bf7Gn3kaWFcCDwBPAiuA74GWaE8VBcqDAl8CEwP/bGArylvAewKSMewcFHgCeAx4HmVXWXQYAFYDm1KBupZx/g6BH4E7gI9Q7gR+Ah4S+DdjtNIzGXXcF4ArgVVmfApwsIdAjRf4wygngHMCa5rYVSid1NcEQYl4vwCLymKsbkLyBlNeIcpY9QzuWRvXpTX0isrBcDUdi5xIUU4opS1p7rc7C7yWKQqQNhCL6DbwR+CZI+2y1W4cytIJAjuBvyK6Qy/UuvRmlO1Br/spWz7mdiqYQpjQu0VZCmxzkSsqsXQeuUXAoyh3u4oiRP4/BFNUZkV0IR72HELx8w/AqzFaZelSJYItL5jSK11NK/sCW1Ona0j5/37Fvp5vkXcs8jGBs3pC3kRiosBTwCDKPoHjUQ2fzOH4ufCRtxlAednaZmgerWDQzh5FOZxRKqLj1Gax9qysAd4PZViJDIu6djyaBCKGthl/BuUK4JMk6o4oR13ftvvqChZJnf+MslRw7XV9JspHBF5LkLW2PlK2RhkRXAbORJnujPo7NCPbBPqSPOjDCx8PBuyft4EPRZkTGbAu+A4wIZMPk61ULfKKMejusev1DCtB4JjUvZ4EnOYaRr0STgh8nTh6pmvdzYqZLrA/Nh4nlR2+FjiC8lsiOCVEPxg51HWunhsXi7osT89djvK5N54vrSWiLpKRRPCi4NyfOeNRlDegDAP7k4y3azwXZU9ZjmYFL0XpF1PQ/O8qlG9SZzMlZom8BTiQODgnlOuOqsPFsBr9hnkGfJUIikA/ypuniPphYDHKhRndi0MJD43fOUqfwC1YWfgcXihNpbYCXWMLREapsS5B3Up2l8A9xPftz1qVLAFeFDdY2pTid7hlqMvOL1zpKUOJoH2eA7a4+65XwK3gGtVMYEiUm+xcBp3LUBYI7jwW+QTgRutOYoudhq2mOcnmoSwP6KQda75DRbla/LhNUanod4FXJMx1P1KV08V7erCHkK1aH4Qu9lmmd9vP4TDnc8lXhBZ+PrA2dE/iZaKgKWT0VGAvuAl2X26zFd8Nu00sHUbwEura7Nxqm6kil2rKJIptPVon6sanRdR/EuU2KMYy2+7NwOuh010HfBcHVxm3r/Xb2ZblwO3iXwyMvxF1UNWvoo6SVYo5a83DNhYrp3uBC8RvO5bAv6e+2QJpW4iNPRuJA+GtwxrDJpQNNhYbhpvQ2z43A+Vb4DzgH+DT8GZiLyKNtQzgP84OpYtpBIQgAAAAAElFTkSuQmCC" />
                                </g>
                            </svg>
                        </div>
                        <div class="client-profile">
                            <img src="images/clients/client.png" alt="nexis">
                            <div class="client-details">
                                <h2>Nathaneal Down</h2>
                                <p>HD Manager</p>
                                <span class="client-rating">4.8 / 5 <i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review">
                        <div class="review-text">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEKElEQVRIiYWXXYhVVRTHf+vcY8kYmZI0kQxkEQkV9VKSFakQlIb4kJGmYVSM1UMPCT0EimFRD75E9VD4NNN3YYIGlVL2kqSGFfgQfVBRgmhZWpMz56xY++x979n77uscGGZ/ra//+rwi+5RpvruA+4AlwGXACWAUeDciU5A8n4tR1gOrBG4AZgBHgduL3GtRSlFGRTklym5RlolyUJQnpYaiZrho/kd/Eu9HipqdRcXxouaFomZWUTNW1Lzq7iouKO1h8s1GOQwsEHgN2Ar8EqwDHheo2hZ3le4t16CMA8eB9QJvAWf92xuBDUAdC1cWAJ8BpwSuBL4n8YpAmTkLStjyCWA78Kwom4GpFFX/WsuiivjsE/gR5bYBzMM3JZlQEWWpF7wK2NkXB9rl51bOcs/oJa/lyhxRa184+v43FwG7BJ4GPmgJigQbfTCm7DSgXCtNBC9D+SND1AGeEXgQZR5wOoPINjEfK9sSNMJ3Pcp2gZuB38zQslM5HqMCR1A+zRBdA3wiymxnEbwB7I1gV4YFl04rskgpTwlOqR9QngN2m6Jm+Uxp8nhthnAWyl6B74ClKGdzUIopqEz6YI0QEbjXo3E/MN6+K8uKeShzgP0Zpi+i/A7cYamSBl7L+gdQXm/HgPSifxzlMcGlXpu38/mdAodQ/ksIZ7h8VO4R+KcFcWS5Xy9HeSi1GtgkcAxlR+aOspxycB4CqoTpcmAS5b0cocTFZQ7Kz5m7daK8D0zkFDfh13nNNCFcJOpqsPYRxu/mo6jQZEkL1rko84GPBilediYZkaYMRv5AWQgczMRBuh4B/gbOSCxgLnAh8PUgxc3yISNOYDSmpYtw2ONLoruyRgO8HGq14IrLhGVCouiQNHDvsEyQhq2l3Z/A8wJfmnD7JpK8tZeWz6sNum4jUVdsrFAsQVnpXw9Jk2ZVgsyvpqQot3gEVBTrJFcBB1BWNMLV+zv2zZgoYxkfX41yVGAR8IVVP2no09g4ibIp6yrYgvJKWU66TZ0Q9g8Hvf1PKEeAxWLClX99plR97XVAdqB8KLDZ1XZpaT0doXRx6t7tsoj2fh/ckGLLJaRaY7nSEVxObvCQnQuFTkvhS20k8gNDPdCAeC+hwgXLzaI9LvjOTRj24WRYlDXAO8F9aa/PBLNjESwPkWqTy1SWKCbs4H0s8BVw9wCE2lC39252tJZqh7XA+cDHfto8MYAo7KVbEeEmlIeBja4cTw85vl50hwkNUExDFNAouhkCC0W5FTgvCM+O0fGZ9CxvRBSecTTVZWY1i9RCemp1QqDlBEaI9c5cxTThf9GMNjYuxwUnYeLPLweuAL7x599a4RG4xE8qiab9PMANqMdsgHzEdzX7NXJG4FHwvT0mMNeYlWtR9gOf+/MDfhB5E+Vtj1wfCB5Bc5U1oo3A6v8BZJW4ayu2muUAAAAASUVORK5CYII=" />
                                </g>
                            </svg>
                            <p>Li lingues differe solmen in li grammat
                                ca, li pronuncia tion e li plu commun vocabules. Omnicos directe al desi
                                lite de un nov lingua fusa.</p>
                            <svg class="float-right" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image data-name="quote copy" width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEJklEQVRIiY2XW4iVVRTHf+s732SIlZlJllFmEYZYiIZZRg9dhi5UL9GDFkp0oZcuYirYQ6IykHSleqmHLhBFkFQQgUZQmglqlBBRjEmKpTZpDjXNmbNi7b2/Ofvb3z7agcP51jp73f573T6RrQrwLPA4UHDqzyHgNmBXdPJ6lI8FzshKOxO0Bf7Gn3kaWFcCDwBPAiuA74GWaE8VBcqDAl8CEwP/bGArylvAewKSMewcFHgCeAx4HmVXWXQYAFYDm1KBupZx/g6BH4E7gI9Q7gR+Ah4S+DdjtNIzGXXcF4ArgVVmfApwsIdAjRf4wygngHMCa5rYVSid1NcEQYl4vwCLymKsbkLyBlNeIcpY9QzuWRvXpTX0isrBcDUdi5xIUU4opS1p7rc7C7yWKQqQNhCL6DbwR+CZI+2y1W4cytIJAjuBvyK6Qy/UuvRmlO1Br/spWz7mdiqYQpjQu0VZCmxzkSsqsXQeuUXAoyh3u4oiRP4/BFNUZkV0IR72HELx8w/AqzFaZelSJYItL5jSK11NK/sCW1Ona0j5/37Fvp5vkXcs8jGBs3pC3kRiosBTwCDKPoHjUQ2fzOH4ufCRtxlAednaZmgerWDQzh5FOZxRKqLj1Gax9qysAd4PZViJDIu6djyaBCKGthl/BuUK4JMk6o4oR13ftvvqChZJnf+MslRw7XV9JspHBF5LkLW2PlK2RhkRXAbORJnujPo7NCPbBPqSPOjDCx8PBuyft4EPRZkTGbAu+A4wIZMPk61ULfKKMejusev1DCtB4JjUvZ4EnOYaRr0STgh8nTh6pmvdzYqZLrA/Nh4nlR2+FjiC8lsiOCVEPxg51HWunhsXi7osT89djvK5N54vrSWiLpKRRPCi4NyfOeNRlDegDAP7k4y3azwXZU9ZjmYFL0XpF1PQ/O8qlG9SZzMlZom8BTiQODgnlOuOqsPFsBr9hnkGfJUIikA/ypuniPphYDHKhRndi0MJD43fOUqfwC1YWfgcXihNpbYCXWMLREapsS5B3Up2l8A9xPftz1qVLAFeFDdY2pTid7hlqMvOL1zpKUOJoH2eA7a4+65XwK3gGtVMYEiUm+xcBp3LUBYI7jwW+QTgRutOYoudhq2mOcnmoSwP6KQda75DRbla/LhNUanod4FXJMx1P1KV08V7erCHkK1aH4Qu9lmmd9vP4TDnc8lXhBZ+PrA2dE/iZaKgKWT0VGAvuAl2X26zFd8Nu00sHUbwEura7Nxqm6kil2rKJIptPVon6sanRdR/EuU2KMYy2+7NwOuh010HfBcHVxm3r/Xb2ZblwO3iXwyMvxF1UNWvoo6SVYo5a83DNhYrp3uBC8RvO5bAv6e+2QJpW4iNPRuJA+GtwxrDJpQNNhYbhpvQ2z43A+Vb4DzgH+DT8GZiLyKNtQzgP84OpYtpBIQgAAAAAElFTkSuQmCC" />
                                </g>
                            </svg>
                        </div>
                        <div class="client-profile">
                            <img src="images/clients/client-02.png" alt="nexis">
                            <div class="client-details">
                                <h2>Nathaneal Down</h2>
                                <p>HD Manager</p>
                                <span class="client-rating">5 / 5 <i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review">
                        <div class="review-text">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEKElEQVRIiYWXXYhVVRTHf+vcY8kYmZI0kQxkEQkV9VKSFakQlIb4kJGmYVSM1UMPCT0EimFRD75E9VD4NNN3YYIGlVL2kqSGFfgQfVBRgmhZWpMz56xY++x979n77uscGGZ/ra//+rwi+5RpvruA+4AlwGXACWAUeDciU5A8n4tR1gOrBG4AZgBHgduL3GtRSlFGRTklym5RlolyUJQnpYaiZrho/kd/Eu9HipqdRcXxouaFomZWUTNW1Lzq7iouKO1h8s1GOQwsEHgN2Ar8EqwDHheo2hZ3le4t16CMA8eB9QJvAWf92xuBDUAdC1cWAJ8BpwSuBL4n8YpAmTkLStjyCWA78Kwom4GpFFX/WsuiivjsE/gR5bYBzMM3JZlQEWWpF7wK2NkXB9rl51bOcs/oJa/lyhxRa184+v43FwG7BJ4GPmgJigQbfTCm7DSgXCtNBC9D+SND1AGeEXgQZR5wOoPINjEfK9sSNMJ3Pcp2gZuB38zQslM5HqMCR1A+zRBdA3wiymxnEbwB7I1gV4YFl04rskgpTwlOqR9QngN2m6Jm+Uxp8nhthnAWyl6B74ClKGdzUIopqEz6YI0QEbjXo3E/MN6+K8uKeShzgP0Zpi+i/A7cYamSBl7L+gdQXm/HgPSifxzlMcGlXpu38/mdAodQ/ksIZ7h8VO4R+KcFcWS5Xy9HeSi1GtgkcAxlR+aOspxycB4CqoTpcmAS5b0cocTFZQ7Kz5m7daK8D0zkFDfh13nNNCFcJOpqsPYRxu/mo6jQZEkL1rko84GPBilediYZkaYMRv5AWQgczMRBuh4B/gbOSCxgLnAh8PUgxc3yISNOYDSmpYtw2ONLoruyRgO8HGq14IrLhGVCouiQNHDvsEyQhq2l3Z/A8wJfmnD7JpK8tZeWz6sNum4jUVdsrFAsQVnpXw9Jk2ZVgsyvpqQot3gEVBTrJFcBB1BWNMLV+zv2zZgoYxkfX41yVGAR8IVVP2no09g4ibIp6yrYgvJKWU66TZ0Q9g8Hvf1PKEeAxWLClX99plR97XVAdqB8KLDZ1XZpaT0doXRx6t7tsoj2fh/ckGLLJaRaY7nSEVxObvCQnQuFTkvhS20k8gNDPdCAeC+hwgXLzaI9LvjOTRj24WRYlDXAO8F9aa/PBLNjESwPkWqTy1SWKCbs4H0s8BVw9wCE2lC39252tJZqh7XA+cDHfto8MYAo7KVbEeEmlIeBja4cTw85vl50hwkNUExDFNAouhkCC0W5FTgvCM+O0fGZ9CxvRBSecTTVZWY1i9RCemp1QqDlBEaI9c5cxTThf9GMNjYuxwUnYeLPLweuAL7x599a4RG4xE8qiab9PMANqMdsgHzEdzX7NXJG4FHwvT0mMNeYlWtR9gOf+/MDfhB5E+Vtj1wfCB5Bc5U1oo3A6v8BZJW4ayu2muUAAAAASUVORK5CYII=" />
                                </g>
                            </svg>
                            <p>Li lingues differe solmen in li grammat
                                ca, li pronuncia tion e li plu commun vocabules. Omnicos directe al desi
                                lite de un nov lingua fusa.</p>
                            <svg class="float-right" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image data-name="quote copy" width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEJklEQVRIiY2XW4iVVRTHf+s732SIlZlJllFmEYZYiIZZRg9dhi5UL9GDFkp0oZcuYirYQ6IykHSleqmHLhBFkFQQgUZQmglqlBBRjEmKpTZpDjXNmbNi7b2/Ofvb3z7agcP51jp73f573T6RrQrwLPA4UHDqzyHgNmBXdPJ6lI8FzshKOxO0Bf7Gn3kaWFcCDwBPAiuA74GWaE8VBcqDAl8CEwP/bGArylvAewKSMewcFHgCeAx4HmVXWXQYAFYDm1KBupZx/g6BH4E7gI9Q7gR+Ah4S+DdjtNIzGXXcF4ArgVVmfApwsIdAjRf4wygngHMCa5rYVSid1NcEQYl4vwCLymKsbkLyBlNeIcpY9QzuWRvXpTX0isrBcDUdi5xIUU4opS1p7rc7C7yWKQqQNhCL6DbwR+CZI+2y1W4cytIJAjuBvyK6Qy/UuvRmlO1Br/spWz7mdiqYQpjQu0VZCmxzkSsqsXQeuUXAoyh3u4oiRP4/BFNUZkV0IR72HELx8w/AqzFaZelSJYItL5jSK11NK/sCW1Ona0j5/37Fvp5vkXcs8jGBs3pC3kRiosBTwCDKPoHjUQ2fzOH4ufCRtxlAednaZmgerWDQzh5FOZxRKqLj1Gax9qysAd4PZViJDIu6djyaBCKGthl/BuUK4JMk6o4oR13ftvvqChZJnf+MslRw7XV9JspHBF5LkLW2PlK2RhkRXAbORJnujPo7NCPbBPqSPOjDCx8PBuyft4EPRZkTGbAu+A4wIZMPk61ULfKKMejusev1DCtB4JjUvZ4EnOYaRr0STgh8nTh6pmvdzYqZLrA/Nh4nlR2+FjiC8lsiOCVEPxg51HWunhsXi7osT89djvK5N54vrSWiLpKRRPCi4NyfOeNRlDegDAP7k4y3azwXZU9ZjmYFL0XpF1PQ/O8qlG9SZzMlZom8BTiQODgnlOuOqsPFsBr9hnkGfJUIikA/ypuniPphYDHKhRndi0MJD43fOUqfwC1YWfgcXihNpbYCXWMLREapsS5B3Up2l8A9xPftz1qVLAFeFDdY2pTid7hlqMvOL1zpKUOJoH2eA7a4+65XwK3gGtVMYEiUm+xcBp3LUBYI7jwW+QTgRutOYoudhq2mOcnmoSwP6KQda75DRbla/LhNUanod4FXJMx1P1KV08V7erCHkK1aH4Qu9lmmd9vP4TDnc8lXhBZ+PrA2dE/iZaKgKWT0VGAvuAl2X26zFd8Nu00sHUbwEura7Nxqm6kil2rKJIptPVon6sanRdR/EuU2KMYy2+7NwOuh010HfBcHVxm3r/Xb2ZblwO3iXwyMvxF1UNWvoo6SVYo5a83DNhYrp3uBC8RvO5bAv6e+2QJpW4iNPRuJA+GtwxrDJpQNNhYbhpvQ2z43A+Vb4DzgH+DT8GZiLyKNtQzgP84OpYtpBIQgAAAAAElFTkSuQmCC" />
                                </g>
                            </svg>
                        </div>
                        <div class="client-profile">
                            <img src="images/clients/client-02.png" alt="nexis">
                            <div class="client-details">
                                <h2>Nathaneal Down</h2>
                                <p>HD Manager</p>
                                <span class="client-rating">5 / 5 <i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="review">
                        <div class="review-text">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEKElEQVRIiYWXXYhVVRTHf+vcY8kYmZI0kQxkEQkV9VKSFakQlIb4kJGmYVSM1UMPCT0EimFRD75E9VD4NNN3YYIGlVL2kqSGFfgQfVBRgmhZWpMz56xY++x979n77uscGGZ/ra//+rwi+5RpvruA+4AlwGXACWAUeDciU5A8n4tR1gOrBG4AZgBHgduL3GtRSlFGRTklym5RlolyUJQnpYaiZrho/kd/Eu9HipqdRcXxouaFomZWUTNW1Lzq7iouKO1h8s1GOQwsEHgN2Ar8EqwDHheo2hZ3le4t16CMA8eB9QJvAWf92xuBDUAdC1cWAJ8BpwSuBL4n8YpAmTkLStjyCWA78Kwom4GpFFX/WsuiivjsE/gR5bYBzMM3JZlQEWWpF7wK2NkXB9rl51bOcs/oJa/lyhxRa184+v43FwG7BJ4GPmgJigQbfTCm7DSgXCtNBC9D+SND1AGeEXgQZR5wOoPINjEfK9sSNMJ3Pcp2gZuB38zQslM5HqMCR1A+zRBdA3wiymxnEbwB7I1gV4YFl04rskgpTwlOqR9QngN2m6Jm+Uxp8nhthnAWyl6B74ClKGdzUIopqEz6YI0QEbjXo3E/MN6+K8uKeShzgP0Zpi+i/A7cYamSBl7L+gdQXm/HgPSifxzlMcGlXpu38/mdAodQ/ksIZ7h8VO4R+KcFcWS5Xy9HeSi1GtgkcAxlR+aOspxycB4CqoTpcmAS5b0cocTFZQ7Kz5m7daK8D0zkFDfh13nNNCFcJOpqsPYRxu/mo6jQZEkL1rko84GPBilediYZkaYMRv5AWQgczMRBuh4B/gbOSCxgLnAh8PUgxc3yISNOYDSmpYtw2ONLoruyRgO8HGq14IrLhGVCouiQNHDvsEyQhq2l3Z/A8wJfmnD7JpK8tZeWz6sNum4jUVdsrFAsQVnpXw9Jk2ZVgsyvpqQot3gEVBTrJFcBB1BWNMLV+zv2zZgoYxkfX41yVGAR8IVVP2no09g4ibIp6yrYgvJKWU66TZ0Q9g8Hvf1PKEeAxWLClX99plR97XVAdqB8KLDZ1XZpaT0doXRx6t7tsoj2fh/ckGLLJaRaY7nSEVxObvCQnQuFTkvhS20k8gNDPdCAeC+hwgXLzaI9LvjOTRj24WRYlDXAO8F9aa/PBLNjESwPkWqTy1SWKCbs4H0s8BVw9wCE2lC39252tJZqh7XA+cDHfto8MYAo7KVbEeEmlIeBja4cTw85vl50hwkNUExDFNAouhkCC0W5FTgvCM+O0fGZ9CxvRBSecTTVZWY1i9RCemp1QqDlBEaI9c5cxTThf9GMNjYuxwUnYeLPLweuAL7x599a4RG4xE8qiab9PMANqMdsgHzEdzX7NXJG4FHwvT0mMNeYlWtR9gOf+/MDfhB5E+Vtj1wfCB5Bc5U1oo3A6v8BZJW4ayu2muUAAAAASUVORK5CYII=" />
                                </g>
                            </svg>
                            <p>Li lingues differe solmen in li grammat
                                ca, li pronuncia tion e li plu commun vocabules. Omnicos directe al desi
                                lite de un nov lingua fusa.</p>
                            <svg class="float-right" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="31" height="27" viewBox="0 0 31 27">
                                <g data-name="02">
                                    <image data-name="quote copy" width="31" height="27"
                                        xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAbCAYAAACEP1QvAAAEJklEQVRIiY2XW4iVVRTHf+s732SIlZlJllFmEYZYiIZZRg9dhi5UL9GDFkp0oZcuYirYQ6IykHSleqmHLhBFkFQQgUZQmglqlBBRjEmKpTZpDjXNmbNi7b2/Ofvb3z7agcP51jp73f573T6RrQrwLPA4UHDqzyHgNmBXdPJ6lI8FzshKOxO0Bf7Gn3kaWFcCDwBPAiuA74GWaE8VBcqDAl8CEwP/bGArylvAewKSMewcFHgCeAx4HmVXWXQYAFYDm1KBupZx/g6BH4E7gI9Q7gR+Ah4S+DdjtNIzGXXcF4ArgVVmfApwsIdAjRf4wygngHMCa5rYVSid1NcEQYl4vwCLymKsbkLyBlNeIcpY9QzuWRvXpTX0isrBcDUdi5xIUU4opS1p7rc7C7yWKQqQNhCL6DbwR+CZI+2y1W4cytIJAjuBvyK6Qy/UuvRmlO1Br/spWz7mdiqYQpjQu0VZCmxzkSsqsXQeuUXAoyh3u4oiRP4/BFNUZkV0IR72HELx8w/AqzFaZelSJYItL5jSK11NK/sCW1Ona0j5/37Fvp5vkXcs8jGBs3pC3kRiosBTwCDKPoHjUQ2fzOH4ufCRtxlAednaZmgerWDQzh5FOZxRKqLj1Gax9qysAd4PZViJDIu6djyaBCKGthl/BuUK4JMk6o4oR13ftvvqChZJnf+MslRw7XV9JspHBF5LkLW2PlK2RhkRXAbORJnujPo7NCPbBPqSPOjDCx8PBuyft4EPRZkTGbAu+A4wIZMPk61ULfKKMejusev1DCtB4JjUvZ4EnOYaRr0STgh8nTh6pmvdzYqZLrA/Nh4nlR2+FjiC8lsiOCVEPxg51HWunhsXi7osT89djvK5N54vrSWiLpKRRPCi4NyfOeNRlDegDAP7k4y3azwXZU9ZjmYFL0XpF1PQ/O8qlG9SZzMlZom8BTiQODgnlOuOqsPFsBr9hnkGfJUIikA/ypuniPphYDHKhRndi0MJD43fOUqfwC1YWfgcXihNpbYCXWMLREapsS5B3Up2l8A9xPftz1qVLAFeFDdY2pTid7hlqMvOL1zpKUOJoH2eA7a4+65XwK3gGtVMYEiUm+xcBp3LUBYI7jwW+QTgRutOYoudhq2mOcnmoSwP6KQda75DRbla/LhNUanod4FXJMx1P1KV08V7erCHkK1aH4Qu9lmmd9vP4TDnc8lXhBZ+PrA2dE/iZaKgKWT0VGAvuAl2X26zFd8Nu00sHUbwEura7Nxqm6kil2rKJIptPVon6sanRdR/EuU2KMYy2+7NwOuh010HfBcHVxm3r/Xb2ZblwO3iXwyMvxF1UNWvoo6SVYo5a83DNhYrp3uBC8RvO5bAv6e+2QJpW4iNPRuJA+GtwxrDJpQNNhYbhpvQ2z43A+Vb4DzgH+DT8GZiLyKNtQzgP84OpYtpBIQgAAAAAElFTkSuQmCC" />
                                </g>
                            </svg>
                        </div>
                        <div class="client-profile">
                            <img src="images/clients/client-02.png" alt="nexis">
                            <div class="client-details">
                                <h2>Nathaneal Down</h2>
                                <p>HD Manager</p>
                                <span class="client-rating">5 / 5 <i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- =========================== 11. Footer Section =========================================== -->

    {{-- <section class="footer-area">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-9">
                    <h2>Contact Us</h2>
                    <p>1 (800) 686-6688 <br>suport@wpsmasher.com <br>40 Baria Sreet 133/2 <br>NewYork City, USA <br>Open
                        hours: 8.00-18.00 Mon-Fri</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-9">
                    <h2>Important</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="portfolio.html">Work</a></li>
                        <li><a href="portfolio-details.html">Single Service</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="faq.html">Support</a></li>
                        <li><a href="career.html">Career</a></li>
                        <li><a href="about.html">Privacy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 col-12">
                    <h2>Our Newsletter</h2>
                    <p>Subscribe to our mailing list to get the up dates to your email inbox</p>
                    <form action="index.html">
                        <input type="email" placeholder="E-mail">
                        <input type="submit" value="Subscribe">
                    </form>
                    <div class="footer-social mt-30">
                        <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.snapchat.com/"><i class="fab fa-snapchat m-0"></i></a>
                    </div>
                </div>
                <a class="go-to-top" href="#"><i class="fas fa-chevron-up"></i></a>
            </div>
        </div>
    </section> --}}

    <!-- =========================== 12. Copyright Section =========================================== -->

    <div class=" text-center copyright">
        <p>Copyright ©2020 nexisdev solutions. All Rights Reserved</p>
    </div>

    <!-- All JS -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/all.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script>
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('contact.store') }}",
                method: "POST",
                data: $(this).serialize(),
                beforeSend: function() {
                    $('.large-blue-button').val('Sending...');
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        $('#contactForm')[0].reset();
                    }
                    $('.large-blue-button').val('Send Message');
                },
                error: function(xhr) {
                    toastr.error('Something went wrong. Please try again.');
                    $('.large-blue-button').val('Send Message');
                }
            });
        });

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            var normalLogo = '{{ asset('frontend/images/logo/nexlogo.svg') }}';
            var lightLogo = '{{ asset('frontend/images/logo/nexlogo_white.svg') }}';

            if (scroll >= 300) {
                $(".menu-header").addClass("menu-header-dark");
                  $("img.logo").attr("src", lightLogo);
            } else {
                $(".menu-header").removeClass("menu-header-dark");
                  $("img.logo").attr("src", normalLogo);
                  $(".home-02-menu-header img.logo").attr("src", lightLogo);
            }
        });
    </script>
</body>

</html>

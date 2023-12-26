
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--================= Meta tag =================-->
        <meta charset="utf-8">
        <title>Awards University | Grande Soirée de Detente Universitaire </title>
        <meta name="description" content="">
        <!--================= Responsive Tag =================-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--================= Favicon =================-->
        <link rel="apple-touch-icon" href="{{asset('assets/logo.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/logo1.png')}}">
        <!--================= Bootstrap V5 css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--================= Menus css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/menus.css')}}">
        <!--================= Animate css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <!--================= Owl Carousel css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <!--================= Elegant icon css  =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/elegant-icon.css')}}">
        <!--================= Magnific Popup css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--================= Animations css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animations.css')}}">
        <!--================= style css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
        <!--================= Custom Spacing css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom-spacing.css')}}">
        <!--================= Responsive css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    </head>
    <body class="courses-grid-page">
        <!--================= Preloader Section Start Here =================-->
        <div id="react__preloader">
            <div id="react__circle_loader"></div>
            <div class="react__loader_logo"><img src="{{asset('assets/logo.png')}}" alt="Preload"></div>
        </div>
        <!--================= Preloader Section End Here =================-->

        <!--================= Header Section Start Here =================-->
        <header id="react-header" class="react-header react-header-two react-sticky">
            <div class="menu-part">
                <div class="container">
                    <!--================= Menu Start Here =================-->
                    <div class="react-main-menu">
                        <nav>
                            <!--================= Menu Toggle btn =================-->
                            <div class="menu-toggle">
                                <div class="logo"><a href="/" class="logo-text"> <img src="{{asset('assets/logo.png')}}"
                                            alt="logo"> </a></div>
                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================-->
                            <div class="react-inner-menus">
                                {{-- <ul id="backmenu" class="react-menus react-sub-shadow collapse hide-menu">
                                    <li class="has-sub"><span class="arrow "></span> <a href="#" class="hash">Home</a>
                                        <ul class="sub-menu">
                                            <li> <a href="index.html">Home One</a></li>
                                            <li> <a href="index-two.html" class="react-current-page">Home Two</a></li>
                                            <li> <a href="index-three.html">Home Three</a></li>
                                            <li> <a href="index-four.html">Home Four</a></li>
                                            <li> <a href="index-five.html">Home Five</a></li>
                                            <li> <a href="index-six.html">Home Six</a></li>
                                            <li> <a href="index-seven.html">Home Seven</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><span class="arrow "></span> <a href="#" class="hash">Pages</a>
                                        <ul class="sub-menu">
                                            <li> <a href="about.html">About</a></li>
                                            <li> <a href="instructors.html">Instructor</a></li>
                                            <li> <a href="profile.html">Profile</a></li>
                                            <li class="has-sub"><span class="arrow "></span> <a
                                                    href="events.html">Events</a>
                                                <ul class="sub-menu">
                                                    <li><a href="events.html">Events</a></li>
                                                    <li><a href="events-right-sidebar.html">Events Sidebar</a></li>
                                                    <li><a href="events-single.html">Events Single</a></li>
                                                </ul>
                                            </li>
                                            <li> <a href="login.html">Login</a></li>
                                            <li> <a href="signup.html">Sign Up</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><span class="arrow "></span> <a
                                            href="coureses-grid.html">Courses</a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li><a href="coureses-grid.html">Courses</a></li>
                                            <li><a href="coureses-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a href="coureses-list.html">Courses List</a></li>
                                            <li><a href="coureses-single.html">Courses Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub"><span class="arrow "></span> <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li class=""> <a href="contact.html">Contact</a></li>
                                </ul> --}}

                                <div class="searchbar-part">
                                    {{-- <div class="phone-part">
                                        <a href="tel:+(402)76244183"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-phone">
                                                <path
                                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                </path>
                                            </svg> +(402) 762 441 83 </a>
                                    </div> --}}
                                    <div class="react-logins">
                                        <a href="{{route('categories.index')}}">
                                            RETOURNER
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-arrow-right">
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg> --}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--=================  Menu End Here  =================-->
                </div>
            </div>
        </header>
        <!--================= Header Section End Here =================-->

        <!--================= Wrapper Start Here =================-->
        <div class="react-wrapper">
            <div class="react-wrapper-inner">
                <!--================= Breadcrumbs Section Start Here =================-->
                {{-- <div class="react-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="{{asset('assets/images/breadcrumbs/1.jpg')}}" alt="Breadcrumbs">
                        <img class="mobile" src="{{asset('assets/images/breadcrumbs/1.jpg')}}" alt="Breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Coureses Grid</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li>Coureses Grid</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!--================= Breadcrumbs Section End Here =================-->

                <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt---110">
                    <div class="container pb---70">


                        <div class="row">
                            @foreach ($candidates as $candidate)
                                <div class="single-studies col-lg-4 grid-item">
                                    <div class="inner-course">
                                        <div class="case-img">
                                            <a href="#" class="cate-w"><img src="{{asset('assets/images/course/beg.png')}}" alt="Beginner"> {{$candidate->firstname}} </a>
                                            <img src={{asset('candidats/'. $category_id . '/'. $candidate->image )}} alt="Course Image">
                                        </div>
                                        <div class="case-content" style="align-items:center; text-align: center;">

                                                <a href="#"
                                                    style="background: #3270FC; border-radius: 6px; padding: 10px 26px; line-height: 20px; display: inline-block; color: #fff; font-weight: 600; font-size: 16px;">
                                                    VOTER
                                                    <svg fill="#ffff" height="24" width="24" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        viewBox="0 0 196.338 196.338" xml:space="preserve">
                                                    <g> <path d="M195.767,66.465c-0.761-1.838-2.221-3.298-4.059-4.059L63.483,9.295c-3.824-1.583-8.214,0.232-9.799,4.059L0.571,141.58
                                                            c-0.762,1.838-0.762,3.902,0,5.74c0.761,1.838,2.221,3.298,4.059,4.059l86.104,35.665c0.919,0.38,1.895,0.571,2.87,0.571
                                                            c0.976,0,1.951-0.19,2.87-0.571l59.566-24.676c1.838-0.761,3.298-2.221,4.059-4.059l35.667-86.105
                                                            C196.528,70.368,196.528,68.303,195.767,66.465z M107.464,166.256l7.647-18.463l18.462,7.647L107.464,166.256z M149.112,145.639
                                                            l-35.19-14.575c-3.823-1.583-8.214,0.232-9.799,4.059l-14.577,35.193l-72.248-29.925L64.672,26.023l114.367,47.371L149.112,145.639
                                                            z"/> <polygon points="133.374,98.043 127.632,84.186 89.229,100.098 82.708,84.358 68.851,90.098 81.111,119.697 	"/></g> </svg>
                                                </a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="{{asset('assets/images/course/beg.png')}}" alt="Beginner"> Beginner</a>
                                        <img src="{{asset('assets/images/course-filter/1.jpg')}}" alt="Course Image">
                                    </div>
                                    <div class="case-content" style="align-items:center; text-align: center;">
                                            <a href="#"
                                                style="background: #3270FC; border-radius: 6px; padding: 10px 26px; line-height: 20px; display: inline-block; color: #fff; font-weight: 600; font-size: 16px;">
                                                VOTER
                                                <svg fill="#ffff" height="24" width="24" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 196.338 196.338" xml:space="preserve">
                                                <g> <path d="M195.767,66.465c-0.761-1.838-2.221-3.298-4.059-4.059L63.483,9.295c-3.824-1.583-8.214,0.232-9.799,4.059L0.571,141.58
                                                        c-0.762,1.838-0.762,3.902,0,5.74c0.761,1.838,2.221,3.298,4.059,4.059l86.104,35.665c0.919,0.38,1.895,0.571,2.87,0.571
                                                        c0.976,0,1.951-0.19,2.87-0.571l59.566-24.676c1.838-0.761,3.298-2.221,4.059-4.059l35.667-86.105
                                                        C196.528,70.368,196.528,68.303,195.767,66.465z M107.464,166.256l7.647-18.463l18.462,7.647L107.464,166.256z M149.112,145.639
                                                        l-35.19-14.575c-3.823-1.583-8.214,0.232-9.799,4.059l-14.577,35.193l-72.248-29.925L64.672,26.023l114.367,47.371L149.112,145.639
                                                        z"/> <polygon points="133.374,98.043 127.632,84.186 89.229,100.098 82.708,84.358 68.851,90.098 81.111,119.697 	"/></g> </svg>
                                            </a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-studies col-lg-4 grid-item">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <a href="#" class="cate-w"><img src="{{asset('assets/images/course/beg.png')}}" alt="Beginner"> Beginner</a>
                                        <img src="{{asset('assets/images/course-filter/1.jpg')}}" alt="Course Image">
                                    </div>
                                    <div class="case-content" style="align-items:center; text-align: center;">

                                            <a href="#"
                                                style="background: #3270FC; border-radius: 6px; padding: 10px 26px; line-height: 20px; display: inline-block; color: #fff; font-weight: 600; font-size: 16px;">
                                                VOTER
                                                <svg fill="#ffff" height="24" width="24" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 196.338 196.338" xml:space="preserve">
                                                <g> <path d="M195.767,66.465c-0.761-1.838-2.221-3.298-4.059-4.059L63.483,9.295c-3.824-1.583-8.214,0.232-9.799,4.059L0.571,141.58
                                                        c-0.762,1.838-0.762,3.902,0,5.74c0.761,1.838,2.221,3.298,4.059,4.059l86.104,35.665c0.919,0.38,1.895,0.571,2.87,0.571
                                                        c0.976,0,1.951-0.19,2.87-0.571l59.566-24.676c1.838-0.761,3.298-2.221,4.059-4.059l35.667-86.105
                                                        C196.528,70.368,196.528,68.303,195.767,66.465z M107.464,166.256l7.647-18.463l18.462,7.647L107.464,166.256z M149.112,145.639
                                                        l-35.19-14.575c-3.823-1.583-8.214,0.232-9.799,4.059l-14.577,35.193l-72.248-29.925L64.672,26.023l114.367,47.371L149.112,145.639
                                                        z"/> <polygon points="133.374,98.043 127.632,84.186 89.229,100.098 82.708,84.358 68.851,90.098 81.111,119.697 	"/></g> </svg>
                                            </a>

                                    </div>
                                </div>
                            </div> --}}
                        </div>

                    </div>
                </div>
                <!--================= Course Filter Section End Here =================-->

            </div>
        </div>
        <!--================= Wrapper End Here =================-->

        <!--================= Footer Section Start Here =================-->
        <footer id="react-footer" class="react-footer home-four">
            <div class="copyright">
                <div class="container">
                    <div class="react-copy-left">
                        <img src="{{asset('assets/logo.png')}}" alt="logo">
                    </div>
                    <div class="react-copy-right">
                        © 2023 Réalisé par <a target="_blank" href="https://webcreation-dev.github.io/">WEBCREATION</a>
                    </div>
                </div>
            </div>
        </footer>
        <!--================= Footer Section End Here =================-->

        <!--================= Scroll to Top Start =================-->
        <div id="backscrollUp">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div>
        <!--================= Scroll to Top End =================-->

        <!--================= Jquery latest version =================-->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!--================= Modernizr js =================-->
        <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!--================= Bootstrap js =================-->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!--================= Owl Carousel js =================-->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!--================= Magnific Popup =================-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--================= Counter up js =================-->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <!--================= Wow js =================-->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <!--================= Imagesloaded.pkgd.min js =================-->
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <!--================= menus js =================-->
        <script src="{{asset('assets/js/menus.js')}}"></script>
        <!--================= Plugins js =================-->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
		<!--================= Main js =================-->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>

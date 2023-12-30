
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
                                <div class="logo"><a href="https://awards-university.ascmedias.com" class="logo-text"> <img src="{{asset('assets/logo.png')}}"
                                            alt="logo"> </a></div>
                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================-->
                            <div class="react-inner-menus">

                                <div class="searchbar-part">

                                    <div class="react-logins">
                                        <a href="https://awards-university.ascmedias.com">
                                            RETOURNER
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

                <!--================= Course Filter Section Start Here =================-->
                <div class="react-course-filter back__course__page_grid pb---40 pt---110">
                    <div class="container pb---70">

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif


                        <div class="row">
                            @foreach ($candidates as $key => $candidate)
                                <div class="single-studies col-lg-4 grid-item">
                                    <div class="inner-course">
                                        <div class="case-img">
                                            <a href="#"  class="cate-w"><img src="{{asset('assets/images/course/beg.png')}}" alt="Beginner">
                                                {{-- {{$candidate->id}} - {{$candidate->firstname}} --}}
                                                {{ ($key + 1) == 1 ? '1er' : (($key + 1) == 2 ? '2e' : '3e') }}
                                            </a>
                                            <img src={{asset('candidats/'. $category_id . '/'. $candidate->image )}} alt="Course Image">
                                        </div>
                                        <div class="case-content" style="align-items:center; text-align: center;">
                                            {{-- <p>NOMBRE DE VOTE : </p> --}}

                                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="vote" data-my-variable="{{$candidate->id}}"
                                                    style="background: #3270FC; border-radius: 6px; padding: 10px 26px; line-height: 20px; display: inline-block; color: #fff; font-weight: 600; font-size: 16px;">
                                                    VOTER ( {{ App\Models\Vote::getCountVote($candidate->id) }} )
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
                        </div>

<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" >
    Launch demo modal
  </button> --}}

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">NOMBRE DE VOTES (2 votes minimum) </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('fedapay.process')}}" method="POST" >
            @csrf
        <div class="modal-body">

                <div class="form-group">
                    <input type="hidden" id="myHiddenInput" name="myVariable" value="">
                    <label for="myNumber">Nombre:</label>
                    <input type="number" class="form-control" min="2" name="number" id="myNumber" required>
                </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">Voter</button>
        </div>
    </form>
      </div>
    </div>
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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
      // Détecter le clic sur le bouton
      $('.vote').on('click', function() {
        // Récupérer la variable du bouton
        var myVariableValue = $(this).data('my-variable');
        $('#myHiddenInput').val(myVariableValue);
        // alert('Variable récupérée : ' + myVariableValue);
      });
    });
  </script>
    </body>
</html>

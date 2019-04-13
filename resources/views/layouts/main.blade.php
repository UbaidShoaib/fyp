<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Learn and Publish - Articles &amp; Research papers</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Core Stylesheet -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">
    <link href="{{asset('css/color.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


</head>

<body>
<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Login Search Area -->
                        <div class="login-search-area d-flex align-items-center">
                            <!-- Login -->
                            <div class="login d-flex">
                                @guest
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                                @else
                                    <ul>
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: #0b0b0b">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    </ul>
                                    @endguest
                            </div>
                            <!-- Search Form -->
                            <div class="search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" class="form-control" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="newspaper-main-menu" id="stickyMenu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newspaperNav">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="#">Products</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="catagories-post.html">Catagories</a></li>
                                        <li><a href="single-post.html">Single Articles</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagories-post.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Articles</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="subject.html">Subjects</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Catagories</li>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <div class="single-mega cn-col-4">
                                            <!-- Single Featured Post -->
                                            <div class="single-blog-post small-featured-post d-flex">
                                                <div class="post-thumb">
                                                    <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                                </div>
                                                <div class="post-data">
                                                    <a href="#" class="post-catagory">Articles</a>
                                                    <div class="post-meta">
                                                        <a href="#" class="post-title">
                                                            <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                        </a>
                                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Featured Post -->
                                            <div class="single-blog-post small-featured-post d-flex">
                                                <div class="post-thumb">
                                                    <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                                </div>
                                                <div class="post-data">
                                                    <a href="#" class="post-catagory">Reasearch</a>
                                                    <div class="post-meta">
                                                        <a href="#" class="post-title">
                                                            <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                        </a>
                                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="journals.html">Journals</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Technology</a></li>

                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->




@yield('content')




<!--************************************
        Footer Start
*************************************-->
<footer id="sj-footer" class="sj-footer sj-haslayout">
    <div class="container">
        <div class="row">
            <div class="sj-footercolumns">


                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">

                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                    <!-- List -->
                </div>


                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">




                    <div class="sj-fcol sj-widget sj-widgetusefullinks">
                        <div class="sj-widgetheading">
                            <h3>By Specialty</h3>
                        </div>
                        <div class="sj-widgetcontent">
                            <ul>
                                <li><a href="javascript:void(0);">Contact Us</a></li>
                                <li><a href="javascript:void(0);">Careers @ Amentojourn</a></li>
                                <li><a href="javascript:void(0);">Get Help and Support</a></li>
                                <li><a href="javascript:void(0);">Rights &amp; Permissions</a></li>
                                <li class="sj-more"><a href="javascript:void(0);">more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
                    <div class="sj-fcol sj-widget sj-widgetresources">
                        <div class="sj-widgetheading">
                            <h3>Resources</h3>
                        </div>
                        <div class="sj-widgetcontent">
                            <ul>
                                <li><a href="javascript:void(0);">Authors</a></li>
                                <li><a href="javascript:void(0);">Librarians</a></li>
                                <li><a href="javascript:void(0);">Sponsors &amp; Advertisers</a></li>
                                <li><a href="javascript:void(0);">Press &amp; Media</a></li>
                                <li class="sj-more"><a href="javascript:void(0);">more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 float-left">
                    <div class="sj-fcol sj-widget sj-widgetcontactus">
                        <div class="sj-widgetheading">
                            <h3>Get In Touch</h3>
                        </div>
                        <div class="sj-widgetcontent">
                            <ul>
                                <li><i class="lnr lnr-home"></i><address>123 Office St, ABC Building, Melbourne, Australia. </address></li>
                                <li><a href="tel:(+4)123456789101"><i class="lnr lnr-phone"></i><span>(+4) 1234 5678 9101</span></a></li>
                                <li><a href="tel:(+4)123456789101"><i class="lnr lnr-screen"></i><span>(+4) 4321 8765 1019</span></a></li>
                                <li><a href="mailto:info@yourdomain.com"><i class="lnr lnr-envelope"></i><span>info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->
</div>


<script src="{{asset('js/libs.js')}}"></script>


</body>

</html>

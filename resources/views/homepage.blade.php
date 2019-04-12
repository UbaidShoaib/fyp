@extends('layouts.main')


@section('content')

    <!-- #### Slider Starts -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/bg-img/10.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="slider-caption">Learn With Us</h2>
                <p class="slider-cap-para">we have more than 1000 journals for your learning</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/bg-img/abc.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="slider-caption">Learn With Us</h2>
                <p class="slider-cap-para">we have more than 1000 journals for your learning</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/bg-img/a.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h2 class="slider-caption">Learn With Us</h2>
                <p class="slider-cap-para">we have more than 1000 journals for your learning</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    </div>



    <!-- ### Slider Ends Here -->








    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <h2>Latest Articles<br><br></h2>
            <div class="row">

                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <!-- Single Featured Post -->
                        <div class="col-12 col-lg-7">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/16.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Computer Science</a>
                                    <a href="#" class="post-title">
                                        <h6>Human Computer Interaction: A new company is born today at the stock market</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Christinne Williams</a></p>
                                        <p class="post-excerp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo fermentum, eu cursus nunc maximus. Integer convallis nisi nibh, et ornare neque ullamcorper ac. Nam id congue lectus, a venenatis massa. Maecenas justo libero, vulputate vel nunc id, blandit feugiat sem. </p>
                                        <!-- Post Like & Post Comment -->
                                        <!--  <div class="d-flex align-items-center">
                                             <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                             <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                         </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Single Featured Post -->
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/17.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Neural Networks</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac...</h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <!-- <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <!-- Single Featured Post -->
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/18.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Artificial Intelligence</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac...</h6>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#latest articles"><button type="button" class="btn btn-whatever">View All Latest</button></a>
                    <hr size="30" class="style-one">
                </div>




                <div class="col-12 col-md-6 col-lg-4">

                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                        <h3 align="center">Get Started</h3>

                        <!-- Single Popular Blog -->
                        <div class="single-fixed">

                            <h4 align="center">Submit Your Paper </h4>
                            <ul><li id="li-1"><a href="#">Paper submision online</a></li></ul>


                            <!--  <p>April 14, 2018</p> -->
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-fixed">

                            <h4 align="center">Archive Section</h4>
                            <ul><li class="li-2"><a href="#">latest issues</a></li>
                                <li class="li-2"><a href="#">Archives</a></li></ul>

                            <!--  <p>April 14, 2018</p> -->
                        </div>


                        <!-- Single Popular Blog -->
                        <div class="single-fixed">

                            <h4 align="center">Track your Paper </h4>
                            <ul><li class="li-2"><a href="#">paper tracker</a></li></ul>

                            <!--  <p>April 14, 2018</p> -->
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-fixed">

                            <h4 align="center">Find Journals</h4>
                            <ul><li class="li-2"><a href="#">journal finder</a></li></ul>

                            <!--  <p>April 14, 2018</p> -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### banner Starts starts ##### -->


    <div class="container m_banner">
        <div class="row">
            <section class="col-md-12 underconstruction animated fadeIn">
                <h2>Our services</h2><br><br>
                <div class="row">

                    <div class="col-md-4 myAnch" id="handle">
                        <i class="fa fa-book fa-5x" aria-hidden="true"></i>
                        <a href="#">
                            <h3>Author</h3>
                        </a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>

                    <div class="col-md-4 myAnch" id="handle">
                        <i class="fa fa-edit fa-5x"  aria-hidden="true"></i>
                        <a href=""><h3>Editor</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                    </div>


                    <div class="col-md-4 myAnch" id="handle">
                        <i class="fas fa-clipboard-check fa-5x" aria-hidden="true"></i>
                        <a href="#"><h3>Reviewer</h3></a>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
        </div>
        </section>
    </div>


    <!-- ## Banner ends -->



    <!-- ### Some Text for Hompage part -->


    <!-- ### Ends Here -->



    <!-- ## featured journals -->

    <div class="container">

        <div class="section-heading">
            <h6>Featured journals</h6>
        </div><br>
        <div class="row blog">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row" style="padding:10px">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img src="img/bg-img/fj.jpg" alt="Image" style="max-width:100%;">
                                    </a>
                                    <p>Applied Microbiology and Biotechnology</p>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->

            </div>
        </div>
    </div>


    <!-- ####  Featured journals carousel ends here -->



    <!-- ##### Intro Area Start ##### -->
    <section class="about-area intro">
        <div class="container">


            <div class="row">
                <br>

                <div class="col-12 col-lg-8 intro-para">
                    <h2>WE publish and support</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo fermentum, eu cursus nunc maximus. Integer convallis nisi nibh, et ornare neque ullamcorper ac. Nam id congue lec tus, a venenatis massa. Maecenas justo libero, vulputate vel nunc id, blandit feugiat sem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur, purus imperdiet volutpat tincidunt, eros sem mollis quam, ut placerat urna neque at massa. Proin vitae pulvinar justo. Donec vel placerat enim, at ultricies risus.</p>
                </div>


                <!-- Newsletter Widget -->
                <div class="col-12 col-lg-4 newsletter-widget">
                    <h4>Newsletter</h4>
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                    <form action="#" method="post">
                        <input type="text" name="text" placeholder="Name">
                        <input type="email" name="email" placeholder="Email">
                        <button type="submit" class="btn w-100">Subscribe</button>
                    </form>
                </div>

                <!--  <div class="col-12 col-lg-6">
                     <p>Donec gravida non metus blandit facilisis. Cras tincidunt, lorem aliquam molestie eleifend, libero dui volutpat dui, nec sodales massa libero ut metus. Mauris pretium elit ut dapibus consequat. Nam ut lorem nec sem dignissim gravida. Duis fringilla.</p>
                     <p>Donec turpis erat, scelerisque id euismod sit amet, fermentum vel dolor. Nulla facilisi. Sed pellentesque lectus et accumsan aliquam. Fusce lobortis cursus quam, id mattis sapien. Aliquam erat volutpat. Aliquam placerat, est quis sagittis tincidunt, ipsum eros posuere mi, ut finibus quam sem eget ex.</p>
                 </div> -->
            </div>

        </div>
    </section>
    <!-- ##### Intro Area End ##### -->









@endsection
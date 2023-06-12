<x-guest-layout>

      <!-- =============== START OF PAGE HEADER =============== -->
      <section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
        <div class="container">
            <div class="inner">
                <h2 class="title">Movie List</h2>
                <ol class="breadcrumb">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Movie List</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- =============== END OF PAGE HEADER =============== -->



    <!-- =============== START OF MAIN =============== -->
    <main class="bg-light ptb100">
        <div class="container">

            <!-- Start of Filters -->
            <div class="row mb50">

                <div class="col-md-6">
                    <!-- Layout Switcher -->
                    <div class="layout-switcher">
                        <a href="movie-list.html" class="list"><i class="fa fa-align-justify"></i></a>
                        <a href="movie-grid.html" class="grid active"><i class="fa fa-th"></i></a>
                    </div>
                </div>

                <div class="col-md-6">

                    <!-- Sort by -->
                    <div class="sort-by">
                        <div class="sort-by-select">
                            <select class="chosen-select-no-single">
                                <option>Default Order</option>
                                <option>Featured</option>
                                <option>Top Viewed</option>
                                <option>Top Rated</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                            </select>
                        </div>
                    </div>
                    <!-- Sort by / End -->

                </div>

            </div>
            <!-- End of Filters -->



            <!-- Start of Movie List -->
            <div class="row">

                <!-- Movie List Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="movie-box-3 mb30">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-1.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">Star Wars</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>7.5/10</span>
                                            <span class="category">Action, Fantasy</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="movie-box-3 mb30">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-2.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">The Brain</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>7.2/10</span>
                                            <span class="category">Action, Comendy</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="movie-box-3 mb30">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-3.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">The Mummy</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>5.5/10</span>
                                            <span class="category">Action, Fantasy</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="movie-box-3 mb30">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-5.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">Daredevil</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>8.7/10</span>
                                            <span class="category">Action, Crime</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="movie-box-3 mb30">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-6.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">Stranger Things</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>9.0/10</span>
                                            <span class="category">Fantasy, Horror</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Movie List Item -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="movie-box-3 mb30">
                        <div class="listing-container">

                            <!-- Movie List Image -->
                            <div class="listing-image">
                                <!-- Image -->
                                <img src="assets/images/posters/poster-8.jpg" alt="">
                            </div>

                            <!-- Movie List Content -->
                            <div class="listing-content">
                                <div class="inner">

                                    <!-- Play Button -->
                                    <div class="play-btn">
                                        <a href="https://www.youtube.com/watch?v=Q0CbN8sfihY" class="play-video">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>

                                    <h2 class="title">The Flash</h2>

                                    <!-- Rating -->
                                    <div class="stars">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <span>8.0/10</span>
                                            <span class="category">Action, Drama</span>
                                        </div>
                                    </div>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam...</p>

                                    <a href="movie-detail.html" class="btn btn-main btn-effect">details</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- End of Movie List -->



            <!-- Start of Pagination -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <nav class="pagination">
                        <ul>
                            <li><a href="#" class="current-page">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="ti-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End of Pagination -->

        </div>
    </main>
    <!-- =============== END OF MAIN =============== -->

</x-guest-layout>

@extends('app')

@section('title')
    Bokus - Book selling website
@endsection

@section('style')

@endsection

@section('content')

    <!-- Navigation -->
    <div class="navigation">
        <div class="container-fluid">
            <div class="row">
                <!-- Categories -->
                <div class="col-md-2 right-col">
                    <div class="cat-wrapper">
                        <a href=""><i class="fa fa-list"></i> <span>All Categories</span></a>
                    </div>
                </div> <!-- end of Categories -->
                <!-- Promotion -->
                <div class="col-md-6">
                    <p>Promotion line goes here</p>
                </div> <!-- end of Promotion -->
                <!-- Hotline -->
                <div class="col-md-4">
                    <span>Hotline goes here</span>
                </div> <!-- end of Hotline -->
            </div>
        </div>
    </div> <!-- end of navigation -->

    <!-- Main -->
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- Right -->
                <div class="col-md-2 col-sm-1 right-col">
                    <!-- #catWrapper -->
                    <div class="right-wrapper" id="catWrapper">
                        <ul class="categories">
                            @foreach($categories as $category)
                            <li>
                                <a href="">{{ $category->name }}</a>
                                <span class="pull-right"><i class="fa fa-angle-right"></i></span>
                                <!-- Submenu -->
                                <ul class="category_submenu">
                                    <li class="category_submenu-item">
                                        <a href="">Business of Art</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Decorative Arts &amp; Design</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Drawing</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Fashion</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Graphics Design</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">History &amp; Criticism</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Individual Artists</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Music</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Painting</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Performing Arts</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Photography &amp; Video</a>
                                    </li>

                                    <li class="category_submenu-item">
                                        <a href="">Vehicle Pictorials</a>
                                    </li>
                                </ul> <!-- end of submenu-->
                            </li>
                            @endforeach
                        </ul>
                    </div> <!-- end of #catWrapper -->
                    <!-- #filterWrapper -->
                    <div class="right-wrapper">
                        <div class="fitler right-group">
                            <div class="heading">
                                <h4>Fitler Results</h4>
                            </div>
                            <div class="content">

                            </div>
                            <div class="footer">

                            </div>
                        </div>
                    </div> <!-- end of #filterWrapper -->
                    <!-- #socialWrapper -->
                    <div class="right-wrapper" id="socialWrapper">
                        <div class="social right-group">
                            <div class="heading">
                                <h4>Social Connection</h4>
                            </div>
                            <div class="content">

                            </div>
                            <div class="footer">

                            </div>
                        </div>
                    </div> <!-- end of #socialWrapper -->
                </div> <!-- end of right -->

                <!-- content -->
                <div class="col-md-10 col-sm-11">
                    <div class="main-wrapper">
                        <!-- Slider -->
                        <section class="content">
                            <div class="section-header">

                            </div>
                            <div class="section-content">
                                <div class="slider" id="bookSlider">

                                </div>
                            </div>
                            <div class="section-footer">

                            </div>
                        </section> <!-- end of Slider -->

                        <!-- Upcomming -->
                        <section class="content-sec" id="upcomming">
                            <div class="section-header">
                                <h3 class="section-title">Upcomming Books</h3>
                            </div>
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/diary-of-a-wimpy-kid.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Diary of A Wimpy Kid</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Jeff Kinney</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">1.068.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="article-button">
                                                <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <div class="article-badge new">
                                                        <div class="status">
                                                            <div class="tag">New</div>
                                                        </div>
                                                    </div>
                                                    <img src="img/book/cover/malala-stood-education.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">I am Malala</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Malala Yousafzai</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">629.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                                <div class="article-button">
                                                    <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">Add to cart</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/where-men-win-glory_Jon-Krakauer.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Where men win glory</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Jon Krakauer</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">450.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                                <div class="article-button">
                                                    <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">Add to cart</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/chuyen-tao-lao-vang-vang-tap-2.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Chuyện Tào lao của Vàng Vàng</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Phạm Kim Thạch</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">44.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                                <div class="article-button">
                                                    <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">Add to cart</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/malala-stood-education.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">I am Malala</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Malala Yousafzai</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">629.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                                <div class="article-button">
                                                    <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">Add to cart</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <div class="article-badge discount">
                                                        <div class="status">
                                                            <div class="tag">-20%</div>
                                                        </div>
                                                    </div>
                                                    <img src="img/book/cover/where-men-win-glory_Jon-Krakauer.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Where men win glory</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Jon Krakauer</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">450.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                                <div class="article-button">
                                                    <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">Add to cart</button>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-footer">
                                <p class="">
                                    <a href="">See more <i class="fa fa-angle-double-right"></i></a>
                                </p>
                            </div>
                        </section> <!-- end of upcomming -->

                        <!-- Best selling -->
                        <section class="content-sec" id="popular">
                            <div class="section-header">
                                <h3 class="section-title">Popular on bokus</h3>
                            </div>
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/diary-of-a-wimpy-kid.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Diary of A Wimpy Kid</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Jeff Kinney</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">1.068.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <div class="article-badge new">
                                                        <div class="status">
                                                            <div class="tag">New</div>
                                                        </div>
                                                    </div>
                                                    <img src="img/book/cover/malala-stood-education.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">I am Malala</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Malala Yousafzai</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">629.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/where-men-win-glory_Jon-Krakauer.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Where men win glory</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Jon Krakauer</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">450.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/where-men-win-glory_Jon-Krakauer.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Where men win glory</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Jon Krakauer</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">450.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">
                                                <div class="article-img">
                                                    <img src="img/book/cover/malala-stood-education.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">I am Malala</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Malala Yousafzai</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">629.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-sm-4">
                                        <div class="article">
                                            <a href="">

                                                <div class="article-img">
                                                    <div class="article-badge soldout">
                                                        <div class="status">
                                                            <!-- Book staus: New, Discount, Soldout -->
                                                            <div class="tag">Sold out!</div>
                                                        </div>
                                                    </div>
                                                    <img src="img/book/cover/where-men-win-glory_Jon-Krakauer.jpg" alt="Hàng Không Bán" class="book-cover-sm">
                                                </div>
                                                <div class="article-info">
                                                    <div class="item-line titlebox">
                                                        <p class="title"><a href="">Where men win glory</a></p>
                                                    </div>
                                                    <div class="item-line authorbox">
                                                        <p>by <span class="author">Jon Krakauer</span></p>
                                                    </div>
                                                    <div class="item-line ratingbox">
                                                        <div class="rates">
                                                        </div>
                                                    </div>
                                                    <div class="item-line pricebox">
                                                        <p><span class="price">450.000</span> <span class="currency">VND</span></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section-footer">
                                <p class="">
                                    <a href="">See more <i class="fa fa-angle-double-right"></i></a>
                                </p>
                            </div>
                        </section> <!-- end of Best-selling -->

                        <!-- Recommendation -->
                        <section class="content-sec" id="recommendation">
                            <div class="section-header">
                                <h3 class="section-title">Recommended for you</h3>
                            </div>
                            <div class="section-content">

                            </div>
                            <div class="section-footer">

                            </div>
                        </section> <!-- end of recommendation -->

                        <section class="content-sec" id="popularAuthor">
                            <div class="section-header">
                                <h3 class="section-title">Popular Authors on bokus</h3>
                            </div>
                            <div class="section-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <!-- Author 1 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <!-- Author image -->
                                                <div class="col-md-4 col-sm-4 author" id="author1">
                                                    <div class="img">
                                                        <img src="img/book/cover/malala-stood-education.jpg" alt="" class="author-img">
                                                    </div>
                                                    <div class="name">
                                                        <h5 class="author-name">
                                                            Malala Yousafzai
                                                        </h5>
                                                    </div>
                                                    <div class="article-button">
                                                        <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">See all book</button>
                                                    </div>
                                                </div>
                                                <!-- Author bio -->
                                                <div class="col-md-8 col-sm-8 author-bio">
                                                    <p>It is no surprise that in January, 2010, The New York Times Magazine featured James Patterson on its cover and hailed him as having "transformed book publishing," and that Time magazine hailed him as "The Man Who Can't Miss." Recently, NBC's Rock Center with Brian Williams profiled Patterson's prolific career, AARP named him one of the "50 Most Influential People Who Make Our Days a Little Brighter," and Variety featured him in a cover story highlighting his adventures in Hollywood.</p>
                                                </div>
                                            </div>
                                        </div> <!-- end of Author 1 -->
                                        <!-- Author 2 -->
                                        <!-- Author 1 -->
                                        <div class="col-md-6">
                                            <div class="row">
                                                <!-- Author image -->
                                                <div class="col-md-4 col-sm-4 author" id="author1">
                                                    <div class="img">
                                                        <img src="img/book/cover/malala-stood-education.jpg" alt="" class="author-img">
                                                    </div>
                                                    <div class="name">
                                                        <h5 class="author-name">
                                                            Malala Yousafzai
                                                        </h5>
                                                    </div>
                                                    <div class="article-button">
                                                        <button class="bokus-btn bokus-btn-default btn-sp-orange add-to-cart" type="button">See all book</button>
                                                    </div>
                                                </div>
                                                <!-- Author bio -->
                                                <div class="col-md-8 col-sm-8 author-bio">
                                                    <p>It is no surprise that in January, 2010, The New York Times Magazine featured James Patterson on its cover and hailed him as having "transformed book publishing," and that Time magazine hailed him as "The Man Who Can't Miss." Recently, NBC's Rock Center with Brian Williams profiled Patterson's prolific career, AARP named him one of the "50 Most Influential People Who Make Our Days a Little Brighter," and Variety featured him in a cover story highlighting his adventures in Hollywood.</p>
                                                </div>
                                            </div>
                                        </div> <!-- end of Author 1 --> <!-- end of Author 2 -->
                                    </div>
                                </div>
                            </div>
                            <div class="section-footer">

                            </div>
                            </sectiorun>
                    </div>
                </div> <!-- end of content -->
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
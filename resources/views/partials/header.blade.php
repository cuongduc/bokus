<!-- Header -->
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <!-- Logo -->
            <div class="col-md-2 col-sm-4">
                <div class="logo">
                    <img src="{{ asset('/img/bokus_logo.png') }}" alt="Bokus" class="header-logo">
                </div>
            </div> <!-- end of Logo -->

            <!-- Search -->
            <div class="col-md-6 col-sm-4">
                <form action="" class="nav-form">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">All  <span><i class="fa fa-lg fa-angle-down"></i></span></button>
                            <ul class="dropdown-menu dropdown-orange" role="menu">
                                @foreach($categories as $category)
                                <li><a href="#">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- /btn-group -->
                        <input type="text" class="form-control gl-search" id="glSearch" placeholder="Search for most interesting books...">

							        <span class="input-group-btn">
							        <button class="btn btn-default" type="submit" id="searchButton"><i class="fa fa-search"></i></button>
								    </span>
                    </div> <!-- end of input-group -->
                </form> <!-- end of form -->
                <div class="gl-search-suggest-wrapper hidden" id="suggestWrapper">
                    asdlfk;
                </div>
            </div> <!-- end of Search -->

            <!-- Menu -->
            <div class="col-md-4 col-sm-4" style="padding-left: 0px">
                <!-- Check order -->
                <div class="col-md-4 col-sm-4 header-col">
                    <div class="header-btn">
                        <a class="header-btn-lg bokus-btn bokus-btn-default head-btn" id="checkOrderStatusButton" data-img="location">
                            <img src="{{ asset('/img/icon/location.png') }}" alt="" class="btn-img" />
                            <span>Check order status</span>
                        </a>
                    </div> <!-- end of .header-btn -->
                </div> <!-- end of check order -->
                <!-- Login button -->
                <div class="col-md-4 col-sm-4 header-col">
                    <div class="header-btn">
                        <a href="{{ url('/auth/login') }}" class="header-btn-lg bokus-btn bokus-btn-default head-btn" id="loginButton" data-img="login">
                            <img src="{{ asset('/img/icon/login.png') }}" alt="" class="btn-img" style="height: 22px"/>
                            <span>Login &amp; My orders</span>
                        </a>
                    </div> <!-- end of .header-btn -->
                </div> <!-- end of login button -->
                <!-- Cart button -->
                <div class="col-md-4 col-sm-4 header-col">
                    <div class="header-btn" style="height: 51px">
                        <a class="header-btn-lg bokus-btn bokus-btn-default head-btn" id="cartButton" data-img="cart">
                            <img src="{{ asset('/img/icon/cart.png') }}" alt="" class="btn-img" style="height: 22px"/>
                            <span>Shopping cart</span>
                        </a>
                    </div> <!-- end of .header-btn -->
                </div><!-- end of Cart button -->
            </div> <!-- end of menu -->
        </div>
    </div>
</div><!-- end of header -->
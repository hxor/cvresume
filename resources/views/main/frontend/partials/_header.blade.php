<header id="home">
    <nav id="theMenu" class="menu">

        <!--MENU-->
        <div id="menu-options" class="menu-wrap">

            <!--PERSONAL LOGO-->
            <div class="logo-flat">
                <img alt="personal-logo" class="img-responsive" src="{{ asset('ax/images/WeeeWork.jpg') }}">
            </div>
            <br>

            <!--OPTIONS-->
            <a href="#home"><i class="title-icon fa fa-user"></i>Home</a>
            <a href="#about"><i class="title-icon fa fa-dashboard"></i>About</a>
            <a href="#education"><i class="title-icon fa fa-graduation-cap"></i>Education</a>
            <a href="#skills"><i class="title-icon fa fa-sliders"></i>Skills</a>
            <a href="#experience"><i class="title-icon fa fa-suitcase"></i>Experience</a>
            <a href="#portfolios"><i class="title-icon fa fa-archive"></i>Portfolios</a>
            <a href="#interest"><i class="title-icon fa fa-heart"></i>Interest</a>
            <a href="#testimonials"><i class="title-icon fa fa-users"></i>Testimonials</a>
            {{-- <a href="#pricing-table"><i class="title-icon fa fa-money"></i>Pricing</a>
            <a href="#blog"><i class="title-icon fa fa-pencil-square"></i>Blog</a> --}}
            <a href="#contact"><i class="title-icon fa fa-envelope"></i>Contact</a>
        </div>

        <!-- MENU BUTTON -->
        <div id="menuToggle">
            <div class="toggle-normal">
                <i class="material-icons top-bar">remove</i>
                <i class="material-icons middle-bar">remove</i>
                <i class="material-icons bottom-bar">remove</i>
            </div>
        </div>
    </nav>

    <div class="header-background section">
        <div id="v-card-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <!-- V-CARD -->
                        <div id="v-card" class="card">

                            <!-- PROFILE PICTURE -->
                            <div id="profile" class="right">
                                <img alt="profile-image" class="img-responsive" src="{{ asset('ax/images/profile.png') }}">
                                <div class="slant"></div>
                                <div class="btn-floating btn-large add-btn">
                                    <i class="material-icons">add</i></div>
                            </div>

                            <div class="card-content">

                                <!-- NAME & STATUS -->
                                <div class="info-headings">
                                    <h4 class="text-uppercase left">{{ $pro->firstname }} {{ $pro->lastname }}</h4>
                                    <h6 class="text-capitalize left">{{ $pro->title }}</h6>
                                </div>

                                <!-- CONTACT INFO -->
                                <div class="infos">
                                    <ul class="profile-list">
                                        <li class="clearfix">
                                            <span class="title"><i class="material-icons">email</i></span>
                                            <span class="content">{{ $pro->email }}</span>
                                        </li>
                                        <li class="clearfix">
                                            <span class="title"><i class="material-icons">language</i></span>
                                            <span class="content">hakim.weeework.net</span>
                                        </li>
                                        <li class="clearfix">
                                            <span class="title"><i class="material-icons">phone</i></span>
                                            <span class="content">{{ $pro->phone }}</span>
                                        </li>
                                        <li class="clearfix">
                                            <span class="title"><i class="material-icons">place</i></span>
                                            <span class="content">{{ $pro->add_street }}, {{ $pro->add_city}}, {{ $pro->add_stat }}, {{ $pro->add_country }}</span>
                                        </li>

                                    </ul>
                                </div>

                                <!--LINKS-->
                                <div class="links">
                                    <!-- FACEBOOK-->
                                    <a href="https://fb.me/o1o1oo11o" id="first_one"
                                       class="social btn-floating indigo"><i
                                            class="fa fa-facebook"></i></a>
                                    <!-- TWITTER-->
                                    <a href="https://twitter/o1o1oo11o" class="social  btn-floating blue"><i
                                            class="fa fa-twitter"></i></a>
                                    <!-- GOOGLE+-->
                                    <a href="https://plus.google.com/u/0/111438954764836022806" class="social  btn-floating red"><i
                                            class="fa fa-google-plus"></i></a>
                                    <!-- LINKEDIN-->
                                    <a href="#" class="social  btn-floating blue darken-3"><i
                                            class="fa fa-linkedin"></i></a>
                                    <!-- RSS-->
                                    <a href="#" class="social  btn-floating orange darken-3"><i
                                            class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
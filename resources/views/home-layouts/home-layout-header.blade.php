   <!-- preloader -->
   <div class="preloader">
    <div id="handle-preloader" class="handle-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="S" class="letters-loading">
                    S
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="T" class="letters-loading">
                    T
                </span>
                <span data-text-preloader="E" class="letters-loading">
                    E
                </span>
            </div>
        </div>  
    </div>
</div>
<!-- preloader end -->


<!-- search-popup -->
<div id="search-popup" class="search-popup">
    <div class="close-search"><span>Close</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="#">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn style-four">
                    </fieldset>
                </div>
            </form>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="index-2.html">Finance</a></li>
                <li><a href="index-2.html">Service</a></li>
                <li><a href="index-2.html">Growth</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- search-popup end -->


<!-- main header -->
<header class="main-header style-one home-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 logo-column">
                <div class="logo-box style-two">
                    <figure class="logo"><a href="#"><img src="{{URL::asset("home_assets/assets/images/logo_large_2.png")}}" width="150px" alt=""></a></figure>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 outer-column">
                <div class="outer-box">
                    <div class="header-top clearfix">
                        <div class="top-right pull-right clearfix">
                            <div class="support"><i class="flaticon-music"></i><span>Join Us Today</span>
                                <a href="tel:8876721208">+91 88767 21208</a>
                            </div>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="search-box-outer">
                                <form action="#" method="post" class="search-btn">
                                    <button type="button" class="search-toggler"><i class="flaticon-search"></i>Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="header-upper clearfix">
                        <div class="menu-area pull-right clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="#">Home</a>
                                        </li> 
                                        <li class="dropdown"><a href="/coursehome">Courses</a>
                                            <ul>
                                                <li><a href="/courses">Data Science<i class="flaticon-next"></i></a></li>
                                                <li><a href="/courses">Computer Vision<i class="flaticon-next"></i></a></li>
                                                <li><a href="/courses">BI - Business Intelligence<i class="flaticon-next"></i></a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#for-business">For Business</a>
                                        </li>
                                        <li class="dropdown"><a href="#case-studies">Case Studies</a>
                                        </li>
                                        {{-- <li class="dropdown"><a href="#">Contact</a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </nav>
                            <div class="btn-box">
                                <a href="/coursehome" class="theme-btn style-one">Join Us Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <figure class="logo-box"><a href="#"><img src="{{URL::asset("home_assets/assets/images/logo_base.png")}}" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <div class="btn-box">
                    <a href="#" class="theme-btn style-one">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="index-2.html"><img src="{{URL::asset("home_assets/assets/images/logo.png")}}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
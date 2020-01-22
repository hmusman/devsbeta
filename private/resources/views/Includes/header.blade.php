<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/img/logo/db-logo.png')}}">
    <title>Best Web Design and Web Development Company | @yield('title')</title>
    <meta name="description"
        content="Our professional team converts your ideas into a brand with their skills. We offer web development, web & graphic designing, Application development, SEO services & IT.">
    <meta name="keywords"
        content="DESIGN & DEVELOPMENT DESIGN, DEVELOPMENT & SEO Android SOCIAL MANAGEMENT & MARKETING Customization Plugin & Theme Development">
    <meta name="author" content="DevsBeta">
    <!--og-tags-->
    <meta property="og:title" content="DevsBeta - Build your brand" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="https://devsbeta.com" />
    <meta property="og:description"
        content="Devsbeta is providing the best services for website development. One must choose to contact Devsbeta for the best designs for the buildup of its branding and identification. The best option for the optimization of your websites, Devsbeta has the expert developers. They are also providing you with customization for the development of the best themes and plugins. We are the best at supporting you by enhancing the sales, billing, and ticketing. Developers at Devsbeta are not only available for the development, up-gradation, and modification of the android apps but also provide you their services for social marketing and managements. We offer you with a monthly management service for your websites." />
    <meta property="og:image" content="https://devsbeta.com/assets/img/logo-fb-og-img.png" />
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">

    <link rel="stylesheet" media="screen" href="{{url('assets/css/vendor.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{url('assets/css/theme.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="{{url('assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <script src="{{url('assets/js/modernizr.min.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125641826-2"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-125641826-2');
    </script>
    <!--end google analytics-->
</head>
<style type="text/css">
.icon-box {
    margin-top: 10px;
    background-color: #fff;
    -webkit-box-shadow: 5px 5px 25px 0px rgba(46, 61, 73, 0.2);
    box-shadow: 5px 5px 25px 0px rgba(46, 61, 73, 0.2);
}

.icon-box:hover {
    box-shadow: 2px 4px 8px 0px rgba(46, 61, 73, 0.2);
}

.img-cover {
    background-position: center !important;
    background-size: cover !important
}

.icon-box .icon-box-icon {
    background-color: rgba(172, 50, 228, 0.1);
    color: #ac32e4;
}

.icon-box {
    border: 3px solid #1aa687;
    padding: 30px 10px;
    height: 325px;
    border-radius: 5px;
}

.icon-box:hover .icon-box-icon {
    background-color: rgba(172, 50, 228, 0.1);
    color: #ac32e4;
}

.icon-box-title {
    margin-bottom: 5px !important;
}

.icon-box .icon-box-text {
    color: #000;
    margin-top: 8px;
    font-size: 13px !important;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .drop {
    color: #1AA687;
}

.beauty {
    width: auto;
    overflow-y: auto;
    width: 300px;
}

.dropdown-content a:hover {
    color: #1AA687;
}

#imb {
    background-color: white;
}

.icon-box-link {
    color: #343b43;
}

.icon-box a:hover {
    color: #1AA687;
}
/* .icon-box .icon-box-link {
  
 } */
</style>

<body>
    <div id="ssb-container" class="ssb-btns-right ssb-anim-slide">
        <ul class="ssb-light-hover">
            <li id="ssb-btn-3">
                <p>
                    <a href="mailto:info@devsbeta.com" style="outline: none;" class="bordered">
                        <span><img src="https://img.icons8.com/small/24/ffffff/secured-letter.png"></span> Email</a>
                </p>
            </li>
            <li id="ssb-btn-2">
                <p>
                    <a href="skype:usman_gcuf?call" class="bordered"><span><img
                                src="https://img.icons8.com/small/24/ffffff/skype.png"></span> Skype</a>
                </p>
            </li>
            <li id="ssb-btn-0">
                <p>
                    <a href="tel:+923339941145" class="bordered"><span><img
                                src="https://img.icons8.com/small/24/ffffff/phone.png"></span> Call Us</a>
                </p>
            </li>
            <li id="ssb-btn-1">
                <p>
                    <a href="https://wa.me/923339941145"><span><img
                                src="https://img.icons8.com/small/24/ffffff/whatsapp.png"></span> Whatsapp</a>
                </p>
            </li>
        </ul>
    </div>
    <div class="offcanvas-container is-triggered offcanvas-container-reverse" id="mobile-menu">
        <span class="offcanvas-close"><i class="fe-icon-x"></i></span>
        <div class="px-4 pb-4">
            <h6>Menu</h6>
        </div>
        <div class="offcanvas-scrollable-area border-top" style="height:calc(100% - 235px); top: 144px;">
            <div class="accordion mobile-menu" id="accordion-menu">
                <div class="card">
                    <div class="card-header">
                        @if(Request::is('/'))
                        <a class="mobile-menu-link active" href="{{url('/')}}">Home</a>
                        @else
                        <a class="mobile-menu-link " href="{{url('/')}}">Home</a>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        @if(Request::is('portfolio'))
                        <a class="mobile-menu-link active" href="{{url('portfolio')}}">Portfolio</a>
                        @else
                        <a class="mobile-menu-link" href="{{url('portfolio')}}">Portfolio</a>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><a class="mobile-menu-link" href="{{ url('services') }}">service</a><a
                            class="collapsed" href="#blog-submenu" data-toggle="collapse"></a></div>
                    <div class="collapse" id="blog-submenu" data-parent="#accordion-menu">
                        <div class="card-body">
                            <ul>
                                <li class="dropdown-header">Services we provide</li>
                                @foreach($services as $service)
                                    <a class="dropdown-item" href="{{url('services')}}/{{$service->slug}}">{{ $service->title }} {{ $service->subtitle }}</a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        @if(Request::is('contactus'))
                        <a class="mobile-menu-link active" href="{{url('contactus')}}">Contact</a>
                        @else
                        <a class="mobile-menu-link" href="{{url('contactus')}}">Contact</a>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        @if(Request::is('about'))
                        <a class="mobile-menu-link active" href="{{url('about')}}">About</a>
                        @else
                        <a class="mobile-menu-link" href="{{url('about')}}">About</a>
                        @endif
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <a class="mobile-menu-link @if(Request::is('blog')) active @endif"
                            href="{{url('blog')}}">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-footer px-4 pt-3 pb-2 text-center">
            <a class="social-btn sb-style-3 sb-twitter" href=""><i class="socicon-twitter"></i>
            </a>
            <a class="social-btn sb-style-3 sb-facebook" href=""><i class="socicon-facebook"></i>
            </a>
            <a class="social-btn sb-style-3 sb-pinterest" href=""><i class="socicon-pinterest"></i>
            </a>
            <a class="social-btn sb-style-3 sb-instagram" href=""><i class="socicon-instagram"></i>
            </a>
        </div>
    </div>
    <header class="navbar-wrapper navbar-boxed navbar-sticky">
        <div class="container-fluid">
            <div class="d-table-cell align-middle pr-md-3">
                <a class="navbar-brand mr-1" href="{{ url('/') }}"><img
                        src="{{url('assets/img/logo/DevsBeta-Final.png')}}" alt="CreateX" /></a>
            </div>
            <div class="d-table-cell w-100 align-middle pl-md-3">
                <div class="navbar justify-content-end p-3">
                    <ul class="navbar-nav d-none d-lg-block">
                        <!-- Home-->
                        @if(Request::is(''))
                        <li class="nav-item mega-dropdown-toggle active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        @else
                        <li class="nav-item mega-dropdown-toggle">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        @endif
                        <!-- Portfolio-->
                        @if(Request::is('portfolio'))
                        <li class="nav-item dropdown-toggle active"><a class="nav-link"
                                href="{{url('portfolio')}}">Portfolio</a>
                            @else
                        <li class="nav-item dropdown-toggle">
                            <a class="nav-link" href="{{url('portfolio')}}">Portfolio</a>
                            @endif
                        </li>
                        <div class="dropdown">
                            @if(Request::is('services'))
                            <li class="nav-item mega-dropdown-toggle active"><a class="nav-link drop"
                                    href="{{ url('services') }}">Services</a>
                            </li>
                            @else
                            <li class="nav-item mega-dropdown-toggle"><a class="nav-link drop"
                                    href="{{ url('services') }}">Services</a>
                            </li>
                            @endif
                            <div class="dropdown-content beauty">
                                @foreach($services as $service)
                                    <a href="{{url('services')}}/{{$service->slug}}">{{ $service->title }} {{ $service->subtitle }}</a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Blog-->
                        @if(Request::is('contactus'))
                        <li class="nav-item mega-dropdown-toggle active"><a class="nav-link"
                                href="{{url('contactus')}}">Contact</a>
                        </li>
                        @else
                        <li class="nav-item mega-dropdown-toggle"><a class="nav-link"
                                href="{{url('contactus')}}">Contact</a>
                        </li>
                        @endif
                        <!-- Shop-->
                        @if(Request::is('about'))
                        <li class="nav-item mega-dropdown-toggle active"><a class="nav-link"
                                href="{{url('about')}}">About</a>
                        </li>
                        @else
                        <li class="nav-item mega-dropdown-toggle"><a class="nav-link" href="{{url('about')}}">About</a>
                        </li>
                        @endif
                        <li class="nav-item mega-dropdown-toggle @if(Request::is('blog')) active @endif"><a
                                class="nav-link" href="{{url('blog')}}">Blog</a>
                        </li>
                    </ul>
                    <div>
                        <ul class="navbar-buttons d-inline-block align-middle">
                            <li class="d-block d-lg-none"><a href="#mobile-menu" data-toggle="offcanvas"><i
                                        class="fe-icon-menu"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
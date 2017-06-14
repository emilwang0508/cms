<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Contact</title>
    <link href="/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="/bootstrap/3.3.7/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!--[if IE 7]>
    <link href="/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
    <![endif]-->

    <!-- Google Analytics for www.multiverseinc.com -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-80726941-2', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" style="width: 225px;" href="/">
                    <span class="light"></span><img src="/img/multiverselogolong.png" align="left" class="img-responsive">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav" style="text-align: center;">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="index"></a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ourgames">Games</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="seekingdawn" style="color: white;">Seeking Dawn</a>
                            <li><a href="https://www.oculus.com/experiences/gear-vr/1013248532088752/" style="color: white;" target="_blank">Dream Flight</a></li>
                            <li><a href="https://play.google.com/store/apps/details?id=com.multiverse.galaxyrush" style="color: white;" target="_blank">Galactic Rush</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="https://www.linkedin.com/company/multiverse-entertainment">CAREERS</a>
                    </li>
                    <li>
                        <a href="posts">DEVBLOG</a>
                    </li>
                    <li>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="ourgames">ABOUTS</a>
                        <ul class="dropdown-menu" style="background: black;">
                            <li><a href="{{url('about#company')}}" style="color: white;">Company</a>
                            <li><a href="{{url('about#press')}}" style="color: white;">Press</a>
                            <li><a href="{{url('about#partner')}}" style="color: white;">Partner</a>
                            <li><a href="{{url('privacy')}}" style="color: white;">privacy</a>
                            <li><a href="{{url('tos')}}" style="color: white;">Terms of Service</a>
                        </ul>
                    </li>
                    <li>
                        <a href="contact">Contact</a>
                    </li>
                </ul>
                <ul class="media-link hidden-sm hidden-xs">
                    <li><a href="https://www.facebook.com/MultiverseVR/" target="_blank"><i class="fa fa-facebook color-white"></i></a></li>
                    <li><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter color-white"></i></a></li>
                    <!-- <li><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
                    <li><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin color-white"></i></a></li>
                    <!-- <li><a href="#"><i class="iconfont icon-twitch color-white" target="_blank">&#xe7ed;</i></a></li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="banner contact-banner">
        <div class="container">
            <div class="title">CONTACT US</div>
            <div class="des">via phone, email, social media, or good ol' regular mail</div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
        </div>
    @endif
    @if(Session::has('message'))
        <div class="alert alert-info"> {{Session::get('message')}}
        </div>
    @endif
    <div class="container contact-form">
        <h2 class="text-center">Got a question for us?</h2>
        <form action="{{ url('contact') }}" class="" method="post">
            {{ csrf_field() }}
            <div class="contact-input col-lg-6">
                <div class="form-group">
                    <label for="name" class="sr-only"></label>
                    <input type="text" placeholder="Your Name" name="name" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="organization" class="sr-only"></label>
                    <input type="text" placeholder="Organization" name="organization"  class="form-control" id="organization">
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only"></label>
                    <input type="email" placeholder="Email" name="email"  class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="tel" class="sr-only"></label>
                    <input type="tel" placeholder="Phone" name="phone"  class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="message" class="sr-only"></label>
                    <textarea name="message" placeholder="Message" id="message" rows="3"  class="form-control" style="width: 100%"></textarea>
                </div>
                <div class="btn-block text-center">

                    <button type="submit" class="btn btn-danger">SEND</button>
                </div>
            </div>
        </form>
    </div>
    {{--<div class="contact-partners text-center">
        <div class="title ">PARTNERS</div>
        <ul class="container">
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-xs-12"><img src="{{url('img/vive.png')}}" alt=""></li>
        </ul>
    </div>--}}
    <div class="clear_fix"></div>
    <div class="contact">
        <div class="title text-center">CONTACT</div>
        <div class="container">
            <ul class="col-lg-6 col-md-6 col-sm-6 col-md-12">
                <li><a href="mailto:chenjun.li@multiverseinc.com" target="_blank">General:chenjun.li@multiverseinc.com</a></li>
                <li><a href="mailto:chenjun.li@multiverseinc.com" target="_blank">Public Relations:chenjun.li@multiverseinc.com</a></li>
                <li><a href="mailto:chenjun.li@multiverseinc.com" target="_blank">Careers:chenjun.li@multiverseinc.com</a></li>
                <li><a href="mailto:chenjun.li@multiverseinc.com" target="_blank">Business:chenjun.li@multiverseinc.com</a></li>
            </ul>
            <ul class="col-lg-6 col-md-6 col-sm-6 col-md-12">
                <li><a href="" target="_blank">facebook.com/MultiverseVR</a></li>
                <li><a href="" target="_blank">twitter.com/VRmultiverse</a></li>
                <li><a href="" target="_blank">instagram.com//MultiverseVR</a></li>
                <li><a href="" target="_blank">linkedin.com/company/multiverse-entertainment</a></li>
            </ul>
        </div>

    </div>
    <div id="googleMap" style="width: 100%;height: 30rem">

    </div>
    <div class="footer">
        <div class="left fl col-sm-12 col-md-4">
            <div class="text"><a href="http://www.multiverseinc.com/legal/tos/">Terms of Service </a>|<a href="http://www.multiverseinc.com/legal/privacy/" target="_blank"> Privacy Policy</a> 	</div>
            <div class="text">Copyright © Shenzhen Modengshiji Technology Co. Ltd. ICP</div>
            <div class="text">Record: <a href="">粤ICP备16110936-1</a></div>
        </div>
        <div class="center fl col-md-4 hidden-sm hidden-xs">
            <ul>
                <li class="fl pd-20"><a href="https://www.facebook.com/MultiverseVR" target="_blank"><i class="fa fa-facebook fa-3x color-white"></i></a></li>
                <li class="fl pd-20"><a href="https://twitter.com/VRmultiverse" target="_blank"><i class="fa fa-twitter fa-3x color-white"></i></a></li>
                <!-- <li class="fl"><a href="#"><i class="iconfont icon-ins color-white" target="_blank">&#xe614;</i></a></li> -->
                <li class="fl pd-20"><a href="https://www.linkedin.com/company/multiverse-entertainment" target="_blank"><i class="fa fa-linkedin fa-3x color-white"></i></a></li>
                <!-- <li class="fl"><a href="#"><i class="iconfont icon-twitch color-white">&#xe7ed;</i></a></li> -->
            </ul>
        </div>
        <div class="right fl col-md-4 hidden-sm hidden-xs">
            <div class="text">PARTNERS</div>
            <ul class="platform">
                <li class="fl"><img src="/img/vive.png" alt="vive"></li>
                <li class="fl"><img src="/img/oculus.png" alt="Gear VR"></li>
                <li class="fl"><img src="/img/steam.png" alt="SteamVR"></li>
            </ul>
        </div>
    </div>
    <script src="/js/jquery-3.2.1.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/js/grayscale.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCWrXFcigxn4wV3r1vKeX-k6GUorhCgQhY&sensor=false"></script>
    <script>
        var myCenter=new google.maps.LatLng(51.508742,-0.120850);
        var marker;

        function initialize()
        {
            var mapProp = {
                center:myCenter,
                zoom:5,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };

            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            marker=new google.maps.Marker({
                position:myCenter,
                animation:google.maps.Animation.BOUNCE
            });

            marker.setMap(map);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>
@extends('layouts.master')
@section('title')
    <title>About</title>
    @endsection
@section('content')
    <div class="banner about-banner text-center">
        <div class="container">
            <p class="title">Multiverse</p>
            <p class="subtitle">Create <span>Virtual</span> Real<span>ity</span>    Games</p>
            <p class=""><span>Premium virtual Reality Content Publisher</span></p>
        </div>
    </div>
    <div class="company container-fluid text-center tab-area">
        <p class="title ">OUR COMPANY</p>
        <ul id="company-content" class="tab-content container col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <li class="active">To provide help for excellent developers to create and build extraordinary games.</li>
            <li>Working with creativeness, efficiency and joy.</li>
            <li>MULTIVERSE is found in March 2016, the initial published game <Dream Flight> has gained a magnificent review from Gear VR. Through an entire year of efforts, finally a well-crafted new game <Seeking Dawn> is coming soon...</li>
        </ul>
        <ul id="btn-area" class="tab-nav container col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <li class="active">our vision</li>
            <li>our value</li>
            <li>our story</li>

        </ul>
    </div>
    <div class="press text-center">
        <p class="title ">PRESS</p>
        <div id="posts-area" class="container">
            <div class="btn-area hidden-xs" id="prev-btn"><i class="fa fa-chevron-left"></i></div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="/img/press1.png" alt=""></div>
                    <div class="des">One of the most visually arresting experience</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="/img/press2.png" alt=""></div>
                    <div class="des">One of the most visually arresting experience</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="post">
                    <div class="thumb"><img src="/img/press3.png" alt=""></div>
                    <div class="des">One of the most visually arresting experience</div>
                    <a href="#" class="link-href">Read More</a>
                </div>
            </div>
            <div class="btn-area hidden-xs" id="next-btn"><i class="fa fa-chevron-right"></i></div>
        </div>
    </div>
    <div class="about-partners">
        <div class="container">
            <p class="title text-center">OUR PARTNERS</p>
            <ul>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/partners1.png') }}" alt="vive"></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/press3.png') }}" alt=""></li>
                <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center"><img src="{{ url('img/partners-steam.png') }}" alt=""></li>
            </ul>

            {{--<div class="join-area">
                <div class="col-lg-8 col-lg-offset-2">
                    <span class="col-lg-6">Want to join our team</span> <a href="#" class="">Search Jobs</a>
                </div>
            </div>--}}
        </div>
    </div>
@section('script')
<script>
    var tabs = $('.tab-area');
    var uls= $('.tab-content');
    var ulv= $('.tab-nav');
    ulv.children('li').click(function () {
        var _li = $(this).index()
        ulv.children('li').removeClass('active');
        uls.children('li').removeClass('active');
        $(this).addClass('active');
        uls.children().eq(_li).addClass('active');
        console.log(this)
    })
</script>
@endsection
@extends('layouts.app')
@if ($agent->isMobile())
    @section('class-name')
        class="mobile"
    @endsection
@else
    @section('head-extend')
        <link rel="stylesheet" type="text/css" href="//{{getenv('RESOURCE_PATH')}}/fullpage/jquery.fullpage.css" />
    @endsection
    @section('class-name')
        class="fullpage"
    @endsection
@endif
@section('content')
    @if ($agent->isMobile())
        <m-index></m-index>
    @else
        <Index></Index>
    @endif
@endsection
@if ($agent->isMobile())
@else
@section('foot-extend')
    <script src="//{{getenv('RESOURCE_PATH')}}/js/jquery-3.2.1.js"></script>
    <script src="//{{getenv('RESOURCE_PATH')}}/js/jquery-ui.js"></script>
    <script src="//{{getenv('RESOURCE_PATH')}}/fullpage/scrolloverflow.js"></script>
    <script src="//{{getenv('RESOURCE_PATH')}}/fullpage/jquery.fullpage.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
                menu: '#menu',
                scrollingSpeed: 1000,
                scrollOverflow: true,
                scrollOverflowOptions: {
                    click: true
                }
            });

        });
    </script>
    @endsection
@endif
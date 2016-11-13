@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- Menu --}}
        <div class="col-md-3">
            <div class="list-group table-of-contents">
                <a href="{{ url('/viewer') }}" class="list-group-item">Home</a>
                <a href="{{ url('/viewer/profile') }}" class="list-group-item">Profile</a>
                <a href="{{ url('/viewer/channels') }}" class="list-group-item">Channels</a>
                <a href="{{ url('/viewer/faq') }}" class="list-group-item">FAQ</a>
            </div>
        </div>

        {{-- Contents --}}
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                        poster="{{ asset($video->path) . ".jpg" }}" data-setup="{}">
                        <source src="{{ asset($video->path) }}" type='video/webm'>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a web browser that
                            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                        </p>
                    </video>

                </div>
            </div>

        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

@section('js_extra')
    <script type="text/javascript" src="{{ asset('js/watch.js') }}"></script>
@endsection

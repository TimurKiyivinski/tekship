@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- Menu --}}
        <div class="col-md-3">
            <div class="list-group table-of-contents">
                <a href="{{ url('/viewer') }}" class="list-group-item active">Home</a>
                <a href="{{ url('/viewer/profile') }}" class="list-group-item">Profile</a>
                <a href="{{ url('/viewer/channels') }}" class="list-group-item">Channels</a>
                <a href="{{ url('/viewer/faq') }}" class="list-group-item">FAQ</a>
            </div>
        </div>

        {{-- Contents --}}
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-body">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                            <li role="presentation"><a href="#trending" aria-controls="trending" role="tab" data-toggle="tab">Trending</a></li>
                            <li role="presentation"><a href="#favourites" aria-controls="favourites" role="tab" data-toggle="tab">Favourites</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                @foreach ($videos as $video)
                                    <div class="col-md-4 col-video">
                                        <a href="#">
                                            <div class="panel panel-video">
                                                <div class="panel-body" style="background-image: url({{ asset($video->path) . ".jpg" }});">

                                                </div>
                                                <div class="panel-footer">
                                                    <p><strong class="video-title">Title</strong> <span class="video-duration">12.00</span></p>
                                                    <p class="video-published_at">12 Nov 2016</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                <div class="col-xs-12">
                                    {{ $videos->links() }}
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="trending">Trending</div>
                            <div role="tabpanel" class="tab-pane" id="favourites">Favourites</div>
                        </div>

                    </div>
                </div>
            </div>
        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

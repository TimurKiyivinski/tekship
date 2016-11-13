@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- Menu --}}
        <div class="col-md-3">
            <div class="list-group table-of-contents">
                <a href="{{ url('/viewer') }}" class="list-group-item">Home</a>
                <a href="{{ url('/viewer/profile') }}" class="list-group-item">Profile</a>
                <a href="{{ url('/viewer/channels') }}" class="list-group-item active">Channels</a>
                <a href="{{ url('/viewer/faq') }}" class="list-group-item">FAQ</a>
            </div>
        </div>

        {{-- Contents --}}
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    User Subscriptions
                </div>
                <ul class="list-group">
                    @foreach($subscriptions as $subscription)
                        <li class="list-group-item">{{ $subscription->channel->name }}</a>
                    @endforeach
                </ul>
                <div class="panel-heading">
                    {{ $subscriptions->links() }}
                </div>
            </div>

        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

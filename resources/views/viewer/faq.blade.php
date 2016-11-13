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
                <a href="{{ url('/viewer/faq') }}" class="list-group-item active">FAQ</a>
            </div>
        </div>

        {{-- Contents --}}
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Frequently Asked Questions</h4>
                </div>
                <div class="panel-body">

                    <ol class="faq">
                        <li> {{-- 1 --}}
                            {{-- Clickable Question --}}
                            <a role="button" data-toggle="collapse" href="#faq_1" aria-expanded="false">
                                <strong>Question:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </a>
                            {{-- Answer --}}
                            <div class="collapse" id="faq_1">
                                <div class="well">
                                    <strong>Answer:</strong>
                                    <p>
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li> {{-- 2 --}}
                            {{-- Clickable Question --}}
                            <a role="button" data-toggle="collapse" href="#faq_2" aria-expanded="false">
                                <strong>Question:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
                            </a>
                            {{-- Answer --}}
                            <div class="collapse" id="faq_2">
                                <div class="well">
                                    <strong>Answer:</strong>
                                    <p>
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>

        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

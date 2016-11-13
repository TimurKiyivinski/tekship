@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="page-header">
            <h1>TekShip <small><i>Vessel at your service once more</i></small></h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                {{-- Description --}}
                <h2>Free Speech</h2>
                <p>
                    Honest reviews at the very honest without demonitization.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                </p>
            </div>
            <div class="col-md-6">
                {{-- Pricing and Sign Up --}}
                <h2>Get Early Access to Videos</h2>
                <p>
                    Sign up today at only <strong class="text-warning">$2.99/month</strong>. You can sign up with the link below
                </p>
                <a class="btn btn-success btn-lg btn-block" href="{{ url('/register') }}">Sign Up</a>
                <a class="btn btn-info btn-lg btn-block" href="{{ url('guest/faq') }}">FAQ</a>
            </div>
        </div>
    </div>

    {{-- About Us Section --}}
    {{-- Who Section --}}
    <div class="page-header">
        <h2>Who Uses TekShip</h2>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="#"><h3>Tech Reviewers</h3></a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
        </div>
        <div class="col-md-4">
            <a href="#"><h3>Game Reviewers</h3></a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
        </div>
        <div class="col-md-4">
            <a href="#"><h3>You</h3></a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
        </div>
    </div>

    {{-- Why Section --}}
    <div class="page-header">
        <h2 class="text-right">Why TekShip</h2>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="#"><h3>No more Demonitization</h3></a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
        </div>
        <div class="col-md-6">
            <a href="#"><h3>Free Speech</h3></a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            </p>
        </div>
    </div>
</div>
@endsection

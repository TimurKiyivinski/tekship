@extends('samples.template')

@section('content')
<div class="container">
    <div class="video">
        <div class="placeholder_video">

        </div>
        <div class="placeholder_info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-2 btn-video">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-share"></span>
                            </button>
                        </div>
                        <div class="col-xs-2 btn-video">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                            </button>
                        </div>
                        <div class="col-xs-2 btn-video">
                            <button class="btn btn-default">
                                <span class="glyphicon glyphicon-comment"></span>
                            </button>
                        </div>
                        <div class="col-xs-6">
                            <button class="btn btn-default">
                                <div class="user-icon">
                                    <button class="btn btn-primary"></button>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <h4>Username</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

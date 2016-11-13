@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- Menu --}}
        <div class="col-md-3">
            <div class="list-group table-of-contents">
                <a href="{{ url('/viewer') }}" class="list-group-item">Home</a>
                <a href="{{ url('/viewer/profile') }}" class="list-group-item active">Profile</a>
                <a href="{{ url('/viewer/channels') }}" class="list-group-item">Channels</a>
                <a href="{{ url('/viewer/faq') }}" class="list-group-item">FAQ</a>
            </div>
        </div>

        {{-- Contents --}}
        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-body">
                    {{-- Profile Name --}}
                    <h3 class="text-center"></h3>

                    {{-- Profile Photo --}}
                    {{--
                    <div class="profile-photo">
                        <img src="..." alt="..." class="img-circle text-center">
                    </div>
                     --}}

                    {{-- User Info --}}
                    <div class="profile-info">
                        <form class="form-horizontal">
                            {{-- Name --}}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            {{-- Email --}}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            {{-- Password --}}
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-8">
                                    <button type="submit" class="btn btn-primary form-control" name="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div> {{-- end .profile-info --}}
                </div> {{-- end .panel-body --}}
            </div> {{-- end .panel --}}

            <div class="row">
                {{-- Billing --}}
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="text-warning">Credit/Debit Card</h3>
                            <p>We currently provides payment through Credit/Debit Card only.</p>

                            {{-- Payment Methods - label --}}
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Card will be charged monthly for resources used. All major cards are accepted.</p>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-default form-control" data-target="addcardmodal" data-toggle="modal">Add Card</button>
                                </div>
                            </div>

                            {{-- Payment Methods - dynamic data - the cards --}}
                            {{-- Current displayed is hardcoded data --}}
                            <div class="row">
                                <div class="col-md-8">
                                    <p>
                                        <strong class="card-cardName">BSN Debit Card (VISA)</strong>
                                        <span>xxxx-<strong class="card-endingNumber">1844</strong></span>
                                    </p>
                                    <p>
                                        <span class="card-expired_at">Expires on 12/2020</span> •
                                        <span class="card-created_at">Added on October 28, 2014</span>
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Deactivating Modal --}}
                <div class="modal fade" id="addcardmodal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title">ADD CREDIT/DEBIT CARD</h3>
                            </div>
                            <div class="modal-body">
                                <h3>YOUR DETAILS</h3>
                                <h3>CREDIT CARD DETAILS</h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-user="" disabled>Deactivate Account</button>
                            </div>
                        </div>
                    </div> {{-- end .modal-dialog --}}
                </div> {{-- end .modal --}}
            </div> {{-- end .row --}}

                {{-- Deactivate Panel --}}
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="text-danger">Deactivate</h3>
                            <p>This would delete your account and subscription. No refunds.</p>
                            <button class="btn btn-danger" data-target="#deactivate" data-toggle="modal">Deactivate</button>
                        </div>
                    </div>
                </div>

                {{-- Deactivating Modal --}}
                <div class="modal fade" id="deactivate" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h3 class="modal-title">DEACTIVATION</h3>
                                <label for="name">Please reenter your name to confirm this is your account that you're gonna delete.</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-user="" disabled>Deactivate Account</button>
                            </div>
                        </div>
                    </div> {{-- end .modal-dialog --}}
                </div> {{-- end .modal --}}
            </div> {{-- end .row --}}

        </div> {{-- end .col --}}
    </div> {{-- end .row --}}
</div> {{-- end .container --}}
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <h2>Required Fields</h2>
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

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
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>


                    <h2>Payment Method</h2>

                    {{-- Credit Card --}}
                    <div class="form-group{{ $errors->has('creditcard') ? ' has-error' : '' }}">
                        <label for="creditcard" class="col-md-4 control-label">Credit Card Number</label>
                        <div class="col-md-6">
                            <input id="creditcard" type="text" class="form-control" name="creditcard" value="{{ old('creditcard') }}">
                            @if ($errors->has('creditcard'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('creditcard') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cvv') ? ' has-error' : '' }}">
                        <label for="cvv" class="col-md-4 control-label">CVV</label>
                        <div class="col-md-3">
                            <input id="cvv" type="text" class="form-control" name="cvv" value="{{ old('cvv') }}">
                            @if ($errors->has('cvv'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cvv') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

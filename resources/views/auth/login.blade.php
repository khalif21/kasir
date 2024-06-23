@extends('layouts.auth')

@section('login')
    <div class="login-box">

        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ url($setting->path_logo ?? '') }}" alt="shouse.png" width="150">
                    </a>
                </div>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3 @error('email') is-invalid @enderror">
                        <input type="email" class="form-control" name="email" placeholder="email" required value="{{ old('email') }}" autofocus>
                        <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                        </div>
                        </div>
                        @error('email')
                        <div class="help-block">{{ $message }}</div>
                        @else
                        <div class="help-block with-errors"></div>
                        @enderror
                    </div>
                    <div class="input-group mb-3  @error('password') is-invalid @enderror">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                        <div class="help-block">{{ $message }}</div>
                        @else
                        <div class="help-block with-errors"></div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.login-card-body -->
            </div>
        </div>
    @endsection

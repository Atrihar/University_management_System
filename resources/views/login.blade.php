@extends('admin.layouts.auth')

@section('content')

    <body>
        <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        @if (Session::has('info'))
                            <div class="alert alert-info">
                                <strong>{{ Session::get('info') }}</strong>
                            </div>
                        @endif

                        <div class="card-group d-block d-md-flex row">
                            <div class="card col-md-7 p-4 mb-0">

                                <form method="post" action="{{ url('/userLogin') }}" class="pt-3">
                                    @csrf
                                    <div class="card-body">
                                        <h1>Login</h1>
                                        <p class="text-medium-emphasis">Sign In to your account</p>

                                        <div class="input-group mb-3"><span class="input-group-text">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}">
                                                    </use>
                                                </svg></span>

                                            <input class="form-control" name="email" id="email" type="email"
                                                placeholder="Email">
                                        </div>

                                        <div class="input-group mb-4"><span class="input-group-text">
                                                <svg class="icon">
                                                    <use
                                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                                    </use>
                                                </svg></span>

                                            <input class="form-control" name="password" id="password" type="password"
                                                placeholder="Password">
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <button class="btn btn-primary px-4" type="submit">Login</button>
                                            </div>

                                            <div class="col-6 text-end">
                                                <button class="btn btn-link px-0" type="button">Forgot password?</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>
                            <div class="card col-md-5 text-white bg-primary py-5">
                                <div class="card-body text-center">
                                    <div>
                                        <h2>Sign up</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua.</p>
                                            <a href="{{ url('/std_register') }}" class="btn btn-lg btn-outline-light mt-3" type="button">Register As Student</a>
                                            <a href="{{ url('/teacher_registation') }}" class="btn btn-lg btn-outline-light mt-3" type="button">Register As Teacher</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection

@extends('layout.auth')

@section('content')
    <div class="col-lg-6">
        <div class="row flex-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6"><a class="d-flex flex-center text-decoration-none mb-4"
                    href="/index.html">
                    <div class="d-flex align-items-center fw-bolder fs-5 d-inline-block"><img
                            src="/assets/img/icons/logo.png" alt="phoenix" width="58" />
                    </div>
                </a>
                <div class="text-center mb-7">
                    <h3 class="text-1000">Sign Up</h3>
                    <p class="text-700">Create your account today</p>
                </div>
                <form action="/register" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name" />
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label" for="email">Email address</label>
                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" />
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-control form-icon-input" id="password" type="password" name="password"
                                placeholder="Password" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="confirm_password">Confirm Password</label>
                            <input class="form-control form-icon-input" id="confirm_password" type="password" name="password_confirmation"
                                placeholder="Confirm Password" />
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" id="termsService" type="checkbox" />
                        <label class="form-label fs--1 text-none" for="termsService">I accept the <a href="/terms">terms
                            </a>and <a href="/privacy">privacy policy</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">Sign up</button>
                    <div class="text-center"><a class="fs--1 fw-bold"
                            href="/login">Sign in to an existing account</a></div>
                </form>
            </div>
        </div>
    </div>
@endsection

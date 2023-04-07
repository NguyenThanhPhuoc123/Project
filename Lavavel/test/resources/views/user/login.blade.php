@extends('layout.admin.master')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Login</h3>
                    </div>
                    <div class="card-body">
                        <div class="login_register">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                <span class="d-block">{{ $error}}</span>
                                @endforeach
                            </div>
                            @endif

                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                            @elseif(session('success_loign'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif
                        </div>

                        <form action="" method="POST">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" value="" />
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                <label for="password">Password</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="rememberPassword" type="checkbox" value="" />
                                <label class="form-check-label" for="rememberPassword">Remember Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="password">Forgot Password?</a>
                                <!-- <a class="btn btn-primary" href="/">Login</a> -->
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                            @csrf
                        </form>

                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="register">Need an account? Sign up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</main>

@endsection
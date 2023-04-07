@extends('layout.admin.master')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Create Account</h3>
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
                            @elseif(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                            @endif
                        </div>


                        <form action="" method="POST">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="firstName" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                        <label for="inputFirstName">First name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="lastName" id="inputLastName" type="text" placeholder="Enter your last name" />
                                        <label for="inputLastName">Last name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                <label for="inputEmail">Email address</label>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Create a password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="password_confirmation" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <!-- <a class="btn btn-primary btn-block" href="login">Create Account</a> -->
                                    <button class="btn btn-primary btn-block" type="submit">Create Account</button>

                                </div>
                            </div>

                            @csrf
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="login">Have an account? Go to login</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <table class="table table-bordered  table-hover">
                <thead class="thead-dark ">
                    <tr>
                        <th>Firt Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @isset($firstName,$lastName,$email,$password)
                        <td>{{$firstName}}</td>
                        <td>{{$lastName}}</td>
                        <td>{{$email}}</td>
                        <td>{{$password}}</td>
                        @endisset
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
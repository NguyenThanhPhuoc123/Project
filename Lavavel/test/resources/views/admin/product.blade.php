@extends('layout.admin.master')

@section('content')
<main>
    <div class="container">
        <div class="row justify-content-center">
            @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header">
                        <h3 class="text-center font-weight-light my-4">Create Product</h3>
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
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your Name Product" />
                                        <label for="name">Name Product</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" name="img" id="img" type="text" placeholder="Enter your image product" />
                                        <label for="img">Image Product</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="ttdb1" id="ttdb1" type="text" placeholder="name@example.com" />
                                        <label for="ttdb1">Thuộc tính đặt biệt 1</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="ttdb2" id="ttdb2" type="text" placeholder="name@example.com" />
                                        <label for="ttdb2">Thuộc tính đặt biệt 2</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="gia" id="gia" type="text" placeholder="Giá" />
                                        <label for="gia">Giá</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="loai" id="loai" type="text" placeholder="pizza" />
                                        <label for="loai">Loại Sản Phẩm</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 ">
                                        <!-- <input class="form-control" name="inputPassword" id="inputPassword" type="text" placeholder="Create a password" /> -->
                                        <select class="form-select" aria-label="Default select example" name="anhien" id="anhien">
                                            <option value="0">Ẩn</option>
                                            <option value="1">Hiện</option>
                                        </select>
                                        <label for="anhien">Ẩn/Hiện</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="stt" name="stt" id="stt" type="text" placeholder="Confirm password" />
                                        <label for="stt">Số thứ tự</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" name="chitiet" id="chitiet" type="text" placeholder="name@example.com" />
                                <label for="chitiet">Mô tả</label>
                            </div>

                            <div class="mt-4 mb-0">
                                <div class="d-grid">
                                    <!-- <a class="btn btn-primary btn-block" href="login">Create Account</a> -->
                                    <button class="btn btn-primary btn-block" type="submit">Create Product</button>

                                </div>
                            </div>

                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
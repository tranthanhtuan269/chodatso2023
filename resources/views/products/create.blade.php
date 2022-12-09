@extends('layouts.app')

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-start mb-2">
                    <h2>Đăng tin rao bán, cho thuê</h2>
                </div>
                <div class="float-end">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-3">
                <div class="col-3">
                    <h3>Thông tin cơ bản</h3>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-3">
                    <label for="inputPassword" class="col-form-label">Loại tin</label>
                </div>
                <div class="col-9">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1"> Default radio </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2"> Default checked radio </label>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="exampleFormControlInput1" class="col-form-label">Loại bất động sản</label>
                </div>
                <div class="col-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="exampleFormControlInput1" class="col-form-label">Vị trí</label>
                </div>
                <div class="col-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3"></div>
                <div class="col-3 mt-3"></div>
                <div class="col-3 mt-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3 mt-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3 mt-3"></div>
                <div class="col-3 mt-3"></div>
                <div class="col-3 mt-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="exampleFormControlInput1" class="col-form-label">Giá</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Giá (VNĐ)">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="exampleFormControlInput1" class="col-form-label">Diện tích</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Diện tích (m2)">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <label for="exampleFormControlInput1" class="col-form-label">Địa chỉ</label>
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Địa chỉ">
                </div>
            </div>
        </form>
    </div>
@endsection
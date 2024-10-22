@extends('layouts.admin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 p-3">
            <h2>Tutor Manager</h2>
            <div>
                <div class="container">
                    <div class="row height d-flex justify-content-center align-items-center">
                        <div class="col-md-8">
                            <div class="search">
                                <i class="fa fa-search"></i>
                                <input type="text" class="form-control" placeholder="Find ID or Name">
                                <button class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Mã Số</th>
                            <th>Họ Và Tên</th>
                            <th>Ngày Sinh</th>
                            <th>Số Điện Thoại</th>
                            <th>Địa Chỉ</th>
                            <th>Đánh Giá</th>
                            <th>Other</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00001</td>
                            <td>xxx</td>
                            <td>...</td>
                            <td>...</td>
                            <td>Hà Nội</td>
                            <td>
                                <span class="stars">★★★★★</span>
                            </td>
                            <td><a href="http://127.0.0.1:8000/details">Details →</a></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>xxx</td>
                            <td>...</td>
                            <td>...</td>
                            <td>Hà Nội</td>
                            <td>
                                <span class="stars">★★★★★</span>
                            </td>
                            <td><a href="#">Details →</a></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>xxx</td>
                            <td>...</td>
                            <td>...</td>
                            <td>Hà Nội</td>
                            <td>
                                <span class="stars">★★★★★</span>
                            </td>
                            <td><a href="#">Details →</a></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>xxx</td>
                            <td>...</td>
                            <td>...</td>
                            <td>Hà Nội</td>
                            <td>
                                <span class="stars">★★★★★</span>
                            </td>
                            <td><a href="#">Details →</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
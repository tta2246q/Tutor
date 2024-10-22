@extends('layouts.admin')
@section('content')
<div class="container mt-5">
    <div class="card mx-auto p-4 shadow-lg" style="width: 700px; background-color: #2C2F48; color: white; border-radius: 15px;">
        <h3 class="text-center mb-4">Cập Nhật Thông Tin Cá Nhân</h3>
        <div class="d-flex align-items-center mb-4">
            <img src="\images\OIP.png" alt="Avatar" class="rounded-circle">
            <div class="ms-5">
                <p class="mb-0 ">ID: 123456789</p>
                <p class="mb-0">Admin</p>
            </div>
        </div>
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Tên</label>
                    <input type="text" class="form-control" id="name" value="Trần Tuấn Anh">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="trantuananh28052005@gmail.com">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="phone" class="form-label">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="phone" value="0974899027">
                </div>
                <div class="col-md-6">
                    <label for="birthdate" class="form-label">Ngày sinh</label>
                    <input type="date" class="form-control" id="birthdate" value="2005-05-28">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="gender" class="form-label">Giới tính</label>
                    <select id="gender" class="form-select">
                        <option selected>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="address" value="XXX/XXXXX/XXXX/XXXX">
            </div>
            <div class="mb-3">
                <label for="cccd" class="form-label">Số CCCD</label>
                <input type="text" class="form-control" id="cccd" value="XXXXXXXXXXXXXXX">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-warning px-4 py-2">Thay Đổi Thông Tin Cá Nhân</button>
            </div>
        </form>
    </div>
</div>
@endsection
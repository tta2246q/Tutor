@extends('layouts.user')
@section("content")
<div class="container mt-5 mb-5">
    <div class="form_classes">
        <h2 class="text-center">Thông tin lớp tìm gia sư</h2>
    <form>
        <div class="form-group">
            <label for="maLop">Mã lớp</label>
            <input type="text" class="form-control" id="maLop" value="10001" readonly>
        </div>
        <div class="form-group">
            <label for="monDay">Môn dạy</label>
            <input type="text" class="form-control" id="monDay" value="Toán" readonly>
        </div>
        <div class="form-group">
            <label for="hinhThuc">Hình thức</label>
            <input type="text" class="form-control" id="hinhThuc" value="Offline" readonly>
        </div>
        <div class="form-group">
            <label for="soBuoi">Số buổi / tuần</label>
            <input type="text" class="form-control" id="soBuoi" value="3" readonly>
        </div>
        <div class="form-group">
            <label for="gioiTinh">Giới tính</label>
            <input type="text" class="form-control" id="gioiTinh" value="Nữ" readonly>
        </div>
        <div class="form-group">
            <label for="yeuCau">Yêu cầu khác</label>
            <textarea class="form-control" id="yeuCau" rows="3" readonly>Có 3 năm kinh nghiệm dạy. Tốt nghiệp trường sư phạm, giáo viên phải xinh gái, trẻ chung.</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Đăng Kí Dạy</button>
    </form>
    </div>
</div>
@endsection
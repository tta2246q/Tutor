@extends('layouts.user')
@section('content')
    <div class="form-container bg_form">
        <form>
            <h4 class="mb-3">Thông tin của phụ huynh</h4>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Họ tên học sinh">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <select class="form-select">
                        <option selected>Giới tính</option>
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" placeholder="Tuổi">
                </div>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Trường đang theo học">
            </div>

            <h4 class="mt-5 mb-3">Yêu cầu của phụ huynh</h4>
            <div class="mb-3">
                <select class="form-select">
                    <option selected>Giới tính</option>
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Hiện là">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Tốt nghiệp trường">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Chuyên ngành học">
            </div>
            <div class="mb-3">
                <select class="form-select">
                    <option selected>Khu vực</option>
                    <option value="hn">Hà Nội</option>
                    <option value="hcm">TP. Hồ Chí Minh</option>
                    
                </select>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Môn cần dạy">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Số buổi/ tuần">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Hình thức học">
            </div>
            <div class="mb-3">
                <textarea class="form-control" rows="4" placeholder="Yêu cầu khác"></textarea>
            </div>

            <button type="submit" class="submit-btn">Yêu cầu tìm</button>
        </form>
    </div>
@endsection

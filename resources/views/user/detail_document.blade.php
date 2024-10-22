@extends('layouts.user')
@section('content')
<div class="container main-content">
    <div class="content-wrapper">
        <!-- Nội dung chính -->
        <div class="document">
            <h1>TỔNG HỢP CÔNG THỨC HÓA HỌC 9</h1>
            <p class="author">Đăng bởi: Tuấn Anh<br>Ngày 28/8/2024</p>
            <p>
                <strong>I. Bài toán CO2 (hoặc SO2) tác dụng với dung dịch kiềm</strong><br>
                Dung dịch kiềm thường được sử dụng: Nhóm 1: NaOH, KOH...(kim loại hóa trị I; công thức chung MOH)<br>
                Nhóm 2: Ca(OH)2, Ba(OH)2 ...(kim loại hóa trị II, công thức chung M(OH)2)<br>
                <br>
                1. Bài toán dẫn khí CO2 (hoặc SO2) vào dung dịch kiềm MOH<br>
                Đặt T =<br>
                + T ≤ 2: chỉ tạo muối trung hòa;<br>
                + T ≤ 1: chỉ tạo muối axit;<br>
                + 1 < T < 2: thu được cả muối trung hòa và muối axit.<br>
                <br>
                Chú ý: mệnh tảng = m chất hấp thụ<br>
                Ví dụ: Dẫn 2,24 lít khí CO2 vào dung dịch chứa 0,2 mol NaOH. Dung dịch thu được sau phản ứng chứa:<br>
                A. NaHCO3<br>
                B. Na2CO3<br>
                C. Na2CO3 và NaOH<br>
                D. NaHCO3 và NaOH<br>
                <br>
                Giải: Vậy sau phản ứng CO2 và NaOH đều hết, sản phẩm thu được là Na2CO3.<br>
                <br>
                <strong>2. Bài toán dẫn khí CO2 (hoặc SO2) vào dung dịch kiềm M(OH)2</strong><br>
                Đặt T =<br>
                + T ≤ 1: chỉ tạo muối trung hòa<br>
                + T ≥ 2: chỉ tạo muối axit<br>
                + 1 < T < 2: thu được cả muối trung hòa và muối axit.<br>
                <br>
                ...
            </p>
        </div>
        <div class="sidebar">
            <h5>Một số tài liệu khác</h5>
            <a href="#">Tài liệu tham khảo Ngữ Văn 11</a>
            <a href="#">Tài liệu tham khảo Vật Lý 12</a>
            <a href="#">Tài liệu ôn thi THPT 2024</a>
            <a href="#">Tài liệu HSG Toán 2023</a>
            <a href="#">Tài liệu tham khảo Toán 6</a>
            <a href="#">Tài liệu tham khảo Tiếng Anh 6</a>
            <a href="#">Tài liệu tham khảo Toán 2</a>
            <a href="#">Tài liệu tham khảo Ngữ Văn 12</a>
            <a href="#">Tài liệu tham khảo Toán 7</a>
            <a href="#">Tài liệu tham khảo Toán 4</a>
            <a href="#">Tài liệu ôn thi Ngữ Văn 12</a>
            <a href="#">120 câu hỏi Toán cao cấp</a>
            <a href="#">Tài liệu thi HSG 11 môn sử</a>
        </div>
    </div>
</div>


<div class="container text-center mt-5">
    <button class="download-btn">Tải về</button>
    <div class="comment-box mb-5">
        <h5>0 Bình Luận</h5>
        <div class="mb-3">
            <label for="comment" class="form-label">Bình luận.</label>
            <textarea id="comment" placeholder="Phản hồi ý kiến của bạn" ></textarea>
        </div>
        <button disabled>Gửi bình luận</button>
    </div>
</div>
@endsection
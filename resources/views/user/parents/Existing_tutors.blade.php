@extends('layouts.user')
@section('content')
    <div class="container mt-3">
        <img class="images-search-tutor" src="\images\OIP (3).png" alt="">
    </div>

    <div class="container mt-5">
        <div class="text-center">
            <h2 class="mb-4">GIA SƯ HIỆN CÓ</h2>
        </div>
        <div class="row justify-content-center filter-container">
            <!-- Hàng thứ nhất với 3 ô -->
            <div class="col-md-4 mb-3 ">
                <select class="form-select">
                    <option selected>Chọn lớp</option>
                    <option value="1">Lớp 1</option>
                    <option value="2">Lớp 2</option>
                    <!-- Add more options here -->
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <select class="form-select">
                    <option selected>Chọn môn</option>
                    <option value="toan">Toán</option>
                    <option value="ly">Lý</option>
                    <!-- Add more options here -->
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <select class="form-select">
                    <option selected>Giới tính</option>
                    <option value="nam">Nam</option>
                    <option value="nu">Nữ</option>
                </select>
            </div>
        </div>

        <!-- Hàng thứ hai với 2 ô -->
        <div class="row justify-content-center filter-container">
            <div class="col-md-6 mb-3">
                <select class="form-select">
                    <option selected>Hiện là</option>
                    <option value="sinhvien">Sinh viên</option>
                    <option value="giaovien">Giáo viên</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <select class="form-select">
                    <option selected>Khu vực</option>
                    <option value="hn">Hà Nội</option>
                    <option value="hcm">TP. Hồ Chí Minh</option>
                </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS001</h5>
                        <p class="card-text">Tên gia sư: Nguyễn Văn A</p>
                        <p class="card-text">Chuyên ngành: Công nghệ thông tin</p>
                        <p class="card-text">Năm tốt nghiệp: 2023</p>
                        <p class="card-text">Trường: Đại học Bách Khoa</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS002</h5>
                        <p class="card-text">Tên gia sư: Lê Thị B</p>
                        <p class="card-text">Chuyên ngành: Sư phạm Toán</p>
                        <p class="card-text">Năm tốt nghiệp: 2022</p>
                        <p class="card-text">Trường: Đại học Sư phạm Hà Nội</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS001</h5>
                        <p class="card-text">Tên gia sư: Nguyễn Văn A</p>
                        <p class="card-text">Chuyên ngành: Công nghệ thông tin</p>
                        <p class="card-text">Năm tốt nghiệp: 2023</p>
                        <p class="card-text">Trường: Đại học Bách Khoa</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS001</h5>
                        <p class="card-text">Tên gia sư: Nguyễn Văn A</p>
                        <p class="card-text">Chuyên ngành: Công nghệ thông tin</p>
                        <p class="card-text">Năm tốt nghiệp: 2023</p>
                        <p class="card-text">Trường: Đại học Bách Khoa</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS001</h5>
                        <p class="card-text">Tên gia sư: Nguyễn Văn A</p>
                        <p class="card-text">Chuyên ngành: Công nghệ thông tin</p>
                        <p class="card-text">Năm tốt nghiệp: 2023</p>
                        <p class="card-text">Trường: Đại học Bách Khoa</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>
    
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS002</h5>
                        <p class="card-text">Tên gia sư: Lê Thị B</p>
                        <p class="card-text">Chuyên ngành: Sư phạm Toán</p>
                        <p class="card-text">Năm tốt nghiệp: 2022</p>
                        <p class="card-text">Trường: Đại học Sư phạm Hà Nội</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS001</h5>
                        <p class="card-text">Tên gia sư: Nguyễn Văn A</p>
                        <p class="card-text">Chuyên ngành: Công nghệ thông tin</p>
                        <p class="card-text">Năm tốt nghiệp: 2023</p>
                        <p class="card-text">Trường: Đại học Bách Khoa</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150" class="img-fluid mb-3" alt="avatar">
                        <h5 class="card-title">Mã số: GS001</h5>
                        <p class="card-text">Tên gia sư: Nguyễn Văn A</p>
                        <p class="card-text">Chuyên ngành: Công nghệ thông tin</p>
                        <p class="card-text">Năm tốt nghiệp: 2023</p>
                        <p class="card-text">Trường: Đại học Bách Khoa</p>
                        <button class="btn btn-custom w-100">Thuê gia sư ngay</button>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example" class="mt-3">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
        </div>
    </div>
@endsection

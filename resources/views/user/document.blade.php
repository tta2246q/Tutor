@extends('layouts.user')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tài liệu tham khảo</h2>
        <div class="filter-section d-flex justify-content-center align-items-center">
            <div class="me-5">
                <select class="form-select" id="filter-category">
                    <option value="" selected> Thể loại</option>
                    <option value="toan">Toán</option>
                    <option value="vat-ly">Vật lý</option>
                    <option value="ngu-van">Ngữ văn</option>
                </select>
            </div>
            <div class="me-2 ">
                <select class="form-select" id="filter-grade">
                    <option value="" selected> Lớp</option>
                    <option value="1">Lớp 1</option>
                    <option value="2">Lớp 2</option>
                    <option value="3">Lớp 3</option>
                    <option value="9">Lớp 9</option>
                    <option value="11">Lớp 11</option>
                    <option value="12">Lớp 12</option>
                </select>
            </div>
            <button class="btn btn-danger " onclick="filterDocuments()">Tìm kiếm</button>
        </div>

        <div class="document-container bg-white shadow-sm p-4 rounded">
            <div class="document-list" id="document-list">
                <div class="card document-card" data-category="toan" data-grade="9">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Toán lớp 9</h5>
                        <p class="card-text">Tác giả: Nguyễn Văn b</p>
                    </div>
                </div>
                <div class="card document-card" data-category="vat-ly" data-grade="11">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Vật lý lớp 11</h5>
                        <p class="card-text">Tác giả: Nguyễn Văn B</p>
                    </div>
                </div>
                <div class="card document-card" data-category="ngu-van" data-grade="12">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Ngữ văn lớp 12</h5>
                        <p class="card-text">Tác giả: Nguyễn Văn C</p>
                    </div>
                </div>
                <div class="card document-card" data-category="ngu-van" data-grade="12">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Ngữ văn lớp 11</h5>
                        <p class="card-text">Tác giả: Nguyễn Văn A</p>
                    </div>
                </div>
                <div class="card document-card" data-category="ngu-van" data-grade="12">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Ngữ văn lớp 11</h5>
                        <p class="card-text">Tác giả: Nguyễn Văn C</p>
                    </div>
                </div>
                <div class="card document-card" data-category="ngu-van" data-grade="12">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Book Cover">
                    <div class="card-body">
                        <h5 class="card-title">Ngữ văn lớp 11</h5>
                        <p class="card-text">Tác giả: Nguyễn Văn C</p>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation example" class="mt-4">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Trước</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Sau</a></li>
            </ul>
        </nav>
    </div>
@endsection

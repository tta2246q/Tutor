@extends('layouts.user')
@section('content')
    <div class="container section">
        <div class="row mt-4">
            <div class="col-md-6 mt-5">
                <h1>Logo</h1>
                <h4>Một giải pháp hiệu quả để nâng cao chất lượng học tập</h4>
                <button class="btn btn-primary home">Tham gia ngay</button>
            </div>
            <div class="col-md-6">
                <img src="\images\tutor.png" alt="image placeholder">
            </div>
        </div>
    </div>

    <div class="container section">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="\images\R.png" alt="image placeholder">
            </div>
            <div class="col-md-6">
                <h1>Chúng tôi đem đến cho bạn</h1>
                <p class="text-home">Phương thức học tập hiệu quả</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h1 >Nội ngũ gia sư có trình độ cao</h1>
                <p class="text-home">Đội ngũ gia sư giàu kinh nghiệm và có chuyên môn cao.</p>
            </div>
            <div class="col-md-6">
                <img src="\images\OIP.png" alt="image placeholder">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="\images\OIP (1).png" alt="image placeholder">
            </div>
            <div class="col-md-6">
                <h1 >Giảng viên thân thiện, hòa đồng</h1>
                <p class="text-home">Luôn sẵn sàng giúp đỡ và giải đáp mọi thắc mắc.</p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h1 >Phù hợp mọi đối tượng</h1>
                <p class="text-home">Dù bạn là học sinh, sinh viên hay người đã đi làm, chương trình của chúng tôi sẽ phù hợp với bạn.</p>
            </div>
            <div class="col-md-6">
                <img src="\images\OIP (2).png" alt="image placeholder">
            </div>
        </div>
    </div>

    <div class="container section">
        <div class="text-center">
            <h2>Dịch vụ gia sư</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <img src="\images\OIP (3).png" class="card-img-top" alt="image placeholder">
                    <div class="card-body">
                        <h2 class="card-title home">Gia sư online</h2>
                        <p class="card-text">Học mọi lúc, mọi nơi với gia sư trực tuyến.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="\images\gia-su.jpg" class="card-img-top" alt="image placeholder">
                    <div class="card-body">
                        <h1 class="card-title home">Gia sư tại chỗ</h1>
                        <p class="card-text">Trải nghiệm học tập trực tiếp tại nhà hoặc tại trung tâm.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="tutors-section py-5">
        <div class="container text-center">
            <h1>Gia sư mới tham gia</h1>
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card">
                        <img src="\images\e81ffac1-11bc-48ae-9483-7b151a5257eb.png" class="card-img-top" alt="Tutor 1">
                        <div class="card-body">
                            <h5 class="card-title">Tên gia sư</h5>
                            <p class="card-text">Sinh viên<br>Hà Nội</p>
                            <a href="#" class="btn btn-primary">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="\images\75687692-3844-4bb9-8cf2-93b9c5b2cb29.png" class="card-img-top" alt="Tutor 2">
                        <div class="card-body">
                            <h5 class="card-title">Tên gia sư</h5>
                            <p class="card-text">Giáo viên<br>Tp. HCM</p>
                            <a href="#" class="btn btn-primary">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="\images\OIP (4).png" class="card-img-top" alt="Tutor 3">
                        <div class="card-body">
                            <h5 class="card-title">Tên gia sư</h5>
                            <p class="card-text">Sinh viên<br>Hà Nội</p>
                            <a href="#" class="btn btn-primary">Xem thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="\images\Anh-doanh-nhan-3-min.jpg" class="card-img-top" alt="Tutor 4">
                        <div class="card-body">
                            <h5 class="card-title">Tên gia sư</h5>
                            <p class="card-text">Sinh viên<br>Hà Nội</p>
                            <a href="#" class="btn btn-primary">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container section">
        <div class="text-center">
            <h2>Liên hệ với chúng tôi ngay</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="\images\OIP (5).png" alt="image placeholder">
            </div>
            <div class="col-md-6 mt-5">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và Tên</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Nội dung</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>
        </div>
    </div>
@endsection
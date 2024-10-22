@extends('layouts.admin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 p-3">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Mã Số</th>
                            <th>Họ Và Tên</th>
                            <th>Số Điện Thoại</th>
                            <th>Thanh Toán (VND)</th>
                            <th>Tình Trạng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00001</td>
                            <td>xxx</td>
                            <td>...</td>
                            <td>12,000,000</td>
                            <td class="status">Đã hoàn thành</td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>xxx</td>
                            <td>...</td>
                            <td>12,000,000</td>
                            <td class="status">Chưa hoàn thành</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 p-3">
            <button onclick="goBack()" class="btn btn-secondary go_back mb-3"><i class="fa-solid fa-arrow-left-long"></i></button>
            <h2>Personal Profile</h2>
            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <div>
                            <img class="images_personal_profile mt-5" src="\images\e81ffac1-11bc-48ae-9483-7b151a5257eb.png" alt="">
                        </div>
                        <div>
                            <span class="stars ">★★★★★</span>
                        </div>
                    </div>
                    <div class="col-8 mt-5">
                        <p>Name:</p>
                        <p>Age:</p>
                        <p>Sex:</p>
                        <p>Date of birth:</p>
                        <p>Phone number:</p>
                        <p>Adress:</p>
                        <p>Gmail:</p>
                        <p>CCCD:</p>
                        <p>Trình độ học vấn:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10 p-3">
        <h2>Inbox</h2>
    </div>
</div>
<div class="container-fluid">
    <div class="row">     
      <nav class="col-md-2 sidebar">
        <button class="btn compose-btn w-100 mb-4 mt-4">+ Compose</button>
        <div class="menu">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link text-light d-flex justify-content-between" href="#">
                  Inbox 
                  <span class="badge ">1253</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light d-flex justify-content-between" href="#">
                  Sent 
                  <span class="badge ">24,532</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light d-flex justify-content-between" href="#">
                  Spam 
                  <span class="badge ">14</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light d-flex justify-content-between" href="#">
                  Starred 
                  <span class="badge ">245</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light d-flex justify-content-between" href="#">
                  Bin 
                  <span class="badge ">9</span>
                </a>
              </li>
            </ul>
          </div>
          
        <hr>
        <div class="labels">
          <h6 class="text-uppercase">Label</h6>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Gia sư</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Khách hàng</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main content -->
      <main class="col-md-10">
        <div class="search-bar p-3">
          <input type="text" class="form-control" placeholder="Search mail">
        </div>
        <!-- Phần danh sách email -->

        
      </main>
    </div>
  </div>

@endsection
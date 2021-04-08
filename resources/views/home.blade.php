@extends('layouts.app')

@section('title','Home')
@section('menuHome','active')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card bg-dark text-white">
                <img src="{{asset('front/img/card-promo.png')}}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Try Out Akbar</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                    <a href="#" class="btn btn-primary">Beli Paket</a>
                </div>
            </div>
        </div>
    </div>
    {{--  <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  Course Terselesaikan
                </div>
                <div class="card-body">
                    <h5 class="card-title">Biologi SMA</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Lanjutkan Belajar</a>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
        </div>
    </div>  --}}
</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection


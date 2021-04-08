@extends('layouts.app')

@section('title','Tryout')
@section('menuTryout','active')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card text-center">
                <div class="card-header">
                  Course Terselesaikan
                </div>
                <div class="card-body">
                @forelse ($tryout as $item)
                    <h5 class="card-title">{{ $item }}</h5>
                @empty
                    @component('layout.alert')
                    @slot('class')
                        warning
                    @endslot
                    @slot('judul')
                        Peringatan
                    @endslot
                        Belum Pernah Mengambil Course
                    @endcomponent
                @endforelse
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Lanjutkan Belajar</a>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
        </div>
</div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

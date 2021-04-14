@extends('layouts.app')

@section('title','Home')
@section('menuHome','active')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        {{-- awal promo --}}
        <div class="col col-md-12">
            <div class="card card-promo">
                <img src="{{asset('front/img/dashboard-promo.png')}}" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">TryOut Akbar</h5>
                    <p class="card-text">Uji kesiapanmu mengikuti UTBK 2021 dengan mengikuti tryout akbar serentak se indonesia</p>
                    <a href="#" class="btn btn-primary">Daftar</a>
                </div>
            </div>
        </div>
        {{-- akhir promo --}}

        {{-- litportal dashboard --}}
        <h2 class="home-title">Litportal dashboard</h2>
        <div class="col col-md-12">
            <div class="card card-content">
                    <div class="card card-section">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <p>1. Lengkapi profil</p>
                                <p>Lengkapi profilmu dan dapatkan akses grub belajar bersama</p>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a href="/profil" class="btn btn-primary">Lengkapi</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-section">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <p>2. Pilih equipment UTBK</p>
                                <p>Pilih fasilitas belajar yang disediakan Litportal untuk menunjang belajarmu</p>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a href="#" class="btn btn-primary">Belajar</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-section">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6 col-lg-6">
                                <p>3. TryOut akbar  </p>
                                <p>Uji kesiapanmu mengikuti UTBK dengan tryout akbar dengan ribuan orang lainnya</p>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <a href="#" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
        {{-- akhir litportal dashboard --}}

        {{-- rekomendasi --}}
        <h2 class="home-title">Rekomendasi</h2>
        <div class="col col-md-12">
            <div class="card card-content">
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
                    <div class="col">
                      <div class="card card-recomendation">
                        <img src="{{asset('front/img/home/rekomendasi_1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card card-recomendation">
                        <img src="{{asset('front/img/home/rekomendasi_1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card card-recomendation">
                        <img src="{{asset('front/img/home/rekomendasi_1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        {{-- akhir rekomendasi --}}
    </div>
    <div class="jarak"></div>
</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection


@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    Masa Depan Karir Anda
                </p>
                <h2 class="primary-header">
                    Cukup Investasikan Waktu
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{asset('images/item_bootcamp.png')}}" alt="" class="cover">
                            <h1 class="package">
                                {{$course->title}}
                            </h1>
                            <p class="description">
                                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar bahasa pemrograman Python
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('checkout.store', $course->id) }}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input name="name" type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" value="{{ Auth::user()->name }}" required/>
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input name="email" type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" value="{{ Auth::user()->email }}" required/>
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="occupation" class="form-label">Pekerjaan</label>
                                <input name="occupation" type="text" class="form-control {{$errors->has('occupation') ? 'is-invalid' : ''}}" value="{{ old('occupation') ? : Auth::user()->occupation }}" required/>
                                @if ($errors->has('occupation'))
                                    <p class="text-danger">{{ $errors->first('occupation') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="handphone_number" class="form-label">Nomor HP</label>
                                <input name="handphone_number" type="text" class="form-control {{$errors->has('handphone_number') ? 'is-invalid' : ''}}" minlength="11" maxlength="13" value="{{ Auth::user()->handphone_number }}" required/>
                                @if ($errors->has('handphone_number'))
                                    <p class="text-danger">{{ $errors->first('handphone_number') }}</p>
                                @endif
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Bayar Sekarang</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{asset('images/ic_secure.svg')}}" alt="">Pembayaran Anda aman dan terenkripsi
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
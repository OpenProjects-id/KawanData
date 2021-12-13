@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <img src="{{asset('images/ill_register.png')}}" height="400" class="mb-5" alt=" ">
            </div>
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    Wow!
                </p>
                <h2 class="primary-header ">
                    Berhasil Join Course
                </h2>
                <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">
                    Dashboard Saya
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
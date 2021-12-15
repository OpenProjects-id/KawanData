@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    Course Saya
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('images/item_bootcamp.png')}}" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>{{$checkout->Course->title}}</strong>
                            </p>
                            <p>
                                {{$checkout->created_at->format('M d, Y')}}
                            </p>
                        </td>
                        <td>
                            <strong>Rp{{ $checkout->Course->price }}</strong>
                        </td>
                        <td class="text-center">
                            <strong>Sudah Bayar</strong>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary">
                                Mulai Belajar
                            </a>
                        </td>
                    </tr>
                    @empty
                        <h3 class="text-center">No Data</h3>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
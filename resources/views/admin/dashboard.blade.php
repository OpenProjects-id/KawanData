@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header text-center">
                        Semua Member yang sudah mendaftar Course
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>User</th>
                                    <th>Course</th>
                                    <th>Harga</th>
                                    <th>Tanggal Daftar</th>
                                    <th>Status Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr class="text-center">
                                        <td>{{$checkout->User->name}}</td>
                                        <td>{{$checkout->Course->title}}</td>
                                        <td>Rp{{$checkout->Course->price}}</td>
                                        <td>{{$checkout->created_at->format('M d Y')}}</td>
                                        <td>
                                            @if ($checkout->is_join)
                                                <span class="badge bg-success">Sudah Bayar</span>
                                            @else
                                                <span class="badge bg-warning">Menunggu</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if (!$checkout->is_join)
                                                <form action="{{ route('admin.checkout.update', $checkout->id) }}" method="POST">
                                                    @csrf
                                                    <button class="btn btn-primary btn-sm">Approve</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No camps registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
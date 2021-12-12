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
                    My Bootcamps
                </h2>
            </div>
        </div>
        <div class="row my-5">
            <table class="table">
                <tbody>
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>Gila Belajar</strong>
                            </p>
                            <p>
                                September 24, 2021
                            </p>
                        </td>
                        <td>
                            <strong>$280,000</strong>
                        </td>
                        <td>
                            <strong>Waiting for Payment</strong>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Get Invoice
                            </a>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="/assets/images/item_bootcamp.png" height="120" alt="">
                        </td>
                        <td>
                            <p class="mb-2">
                                <strong>Gila Belajar</strong>
                            </p>
                            <p>
                                September 24, 2021
                            </p>
                        </td>
                        <td>
                            <strong>$280,000</strong>
                        </td>
                        <td>
                            <strong><span class="text-green">Payment Success</span></strong>
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">
                                Get Invoice
                            </a>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="{{asset('images/item_bootcamp.png')}}" height="120" alt=" ">
                        </td>
                        <td>
                            <p class=" mb-2 ">
                                <strong>Gila Belajar</strong>
                            </p>
                            <p>
                                September 24, 2021
                            </p>
                        </td>
                        <td>
                            <strong>$280,000</strong>
                        </td>
                        <td>
                            <strong><span class="text-red ">Canceled</span></strong>
                        </td>
                        <td>
                            <a href="# " class="btn btn-primary ">
                                Get Invoice
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
@extends('layouts.header')
@section('content')
    <div class="checkout_wrapper">
        <section class="container container__margin">
            <h2 class="checkout_h2">Checkout</h2>

            <div class="table-responsive">
                <table role="table" class="table filtered-table">
                    <thead role="rowgroup">
                    <tr role="row">
                        <th role="columnheader">img</th>
                        <th role="columnheader">package name</th>
                        <th role="columnheader">package type</th>
                        <th role="columnheader">amount</th>
                        <th role="columnheader">price</th>
                    </tr>
                    </thead>

                    <tbody role="rowgroup">
                    <tr role="row">
                        <td role="cell"><img src="{{  asset('css/Images/product-yamazaki-1.png') }}" class="table_img"></td>
                        <td role="cell">Yamazaki Collection</td>
                        <td role="cell">Test</td>
                        <td role="cell">1</td>
                        <td role="cell">$ 10</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <h2 class="checkout_h2">Select delivery day</h2>
        <input class="checkout_h2" type="date">

        <h2 class="checkout_h2">Select payment method</h2>
        <input type="image" src="{{  asset('css/Images/iDEAL_1024x1024.png') }}" width="50px" height="50px">
        <input type="image" src="{{  asset('css/Images/Paypal-Logo-Transparent-PNG-1280x720.png') }}"  width="50px" height="50px">
    </div>
    @endsection
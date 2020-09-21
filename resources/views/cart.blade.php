@extends('welcome')
@section('titlepage','Cart | Logam Sukses')
<?php $y = Date('Y'); ?>
@section('deschomepage','')
@section('content')
<section id="page-title">

    <div class="container">
        <h1>Cart</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </div>

</section><!-- #page-title end -->

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">

            <div class="table-responsive mb-5">
                <table class="table cart">
                    <thead>
                        <tr>
                            <th class="cart-product-remove">&nbsp;</th>
                            <th class="cart-product-thumbnail">&nbsp;</th>
                            <th class="cart-product-name">Product</th>
                            <th class="cart-product-quantity">Quantity</th>
                            <th class="cart-product-subtotal">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>

                        @if(session('cart'))
                        @foreach (session('cart') as $id as $details)
                        <tr class="cart_item">
                            <td class="cart-product-remove">
                                <a href="#" class="remove" title="Remove this item"><i class="icon-trash2"></i></a>
                            </td>

                            <td class="cart-product-thumbnail">
                                <a href="#"><img width="64" height="64"
                                        src="{!!asset('media/product/item/'.$details['fileimg'])!!}"></a>
                            </td>

                            <td class="cart-product-name">
                                <a href="#">{{$details['nama_item']}}</a>
                            </td>

                            <td class="cart-product-quantity">
                                <div class="quantity">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" name="quantity" value="{{$details['quantity']}}" class="qty" />
                                    <input type="button" value="+" class="plus">
                                </div>
                            </td>

                            <td class="cart-product-subtotal">
                                <span class="amount">$39.98</span>
                            </td>
                        </tr>
                        @endforeach
                        <tr class="cart_item">
                            <td colspan="6">
                                <div class="row">
                                    <div class="col-lg-8 col-8 p-0 offset-4">
                                        {{-- <a href="#" class="button button-3d m-0 float-right">Update Cart</a> --}}
                                        <a href="#" class="button button-3d mt-0 float-right">Proceed to
                                            Checkout</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</section>
@endsection

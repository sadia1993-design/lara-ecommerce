@extends('layouts.front')

@section('breadcrumb')
    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>Thank You</span></li>
        </ul>
    </div>
@endsection

@section('page_title')
    Thanks
@endsection

@section('main-content')
    <div class="container pb-60">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Thank you for your order</h2>
                <p>A confirmation email was sent.</p>
                <a href="{{ url('/shop') }}" class="btn btn-submit btn-submitx">Continue Shopping</a>
            </div>
        </div>
    </div><!--end container-->
@endsection

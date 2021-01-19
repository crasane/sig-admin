@extends('layouts.default')
{{-- Page title --}}
@section('title')
Forms @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />

<!--end of page vendors -->
@stop
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">

    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Order</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Orders</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>




</section>
<!--input form starts-->
<div class="col-md-12 col-12">
    <div>
        <h5 class="d-inline-block">Order Table</h5>
    </div>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="border-top-0" scope="col">Booking Id</th>
                        <th class="border-top-0" scope="col">Travel Package</th>
                        <th class="border-top-0" scope="col">Name</th>
                        <th class="border-top-0" scope="col">Phone Number</th>
                        <th class="border-top-0" scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <th scope="row">{{$item->order_id}}</th>
                        <td>{{$item->travel_name}}</td>
                        <td>{{$item->order_name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->message}}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    @stop
    @section('footer_scripts')
    <!--   page level js ----------->
    <script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('js/pages/formlayout.js') }}"></script>
    <!-- end of page level js -->
    @stop
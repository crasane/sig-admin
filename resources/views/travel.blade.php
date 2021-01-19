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
        <h1>Travel</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Content</a></li>
            <li class="breadcrumb-item active" aria-current="page">Travel</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>




</section>
<!--input form starts-->
<section class="content">
    <div class="row">
        <!--row starts-->
        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
         <!--row starts-->
         <div class="my-3">
                    <div class="card p-0" id="hidepanel1">
                        <div class="card-header bg-primary text-white">
                            <h3 class="card-title d-inline">
                                Travel Form
                            </h3>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('add-travel') }}" method="post">
                                <!-- CSRF Token -->
                                {{ csrf_field() }}
                                <!-- ID -->
                                <!-- <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="Travel-id">Travel Id</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <p>FSXXXXX</p></div>
                                    </div>
                                </div> -->
                                <!-- Name input-->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="name">Travel Name</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="name" name="name" type="text" placeholder="Travel name" class="form-control"></div>
                                    </div>
                                </div>
                                <!-- Travel Type input-->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="travel_type">Travel Type</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="travel_type" name="travel_type" type="text" placeholder="Travel type" class="form-control"></div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="address">Address</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <textarea class="form-control resize_vertical" id="address" name="address" placeholder="Please enter the travel address" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Longitude input-->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="longitude">Longitude</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="longitude" name="longitude" type="number" placeholder="Longitude" class="form-control"></div>
                                    </div>
                                </div>
                                <!-- Latitude input-->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="latitude">Latitude</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="latitude" name="latitude" type="number" placeholder="Latitude" class="form-control"></div>
                                    </div>
                                </div>
                                <!-- Price From -->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="price-from">Price From</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="price_from" name="price_from" type="number" placeholder="Price From" class="form-control"></div>
                                    </div>
                                </div>
                                <!-- Price To -->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="price-to">Price To</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="price_to" name="price_to" type="number" placeholder="Price To" class="form-control"></div>
                                    </div>
                                </div>

                                <!-- Logo -->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="logo">Logo</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="logo" name="logo" type="text" placeholder="Logo" class="form-control"></div>
                                    </div>
                                </div>

                                <!-- Cover image -->
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-md-3 col-lg-3 col-12 control-label" for="cover_image">Cover Image</label>
                                        <div class="col-md-9 col-lg-9 col-12">
                                            <input id="cover_image" name="cover_image" type="text" placeholder="Cover Image" class="form-control"></div>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-position">
                                    <div class="row">
                                        <div class="col-md-12  col-sm-12 col-12  col-lg-12 text-right">
                                            <button type="submit" class="btn btn-responsive btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


    </div>



</section>

@stop
@section('footer_scripts')
<!--   page level js ----------->
<script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
<script src="{{ asset('js/pages/formlayout.js') }}"></script>
<!-- end of page level js -->
@stop
@extends('layouts.default')
{{-- Page title --}}
@section('title')
Travel Package List @parent
@stop
{{-- page level styles --}}
@section('header_styles')
<!-- page vendors -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.min.css') }}" />
<link rel="stylesheet" href="{{asset('vendors/datatables/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/rowReorder.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/scroller.bootstrap4.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/select2/css/select2-bootstrap.css') }}" />
<!--end of page vendors -->
@stop
@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">

    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Travel Package</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Travel Package Lists</li>
        </ol>
    </div>
    <div class="separator-breadcrumb border-top"></div>


</section>

<!-- content start-->
<section class="content">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="card panel-info filterable">
                <div class="card-header border border-primary text-primary border-top-0 border-left-0 border-right-0">
                    <h3 class="card-title text-primary d-inline">
                        Travel Package List
                    </h3>
                </div>
                


                <div class="card-body table-responsive-lg table-responsive-md table-responsive-sm">
                 <button type="button" class="btn btn-light m-t-10 "><a href="/travel">Create</a></button>
                 <table class="table  table-bordered" id="table1" width="100%">
                    <thead>
                        <tr>

                            <th>Name</th>
                            <th>Type</th>
                            <th>Address</th>
                            <th>Price From</th>
                            <th>Price To</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <th scope="row">{{$item->name}}</th>
                            <td>{{$item->travel_type}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->price_from}}</td>
                            <td>{{$item->price_to}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>










</section>
<!-- content end-->


@stop
@section('footer_scripts')
<!--   page level js ----------->
<script src="{{ asset('vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/datatables/js/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/advanced_table.js') }}"></script>
<!-- end of page level js -->
@stop

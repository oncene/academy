
@extends('layouts.master')
@push('styles')

@endpush
@section('content')
    {{--<section class="content home">--}}
        {{--<div class="block-header">--}}
            {{--<div class="row">--}}
                {{--<div class="col-lg-5 col-md-5 col-sm-12">--}}
                    {{--<h2>Dashboard--}}
                        {{--<small>Welcome to Oreo</small>--}}
                    {{--</h2>--}}
                {{--</div>--}}
                {{--<div class="col-lg-7 col-md-7 col-sm-12 text-right">--}}
                    {{--<div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">--}}
                        {{--<div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>--}}
                        {{--<small class="col-white">Visitors</small>--}}
                    {{--</div>--}}
                    {{--<div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">--}}
                        {{--<div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>--}}
                        {{--<small class="col-white">Bounce Rate</small>--}}
                    {{--</div>--}}
                    {{--<button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">--}}
                        {{--<i class="zmdi zmdi-plus"></i>--}}
                    {{--</button>--}}
                    {{--<ul class="breadcrumb float-md-right">--}}
                        {{--<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>--}}
                        {{--<li class="breadcrumb-item active">Dashboard</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="container-fluid">--}}
            {{--<!-- Example -->--}}
            {{--<div class="row clearfix">--}}
                {{--<div class="col-lg-12 col-md-12 col-sm-12">--}}
                    {{--<iframe src="/laravel-filemanager?field_name=mceu_58-inp&type=Images:513" style="width: 100%; height: 700px; overflow: hidden; border: none;"></iframe>--}}
                    {{--<br><br>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}


    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2">
                <h3 class="content-header-title">Fixed Layout</h3>
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Starters Kit</a>
                            </li>
                            <li class="breadcrumb-item active">Fixed Layout
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="content-header-right col-md-6 col-12">
                <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                    <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="row">
                <div class="col-sm-12">
                    <!-- Kick start -->
                    <div id="kick-start" class="card">
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="card-text">
                                    <iframe src="/laravel-filemanager?field_name=mceu_58-inp&type=Images:513" style="width: 100%; height: 700px; overflow: hidden; border: none;"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
@push('scripts')

@endpush

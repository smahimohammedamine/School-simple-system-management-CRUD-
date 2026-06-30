@extends('master')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Principle  Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection


@section('content')
    <div
        style="background-image: url('{{ asset('admin/bg.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- page content here -->
                </div>
            </div>
        </div>
    </div>
@endsection

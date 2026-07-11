@extends('master')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Training Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('trainings.index') }}">Trainings</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    @if (session('error'))
        <div class="alert alert-error alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('error') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Training Course Details</h3>
                    <a href="{{ route('trainings.index') }}" class="btn btn-default btn-sm float-right">Back</a>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th style="width: 200px;">ID</th>
                                <td>{{ $data->id }}</td>
                            </tr>
                            <tr>
                                <th>Course</th>
                                <td>{{ $data->course_name }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ $data->price }}</td>
                            </tr>
                            <tr>
                                <th>Start Date</th>
                                <td>{{ $data->start_date }}</td>
                            </tr>
                            <tr>
                                <th>End Date</th>
                                <td>{{ $data->end_date }}</td>
                            </tr>
                            <tr>
                                <th>Notes</th>
                                <td>{{ $data->notes }}</td>
                            </tr>
                             <tr>
                                <th>Student Number</th>
                                <td>{{ $data->studentCounter }}</td>
                            </tr>
                            <tr>

                                <td colspan="2">

                                    <a href=" {{ route('trainings.addStudent', $data->id) }} " class="btn btn-primary btn-sm">Add</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>



                     @if (isset($students) && count($students) > 0)
                        <table id="example2" class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                 
                                    <th>Id</th>
                                    <th>Student Name</th>
                                    <th>Start Day  </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->student_name }}</td>
                                        <td>{{ $student->enrolement_date }}</td>
                                        
                                        
                                        
                                        <td>
                                          
                                            <form action="{{ route('trainings.delete_student_enrollement', $student->id) }}" method="POST" style="display:inline">
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <p style="text-align: center; color:rgb(212, 21, 21);"> Data Not Found </p>
                    @endif


                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

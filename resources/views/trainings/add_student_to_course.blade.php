@extends('master')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Add Training Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Courses</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
@section('content')
    @if (session('error'))
        <div class="alert alert-error alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session('error') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Student Training Course</h3>
        </div>
        <form action="{{ route('trainings.storeAddStudent',$data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="studentId">Student</label>
                    <select class="form-control @error('studentId') is-invalid @enderror" id="studentId" name="studentId">
                        <option value="">Select Student</option>
                        @foreach ($students as $student)
                            <option value="{{ $student->id }}" {{ old('studentId') == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                        @endforeach
                    </select>
                    @error('studentId')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="enrolement_date">Start Date</label>
                    <input type="date" class="form-control @error('enrolement_date') is-invalid @enderror" id="enrolement_date"
                        name="enrolement_date" value="{{ old('enrolement_date') }}">
                    @error('enrolement_date')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
               
              
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Student to the course</button>
            </div>
        </form>
    </div>
@endsection

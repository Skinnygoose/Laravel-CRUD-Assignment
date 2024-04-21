@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Update Car Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('cars.update', $car -> id) }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            @method('PUT')
            <div class="mb-3">
                <label for="Car_Name" class="form-label">Car_Name</label>
                <input type="text" class="form-control" id="Car_Name" name="Car_Name" aria-describedby="Car_Name" value="{{ $car -> Car_Name }}">
            </div>
            <div class="mb-3">
                <label for="Brand_Name" class="form-label">Brand_Name</label>
                <input type="text" class="form-control" id="Brand_Name" name="Brand_Name" aria-describedby="Brand_Name" value="{{ $car -> Brand_Name }}">
            </div>
            <div class="mb-3">
                <label for="Launched_Year" class="form-label">Launched_Year</label>
                <input type="text" class="form-control" id="Launched_Year" name="Launched_Year" aria-describedby="Launched_Year" value="{{ $car -> Launched_Year }}">
            </div>
            <div class="mb-3">
                <label for="ImageURL" class="form-label">ImageURL</label>
                <input type="text" class="form-control" id="ImageURL" name="ImageURL" aria-describedby="ImageURL" value="{{ $car -> ImageURL }}">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a Car Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('cars.store') }}" method="post">
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
            <div class="mb-3">
                <label for="Car_Name" class="form-label">Car Name</label>
                <input type="text" name="Car_Name" class="form-control @error('Car_Name') is-invalid @enderror" placeholder="Car_Name" value="{{ old('Car_Name') }}">
                @error('Car_Name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Brand_Name" class="form-label">Brand_Name</label>
                <input type="text" name="Brand_Name" class="form-control @error('Brand_Name') is-invalid @enderror" placeholder="Brand_Name" value="{{ old('Brand_Name') }}">
                @error('Brand_Name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="Launched_Year" class="form-label">Launched_Year</label>
                <input type="text" name="Launched_Year" class="form-control @error('Launched_Year') is-invalid @enderror" placeholder="Launched_Year" value="{{ old('Launched_Year') }}">
                @error('Launched_Year')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ImageURL" class="form-label">ImageURL</label>
                <input type="text" name="ImageURL" class="form-control @error('ImageURL') is-invalid @enderror" placeholder="ImageURL" value="{{ old('ImageURL') }}">
                @error('ImageURL')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
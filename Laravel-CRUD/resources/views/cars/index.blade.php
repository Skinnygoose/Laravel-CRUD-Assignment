<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Cars') }}
        </h2>
    </x-slot>

    <div class="container pt-5">
        <div class="row">
        <a href="{{ route('cars.create') }}" class="card-link">Add New Car</a>
            @foreach($cars as $car)
            <div class="col-md-4  mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car -> Car_Name }} {{ $car -> Brand_Name }}</h5>
                        <a href="{{ route('cars.edit', $car -> id ) }}" class="card-link">Edit</a>
                        <a href="{{ route('cars.trash', $car -> id )}}" class="card-link">Delete</a>
                        <img src="{{ $car->ImageURL }}" class="card-img-top" alt="Image">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Services</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('services.create') }}" class="btn btn-primary">Add New Service</a>

    <ul>
        @foreach($services as $service)
            <li>
                <a href="{{ route('services.show', $service->id) }}">{{ $service->name }}</a>
                - £{{ number_format($service->price, 2) }}
            </li>
        @endforeach
    </ul>
</div>
@endsection

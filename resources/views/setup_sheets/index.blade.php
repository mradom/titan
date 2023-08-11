@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Setup Sheets</h1>
    <div class="text-center mb-3">
        <a href="{{ route('setup_sheets.create') }}" class="btn btn-primary">Create New Setup Sheet</a>
    </div>
    <div class="row">
        @foreach ($setupSheets as $setupSheet)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $setupSheet->fecha }}</h5>
                    <p class="card-text">{{ $setupSheet->piloto }}</p>
                    <p class="card-text">{{ $setupSheet->auto }}</p>
                    <p class="card-text">{{ $setupSheet->evento }}</p>
                    <p class="card-text">{{ $setupSheet->clima }}</p>
                    <p class="card-text">{{ $setupSheet->superficie }}</p>
                    <!-- Agrega más campos aquí según tus necesidades -->
                    <div class="mt-3">
                        <a href="{{ route('setup_sheets.show', ['auto' => urlencode($setupSheet->auto), 'piloto' => urlencode($setupSheet->piloto)]) }}" class="btn btn-info">View</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                        <a href="#" class="btn btn-success">
                            <i class="fab fa-whatsapp"></i> Share via WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

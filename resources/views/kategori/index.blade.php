@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content')
    <div class="container">
        <div class="card">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                </div>
              </nav>
            <div class="card-header" id="ppp">
                <div id="title">
                    <h3>Manage Category</h3>
                </div>
                <div id="button">
                    <a class="btn btn-primary" type="button" href="/kategori/create">+ Add</a>
                </div>
            </div>
            <div class="card-body">{{ $dataTable->table() }}</div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        #title {
            display: flex;
            justify-content: flex-start;

        }

        #button {
            display: flex;
            justify-content: flex-end;
        }
       
    </style>
@endpush


@push('js')
    {{ $dataTable->scripts() }}
@endpush

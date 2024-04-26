@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Tambah Level</h3>
            </div>
            <form action="../kategori" method="post">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="levelid">Level ID</label>
                        <input type="text" class="form-control" id="levelid" name="levelid" placeholder="Level ID">
                    </div>  
                    <div class="form-group">
                        <label for="level_kode">Level Kode</label>
                        <input type="text" class="form-control" id="level_kode" name="level_kode" placeholder="Level Kode">
                    </div>
                    <div class="form-group">
                        <label for="levelnama">Level Nama</label>
                        <input type="text" class="form-control" id="levelnama" name="levelnama" placeholder="Level Nama">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@endpush
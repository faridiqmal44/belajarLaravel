@extends('layout/main')

@section('title', 'Students - Akademi Teknologi')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="my-3">Students List - Akademi Teknologi</h1>

            <a href="/students/create" class="btn btn-primary btn-sm my-3">Tambah Data</a>

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <ul class="list-group">
                @foreach( $students as $s )
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $s->nama }}
                        <a href="/students/{{ $s->id }}" class="badge bg-primary rounded-pill">detail</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="card">
    <div class="card-header">Dashboard</div>
    <div class="card-body">
        <h2>Halo, {{ auth()->user()->name }}!</h2>
        <p>
            Role kamu:
            <span class="badge badge-{{ auth()->user()->role }}">
                {{ auth()->user()->role }}
            </span>
        </p>
        <p class="muted">
            Halaman ini hanya terbuka untuk yang sudah login
            (dijaga middleware <code>auth</code>).
        </p>

        <div class="actions">
            <a href="{{ route('admin') }}" class="btn btn-outline-blue">
                Buka halaman admin
            </a>
        </div>
    </div>
</div>
@endsection

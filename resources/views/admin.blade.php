@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<div class="card">
    <div class="card-header">Halaman Admin</div>
    <div class="card-body">
        <p>Hanya admin yang bisa melihat halaman ini.</p>
        <p class="muted">
            Dijaga dua middleware: <code>auth</code> dan <code>admin</code>.
        </p>

        <div class="actions">
            <a href="{{ route('dashboard') }}" class="btn btn-outline-blue">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

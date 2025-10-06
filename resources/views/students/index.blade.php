@extends('layouts.main')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h2>Daftar Mahasiswa</h2>

    {{-- Komponen Alert --}}
    <x-alert type="success" message="Data Mahasiswa Berhasil Dimuat"/>

    {{-- Looping dengan include --}}
    @foreach($students as $student)
        @include('partials.student-card', ['student' => $student])
    @endforeach
@endsection

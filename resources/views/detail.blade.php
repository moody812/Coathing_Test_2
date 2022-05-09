@extends('layouts.main')

@section('title', '詳細')

@section('content')
<ul>
    {{-- Q2-3 --}}
    <li>ID:{{ $animal->id }}</li>
    <li>名前:{{ $animal->name }}</li>
    <li>分類:{{ $animal->classification->name }}</li>
</ul>
@endsection
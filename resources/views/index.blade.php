@extends('layouts.main')

@section('title', '一覧')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<h2>動物一覧</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        {{-- Q1-3 --}}
    </tbody>
</table>
@endsection
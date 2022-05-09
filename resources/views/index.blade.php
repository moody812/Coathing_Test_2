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
        @foreach ($animals as $animal)
            <tr>
                <td>{{ $animal->id }}</td>
                <td>{{ $animal->name }}</td>
                <td><a href="{{ url('detail', ['id' => $animal->id ]) }}">詳細</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
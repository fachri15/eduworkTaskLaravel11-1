@extends('layout')
@section('title', 'Contoh Halaman Blade')
@section('header', 'Ini Halaman Contoh')
@section('content')
    <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet doloribus nostrum omnis? Quisquam, architecto fuga. Recusandae repellendus nam esse repellat eos rerum accusamus qui porro?</h1>

    <h2>{{ $title }}</h2>

    @if($ifLogin)
        <p>Ini if Login</p>
    @else
        <p>Else dari if Login</p>
    @endif

    <ol>
        @foreach ($products as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ol>


    <x-alert>
        <p>Ini Teks Alert</p>
    </x-alert>
@endsection

@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <main>
        <section class="py-5 text-center container">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row py-lg-1">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="mb-3">Главная страница</h1>
                    <hr>
                    <div class="d-grid gap-2">
                        <a href="{{ route('create') }}" class="btn btn-primary">Форма обратной связи</a>
                        <a href="{{ route('store') }}" class="btn btn-primary">Список заявок</a>
                    </div>
                    <section>
    </main>

@endsection

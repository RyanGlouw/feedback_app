@extends('layouts.app')

@section('title', ' Список заявок')

@section('content')
    <form class="py-5 text-center container">
        <h1>Заявки</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Компания</th>
                    <th scope="col">Название заявки</th>
                </tr>
                </thead>
                <tbody>
                @foreach($applications as $application)
                <tr>
                    <td>{{$application->id}}</td>
                    <td>{{$application->name}}</td>
                    <td>{{$application->name}}</td>
                    <td>{{$application->company}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        <div class="gap-2 mt-3">
            <a href="{{ route('main') }}" class="btn btn-primary">На главную</a>
            <a href="{{ route('create') }}" class="btn btn-primary">К форме обратной связи</a>
        </div>
        <form>
@endsection

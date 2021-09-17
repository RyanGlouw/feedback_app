@extends('layouts.app')

@section('title', 'Форма обратной связи')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="py-5 text-center container" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Форма обратной связи</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ваше имя">
    </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input name="phone_number" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Номер телефона">
    </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input name="company" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Компания">
    </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input name="application_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Название заявки">
    </div>
        <div class="mb-3">
            <textarea name="message" class="form-control" placeholder="Сообщение"></textarea>
    </div>
        <div>
            <label for="formFileLg" class="form-label"></label>
            <input  name="file" class="form-control form-control-lg" id="formFileLg" type="file">
        </div>
        <div class="d-grid mt-3">
            <input type="submit" class="btn btn-primary">
        </div>
        <div class="gap-2 mt-3">
        <a href="{{ route('main') }}"  class="btn btn-primary">На главную</a>
        <a href="{{ route('store') }}"  class="btn btn-primary">К спискам заявок</a>
        </div>
    </form>

@endsection

@extends('layout')

@section('content')
    <h1>Створення нового документу</h1>
    <form method="post" action="{{route('documents.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Назва:</label>
            <input type="text" required class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Опис:</label>
            <textarea class="form-control" name="description" required id="description" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="link">Посилання:</label>
            <input type="url" required class="form-control" id="link" name="link">
        </div>
        <div class="form-group">
            <label for="author">Автор:</label>
            <input type="text" required class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="approved">Затвердив:</label>
            <input type="text" required class="form-control" id="approved" name="approved">
        </div>
        <div class="form-group">
            <label for="version">Версія:</label>
            <input type="text" required class="form-control" id="version" name="version">
        </div>
        <div class="form-group">
            <label for="peoples">Ознайомлені особи:</label>
            <input type="text" required class="form-control" id="peoples" name="peoples">
        </div>

        <div class="form-group">
            <label for="blocks">Блоки</label>
            <select multiple required class="form-control" name="blocks[]" id="blocks">
                @foreach($blocks as $block)
                    <option value="{{$block->id}}">{{$block->name}}</option>
                @endforeach
            </select>
        </div>
        <hr>
        <button class="btn btn-success" type="submit">Створити</button>

    </form>
@endsection

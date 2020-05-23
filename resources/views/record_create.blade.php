@extends('layout')

@section('content')
    <h1>Додавання запису до документу документу: <b>{{$document->name}}</b></h1>
    <form method="post" action="{{route('records.store', $document)}}">
        @csrf
        <div class="form-group">
            <label for="text">Текст:</label>
            <textarea class="form-control" name="text" required id="text" rows="2"></textarea>
        </div>
        <hr>
        <button class="btn btn-success" type="submit">Створити</button>
    </form>
@endsection

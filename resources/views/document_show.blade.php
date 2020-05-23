@extends('layout')

@section('content')
    <h1>
        Перегляд документу <strong>{{$document->name}}</strong>
        <form method="POST" class="float-right" action="{{route('documents.destroy', $document)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger "><b>Видалити</b></button>
        </form>
    </h1>
    <form method="post"">
        @csrf
        <div class="form-group">
            <label for="name">Назва:</label>
            <input type="text" disabled required class="form-control" value="{{$document->name}}" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="description">Опис:</label>
            <textarea class="form-control" disabled name="description" required id="description" rows="2">{{$document->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="link">Посилання:</label>
            <input type="url" disabled required class="form-control" value="{{$document->link}}" id="link" name="link">
        </div>
        <div class="form-group">
            <label for="author">Автор:</label>
            <input type="text" disabled required class="form-control" value="{{$document->author}}" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="approved">Затвердив:</label>
            <input type="text" disabled required class="form-control" id="approved" value="{{$document->approved}}" name="approved">
        </div>
        <div class="form-group">
            <label for="version">Версія:</label>
            <input type="text" disabled required class="form-control" id="version" value="{{$document->version}}" name="version">
        </div>
        <div class="form-group">
            <label for="peoples">Ознайомлені особи:</label>
            <input type="text" disabled required class="form-control" id="peoples" value="{{$document->peoples}}" name="peoples">
        </div>

        <div class="form-group">
            <label for="blocks">Блоки</label>
            <select multiple required disabled class="form-control" name="blocks[]" id="blocks">
                @foreach($document->blocks as $block)
                    <option value="{{$block->id}}">{{$block->name}}</option>
                @endforeach
            </select>
        </div>
        <hr>
    </form>

    <h2 id="#records">
        Записи документу
        <a href="{{route('records.create', $document)}}" class="btn btn-success float-right" type="submit"><b>+</b> Додати запис</a>
    </h2>

    <ul class="list-group list-group-flush" >
        @foreach($document->records as $record)
            <li class="list-group-item">
                {{$record->text}}
                <form method="POST" class="float-right" action="{{route('records.delete', [$document->id, $record->id])}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger "><b>X</b></button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

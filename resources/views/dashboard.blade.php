@extends('layout')

@section('content')
    <h1>Проект</h1>
    <p>
        Опис проекту, опис проекту
    </p>
    <hr>
    <h2>
        Блоки проекту
        <a class="btn btn-outline-success float-right" href="{{route('documents.create')}}"><b>+</b> Створити документ</a>

    </h2>
    <div class="blocks">
        @foreach($blocks as $block)
            <a href="{{route('blocks.show', $block)}}" class="btn btn-primary">{{$block->name}}</a>
        @endforeach
    </div>
    <hr>
    <h2>Спільні для всіх блоків документи:</h2>
    @include('_documents_list')
@endsection

@extends('layout')

@section('content')
        <h1>{{$block->name}}</h1>
        <p>{{$block->description}}</p>
        <hr>
        <h2>
            Документи блоку:
            <a class="btn btn-outline-success float-right" href="{{route('documents.create')}}"><b>+</b> Створити документ</a>
        </h2>

        @include('_documents_list', ['documents' => $block->documents])

        <hr>
        <nav aria-label="...">
            <ul class="pagination">
                @if($beforeBlock)
                    <li class="page-item">
                        <a class="page-link" href="{{route('blocks.show', $beforeBlock)}}" tabindex="-1" aria-disabled="true">< Попередній блок</a>
                    </li>
                @endif
                @if($nextBlock)
                    <li class="page-item" >
                        <a class="page-link" href="{{route('blocks.show', $nextBlock)}}">Наступний блок ></a>
                    </li>
                @endif
            </ul>
        </nav>
@endsection

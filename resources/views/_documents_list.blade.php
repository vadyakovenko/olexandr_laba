<ul class="list-group list-group-flush">
    @foreach($documents as $document)
        <li class="list-group-item">
            <a href="{{route('documents.show', $document)}}">{{$document->name}}</a>
            <a href="{{route('documents.show', $document)}}#records" class="btn btn-sm btn-primary float-right">Переглянути існуючі записи</a>
            <a href="{{route('records.create', $document)}}" class="btn btn-sm btn-success float-right">Створити новий запис</a>
        </li>
    @endforeach
</ul>

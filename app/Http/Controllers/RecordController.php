<?php


namespace App\Http\Controllers;


use App\Document;
use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function create(Document $document)
    {
        return view('record_create', compact('document'));
    }

    public function store(Request $request, Document $document)
    {
        $document->records()->create(['text' => $request->text]);
        return redirect()->route('documents.show', $document);
    }

    public function destroy(Document $document, Record $record)
    {
        $record->delete();
        return redirect()->route('documents.show', $document);
    }
}

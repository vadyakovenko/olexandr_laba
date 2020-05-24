<?php

namespace App\Http\Controllers;

use App\Block;
use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function create()
    {
        $blocks = Block::all();
        return view('document_create', compact('blocks'));
    }

    public function store(Request $request)
    {
        /** @var Document $documen */
       $documen = Document::create($request->all());
       $documen->blocks()->attach($request->blocks);
       return redirect()->route('documents.show', $documen);
    }

    public function show(Document $document)
    {
        return view('document_show', compact('document'));
    }

    public function destroy(Document $document)
    {
        $document->records()->delete();
        $document->blocks()->detach();
        $document->delete();
        return redirect()->route('dashboard');
    }
}

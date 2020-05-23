<?php


namespace App\Http\Controllers;


use App\Block;
use App\Document;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    public function index()
    {
        $blocks = Block::all();
        $documents = Document::query();

        foreach ($blocks as $block) {
            $documents->whereHas('blocks', function(Builder $builder) use($block) {
                $builder->where('id', $block->id);
            })->get();
        }
        $documents = $documents->get();

        return view('dashboard', compact('blocks', 'documents'));
    }
}

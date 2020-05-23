<?php

namespace App\Http\Controllers;

use App\Block;

class BlockController extends Controller
{
    public function show(Block $block)
    {
        $beforeBlock = Block::where('step', $block->step-1)->first();
        $nextBlock = Block::where('step', $block->step+1)->first();
        return view('block', compact('block', 'beforeBlock', 'nextBlock'));
    }
}

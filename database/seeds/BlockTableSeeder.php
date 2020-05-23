<?php

use Illuminate\Database\Seeder;
use App\Block;

class BlockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['Проектування/планування', 'Опис блоку проектування/планування', 1],
            ['Створення виробничих потужностей', 'Опис блоку cтворення виробничих потужностей', 2],
            ['Виробництво', 'Опис блоку виробництво', 3],
            ['Процедури', 'Опис блоку процедури', 4]
        ];

        foreach ($data as $item) {
            Block::create(['name' => $item[0], 'description' => $item[1], 'step' => $item[2]]);
        }
    }
}

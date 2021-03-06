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
            [
                'Проектування/планування',
                'На етапі проектування вирішуєтья ряд важливих задач, що є основоположними для подальших дій. На цьому етапі вирішується хто є цільовою аудиторією, які є конкуренти, які є шляхи збуту, відповідність законодавству, вибір технології виробництва, вибір інгредієнтів для виробництва, вибір обладнання для виробництва',
                1
            ],
            [
                'Створення виробничих потужностей',
                'Етап створення виробницчих потужностей  повинен відповідати на питання і вирішувати наступні задачі:
                Чи є технологічні можливості створення виробництва, і що необхідно для створення цих можливостей;
                Яку кількість найманих працівників необхідно;
                Створення проектної документації;
                Створення документації із монтажу;
                Перевірка закупленого обладнання на відповідність вимогам
                Перевірка монтажу обладнання на відповідність вимогам
                Найм працівників',
                2
            ],
            [
                'Виробництво',
                'Даний блок дає відповіді на питання і вирішує наступні задачі:
                Закупка і контроль якості інгредієнтів;
                Виконання всіх необхідних технологічних операцій, а також контроль після кожної з них;
                Контроль смакових і візуальних якостей;
                Лабораторні дослідження;
                Розлив у тару і контроль цього процесу;
                Відправка на склад готової продукції',
                3
            ],
            ['Процедури', 'Опис блоку процедури', 4]
        ];

        foreach ($data as $item) {
            Block::create(['name' => $item[0], 'description' => $item[1], 'step' => $item[2]]);
        }
    }
}

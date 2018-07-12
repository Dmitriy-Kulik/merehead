<?php

use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $categories = [
            '0'=>[
                'name' => 'Автобиографическая повесть',
            ],
            '1'=>[
                'name' => 'Антиутопия',
            ],
            '2'=>[
                'name' => 'Бизнес-Книги',
            ],
            '3'=>[
                'name' => 'Драма',
            ],
            '4'=>[
                'name' => 'Исторический роман',
            ],
            '5'=>[
                'name' => 'Легенды и мифы',
            ],
            '6'=>[
                'name' => 'Мистика',
            ],
            '7'=>[
                'name' => 'Новелла',
            ],
            '8'=>[
                'name' => 'Повесть',
            ],
            '9'=>[
                'name' => 'Приключенческий роман',
            ],
            '10'=>[
                'name' => 'Научная фантастика',
            ],
            '11'=>[
                'name' => 'Пьеса',
            ],
            '12'=>[
                'name' => 'Рассказ',
            ],
            '13'=>[
                'name' => 'Роман',
            ],
            '14'=>[
                'name' => 'Стимпанк (паропанк)',
            ],
            '15'=>[
                'name' => 'Техническая литература',
            ],
            '16'=>[
                'name' => 'Триллер',
            ],
            '17'=>[
                'name' => 'Утопия',
            ],
            '18'=>[
                'name' => 'Учебная литература',
            ],
            '19'=>[
                'name' => 'Фантастика',
            ],
            '20'=>[
                'name' => 'Фантастический боевик',
            ],
            '21'=>[
                'name' => 'Философская литература',
            ],
            '22'=>[
                'name' => 'Фэнтези',
            ],
            '23'=>[
                'name' => 'Юмор',
            ],
        ];

        foreach ($categories as $category){
            $c = new Category();
            $c->name = $category['name'];
            $c->save();
        }
    }
}

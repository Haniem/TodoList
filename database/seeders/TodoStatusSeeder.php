<?php

namespace Database\Seeders;

use App\Models\TodoStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        TodoStatus::create([
            'todo_status_name' => 'Активная задача',
        ]);

        TodoStatus::create([
            'todo_status_name' => 'Выполненная задача',
        ]);

        TodoStatus::create([
            'todo_status_name' => 'Задача завершена',
        ]);
    }
}

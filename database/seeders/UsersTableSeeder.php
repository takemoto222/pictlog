<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
            'age' => 25,
            'profile' => 'よろしくお願いします',
        ];
        DB::table('users')->insert($param);
        return redirect('/');
    }
}

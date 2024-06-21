<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            TestSeeder::class,
            UserSeeder::class,
            AreaSeeder::class,//親のようから書かないといけない
            ShopSeeder::class
        ]);
        \App\Models\ContactForm::factory(100)->create();// 100件のダミーデータを作成

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

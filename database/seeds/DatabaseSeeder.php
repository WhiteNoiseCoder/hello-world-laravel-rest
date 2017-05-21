<?php
use App\HelloWorld;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(HelloWorldTableSeeder::class);
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'firstuser',
            'email' => 'firstuser@email.com',
            'password' => Hash::make('first_password')
        ));

        User::create(array(
            'name' => 'seconduser',
            'email' => 'seconduser@email.com',
            'password' => Hash::make('second_password')
        ));
    }
}

class HelloWorldTableSeeder extends Seeder {

    public function run()
    {
        DB::table('hello_world')->delete();

        HelloWorld::create(array(
            'hello' => 'Hi',
            'world' => 'England',
        ));

        HelloWorld::create(array(
            'hello' => 'Salut',
            'world' => 'France',
        ));
    }
}

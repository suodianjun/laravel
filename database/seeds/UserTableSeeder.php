<?php

use Illuminate\Database\Seeder;
use App\models\User;
use App\models\UserExt;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<100;$i++){
            $model =  User::query()->create([
                'username'=>str_random(20),
                'password'=>bcrypt('admin'),
                'email'=>str_random(10).'@qq.com'
            ]);
            UserExt::query()->create([
                'uid'=>$model->id,
                'intro'=>str_random(50)
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class TableUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $users = [
        ['name'=>'Wasila Maulidiyah', 'level'=>'admin', 'email'=>'admin@gmail.com', 'password'=>bcrypt('admin')],
        ['name'=>'Tiara', 'level'=>'admin1', 'email'=>'admintiara@gmail.com', 'password'=>bcrypt('admin1')],
        ['name'=>'Shelly', 'level'=>'user', 'email'=>'user1@gmail.com', 'password'=>bcrypt('user1')],
        ['name'=>'Jihan', 'level'=>'user2', 'email'=>'user2@gmail.com', 'password'=>bcrypt('user2')],
        ['name'=>'Zhafirah', 'level'=>'admin2', 'email'=>'adminzhafirah@gmail.com', 'password'=>bcrypt('admin2')],
      ];
      foreach ($users as $row) {
        DB::table('users')->insert($row);
      }
    }
}

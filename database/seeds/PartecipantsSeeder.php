<?php

use Illuminate\Database\Seeder;

class PartecipantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Partecipant::class,30)->create();
    }
}

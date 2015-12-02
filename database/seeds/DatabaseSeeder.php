<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
		//cancella prima i partecipanti
        DB::table('partecipants')->delete();
        
       
        
        // $this->call(UserTableSeeder::class);
        
        //aggiungi partecipanti
        $this->call(PartecipantsSeeder::class);

        Model::reguard();
    }
}

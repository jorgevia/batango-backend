<?php
use Illuminate\Database\Seeder;
use \App\models\Magazine;

class MagazinesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('magazines')->delete();

        Magazine::create([
            'issue' => '216',
            'fromDate' => '2013-11-01',
            'toDate' => '2014-02-28',
            'year' => 19
        ]);
    }

}

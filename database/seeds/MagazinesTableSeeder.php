<?php
use Illuminate\Database\Seeder;
use \Batango\entities\Magazine;

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


/*
 * public function run()
{
    DB::table('alpha')->delete();

    Alpha::create( array(
        'all'           =>  'all',
        'your'          =>  'your',
        'stuff'         =>  'stuff',
    ) )->beta()->attach( $idOfYourBeta );
}
 */
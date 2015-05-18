<?php
use Illuminate\Database\Seeder;
use \Batango\entities\Magazine;
use \Batango\entities\Article;
use \Batango\entities\Section;

class MagazinesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('magazines')->delete();

        Magazine::create([
            'id' => 1,
            'issue' => '216',
            'fromDate' => '2013-11-01',
            'toDate' => '2014-02-28',
            'year' => 19
        ]);

        Section::create([
            'id' => 1,
            'description' => "Hace 10 años",
        ]);

        Article::create([
            'section_id' => 1,
            'magazine_id' => 1,
            'title' => '10 años de recuerdos',
            'description' => 'Debería ser una descripción',
            'page_number' => '24',
            'picture_url' => null,
            'is_main' => 1
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

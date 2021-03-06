<?php namespace Batango\entities;

use Illuminate\Database\Eloquent\Model;

class Section extends Model {

    //Using presenter
    //use PresentableTrait;
    //protected $presenter = 'Batango\presenters\Magazine';

    //I believe this table doesn't need a relation
    //But I need to learn a bit more about that Relationship
    public function articles() {
        return $this->hasMany('\Batango\entities\Article');
    }

    //Prevent massive assignment
    protected $fillable = [
        'description',
        'image_url'
    ];

}

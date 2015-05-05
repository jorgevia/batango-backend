<?php namespace Batango\entities;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

    //Using presenter
    //use PresentableTrait;
    //protected $presenter = 'Batango\presenters\Magazine';

    public function articles()
    {
        return $this->belongsToMany('\Batango\entities\Article');
    }

    //Prevent massive assignment
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'biography',
        'email',
        'avatar_url'
    ];

}

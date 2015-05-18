<?php namespace Batango\entities;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    //Using presenter
    //use PresentableTrait;
    //protected $presenter = 'Batango\presenters\Magazine';

    //Relationship
    public function magazine() {
        return $this->belongsTo('\Batango\entities\Magazine');
    }

    public function section() {
        return $this->belongsTo('\Batango\entities\Section');
    }

    public function authors()
    {
        return $this->belongsToMany('\Batango\entities\Author');
    }

    //Prevent massive assignment
    protected $fillable = [
        'section_id',
        'magazine_id',
        'title',
        'description',
        'page_number',
        'picture_url',
        'is_main'
    ];

}
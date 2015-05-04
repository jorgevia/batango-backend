<?php namespace Batango\entities;

use Batango\presenters\contracts\PresenterInterface;
use Illuminate\Database\Eloquent\Model;
use Batango\presenters\PresentableTrait;

class Magazine extends Model implements PresenterInterface{

    //Using presenter
    use PresentableTrait;
    protected $presenter = 'Batango\presenters\Magazine';

    //Convert this two properties to Carbon instances
    protected $dates = ['fromDate', 'toDate'];

    //Prevent massive assignment
    protected $fillable = [
        'issue',
        'summary',
        'fromDate',
        'toDate',
        'year'
    ];
}
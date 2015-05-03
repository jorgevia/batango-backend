<?php namespace App\models;
/**
 * Created by PhpStorm.
 * User: jorgevia
 * Date: 01/05/15
 * Time: 19:05
 */

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model{

    public function getDates()
    {
        return array('created_at', 'updated_at', 'fromDate', 'toDate');
    }
}

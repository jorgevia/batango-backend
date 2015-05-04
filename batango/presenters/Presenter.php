<?php
/**
 * Created by PhpStorm.
 * User: jorgevia
 * Date: 03/05/15
 * Time: 17:00
 */

namespace Batango\presenters;


use Batango\presenters\exceptions\PresenterException;

abstract class Presenter {

    protected $entity;

    public function __construct($entity) {
        $this->entity = $entity;
    }

    public function __get($property) {
        if(method_exists($this, $property)) {
            return $this->{$property}();
        }
        if(property_exists($this, $property)) {
            return $this->entity->{$property};
        }
        throw new PresenterException('Property doesn\'t exist in entity or method doen\'t exist in Presenter');
    }
}
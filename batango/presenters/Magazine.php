<?php namespace Batango\presenters;


class Magazine extends Presenter {

    public function fromDate() {
        return $this->entity->fromDate->format('d m Y');
    }

    public function toDate() {
        return $this->entity->toDate->format('d m Y');
    }

}
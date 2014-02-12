<?php

class Ingredient extends Eloquent {

    protected $table = 'ingredients';
    protected $guarded = array('id');
    public $timestamps = false;

    public function users()
    {
        return $this->hasMany('User', 'favorite');
    }

}

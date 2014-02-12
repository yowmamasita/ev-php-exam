<?php

class User extends Eloquent {

    protected $table = 'users';
    protected $guarded = array('id');
    public $timestamps = false;

    public function ingredient()
    {
        return $this->belongsTo('Ingredient', 'favorite');
    }

}

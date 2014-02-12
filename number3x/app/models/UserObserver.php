<?php

class UserObserver {

    public function saving($user)
    {
        $user->favorite = DB::table('ingredients')->where('name', $user->favorite)->first()->id;
    }

}

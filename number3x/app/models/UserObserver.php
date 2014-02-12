<?php

class UserObserver {

    public function saving($user)
    {
        $user->favorite = DB::table('ingredients')->where('name', $user->favorite)->first()->id;
    }

    public function saved($user)
    {
        DB::table('ingredients')->where('id', $user->favorite)->increment('popularity', 1);
    }

}

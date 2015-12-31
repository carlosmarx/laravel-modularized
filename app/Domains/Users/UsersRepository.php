<?php

namespace Matrix\Domains\Users;

class UsersRepository
{
    public function getAll($paginate = false, $take = 15)
    {
        $query = User::query();

        if($paginate){
            return $query->paginate($take);
        }

        if(is_int($take)){
            $query->take($take);
        }

        return $query->get();
    }
}
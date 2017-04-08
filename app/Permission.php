<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        //Pegando o relacionamento de todos as funcoes dessa permissao
        return $this->belongsToMany(\App\Role::class);
    }
}
